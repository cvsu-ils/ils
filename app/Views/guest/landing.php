<div class="container-xl mt-5 mb-5">
    <div class="d-flex flex-column">
        <div class="p-3 rounded mb-5 bg-danger text-center text-white align-self-center" style="max-width: 500px;" data-container="error"><i class="fas fa-exclamation-circle"></i> You need to complete the authentication to proceed</div>
        <div class="p-3 rounded mb-5 ils-bg-green text-center text-white align-self-center d-none" style="max-width: 500px;" data-container="success"><i class="fas fa-check-circle"></i> Successfully signed in. Redirecting...</div>
        <div class="card p-5 rounded shadow align-self-center" style="min-width: 450px; max-width: 450px;" data-form="signin">
            <h3 class="font-weight-bold text-center mb-3">Sign In</h3>
            <div class="form-group mb-3">
                <select class="form-control" required data-select="campus">
                    <?php
                        foreach($campuses as $campus) {
                            echo '<option value="' . $campus->id . '" ' . ($campus->id == 1 ? 'selected' : '') . '>' . $campus->name . '</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mb-3">
                <select class="form-control" required data-select="user">
                    <option value="student">Student</option>
                    <option value="faculty">Faculty</option>
                    <option value="staff">Staff</option>
				</select>
            </div>
            <div class="form-group mb-3" data-container="college">
                <select class="form-control" data-select="college">
                    <option value="" disabled selected>Choose your college...</option>
                    <?php
                        foreach($colleges as $college) {
                            echo '<option value="' . $college->id . '">' . $college->abbr . '</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mb-3 d-none" data-container="office">
                <select class="form-control" data-select="office">
                    <option value="" disabled selected>Choose your office...</option>
                    <?php
                        foreach($offices as $office) {
                            echo '<option value="' . $office->id . '">' . $office->abbr . '</option>';
                        }
                    ?>
                </select>
            </div>
            <div class="form-group mb-3" data-container="course">
                <select class="form-control" disabled data-select="course">
                    <option value="">Choose your course...</option>
                    <?php
                        foreach($courses as $course) {
                            echo '<option value="' . $course->id . '">' . $course->abbr . '</option>';
                        }
                    ?>
                </select>
            </div>
            <button class="btn bg-primary disabled" data-submit="guest">Sign in as Guest</button>
            <input type="hidden" value="<?php echo $module;?>" data-hidden="module">
            <input type="hidden" value="<?php echo $id;?>" data-hidden="id">
            <p class="mt-3 text-muted text-center">OR</p>
            <div class="text-center">
                <a href="<?php echo $this->app->config->auth->google->url?>">
                    <div class="cvsu-google-btn d-inline-block">
                        <div class="cvsu-google-icon-wrapper">
                        <img class="cvsu-google-icon" style="margin-left: -8px !important;" src="storage/images/CvSU-logo-64x64.webp"/>
                        </div>
                        <p class="btn-text"><b>Sign in with CvSU email</b></p>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>

<script>
    const errorContainer = document.querySelector('[data-container="error"]');
    const successContainer = document.querySelector('[data-container="success"]');
    const formContainer = document.querySelector('[data-form="signin"]');

    const campusSelect = document.querySelector('[data-select="campus"]');
    const userSelect = document.querySelector('[data-select="user"]');
    const collegeSelect = document.querySelector('[data-select="college"]');
    const officeSelect = document.querySelector('[data-select="office"]');
    const courseSelect = document.querySelector('[data-select="course"]');

    const collegeContainer= document.querySelector('[data-container="college"]');
    const officeContainer = document.querySelector('[data-container="office"]');
    const courseContainer = document.querySelector('[data-container="course"]');

    const module = document.querySelector('[data-hidden="module"]');
    const id = document.querySelector('[data-hidden="id"]');
    const authBtn = document.querySelector('[data-submit="guest"]');

    campusSelect.addEventListener("change", () => {
        Validate();
    });

    userSelect.addEventListener("change", () => {
        Validate();
    });

    collegeSelect.addEventListener("change", () => {
        Validate();
    });

    courseSelect.addEventListener("change", () => {
        Validate();
    });

    officeSelect.addEventListener("change", () => {
        Validate();
    });

    authBtn.addEventListener("click", (e) => {
        e.preventDefault();
        if(authBtn.classList.contains("disabled")) {
            return;
        }
        var formData = new FormData();
        if(campusSelect.options[campusSelect.selectedIndex].value == 1) {
            switch(userSelect.options[userSelect.selectedIndex].value) {
                case 'student':
                    formData.append('college', collegeSelect.options[collegeSelect.selectedIndex].value);
                    formData.append('course', courseSelect.options[courseSelect.selectedIndex].value);
                    break;
                case 'faculty':
                    formData.append('college', collegeSelect.options[collegeSelect.selectedIndex].value);
                    break;
                case 'staff':
                    formData.append('office', officeSelect.options[officeSelect.selectedIndex].value);
                    break;
            }
        }
        formData.append('campus', campusSelect.options[campusSelect.selectedIndex].value);
        formData.append('user', userSelect.options[userSelect.selectedIndex].value);
        formData.append('module', module.value);
        formData.append('id', id.value);

        $.ajax({
            type: "POST",
            url: "?view=guest&action=auth",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(JSON.parse(response).status === "success") {
                    Swal.fire({
                        icon: JSON.parse(response).status,
                        title: JSON.parse(response).title,
                        text: JSON.parse(response).message,
                        allowOutsideClick: false
                    }).then((result) => {
                        if(result.isConfirmed) {
                            ApplyClass(errorContainer, "d-none", false);
                            ApplyClass(formContainer, "d-none", false);
                            ApplyClass(successContainer, "d-none", true);

                            window.location.replace(JSON.parse(response).redirect);
                        }
                    });
                }
            }
        });
    });

    function Validate() {
        ApplyClass(authBtn, "disabled", false);
        if(campusSelect.options[campusSelect.selectedIndex].value == 1) {
            switch(userSelect.options[userSelect.selectedIndex].value) {
                case 'student':
                    ApplyClass(collegeContainer, "d-none", true);
                    ApplyClass(courseContainer, "d-none", true);
                    ApplyClass(officeContainer, "d-none", false);
                    if(collegeSelect.value != "" && collegeSelect == document.activeElement) {
                        ApplyClass(courseContainer, "d-none", true);

                        var formData = new FormData();
                        formData.append('id', collegeSelect.options[collegeSelect.selectedIndex].value);
                        $.ajax({
                            type: "POST",
                            url: "?view=guest&action=getcourses",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                var data = JSON.parse(response).data;

                                courseSelect.innerHTML = "";

                                Object.keys(data).forEach(function(key, index) {
                                    var option = document.createElement("option");
                                    option.text = data[index]['abbr'];
                                    option.value = data[index]['id'];
                                    courseSelect.appendChild(option);
                                });
                            }
                        });
                        SetDisable(courseSelect, false);
                    }
                    console.log(courseSelect.value);
                    if(collegeSelect.value != "" || courseSelect.value != "") {
                        ApplyClass(authBtn, "disabled", true);
                    }
                    break;
                case 'faculty':
                    courseSelect.selectedIndex = 0;
                    courseSelect.innerHTML = '<option value="" disabled selected>Choose your course...</option>';
                    SetDisable(courseSelect, true);

                    ApplyClass(collegeContainer, "d-none", true);
                    ApplyClass(courseContainer, "d-none", false);
                    ApplyClass(officeContainer, "d-none", false);

                    if(collegeSelect.value != "") {
                        ApplyClass(authBtn, "disabled", true);
                    }
                    break;
                case 'staff':
                    collegeSelect.selectedIndex = 0;
                    courseSelect.selectedIndex = 0;
                    courseSelect.innerHTML = '<option value="" disabled selected>Choose your course...</option>';
                    SetDisable(courseSelect, true);

                    ApplyClass(collegeContainer, "d-none", false);
                    ApplyClass(courseContainer, "d-none", false);
                    ApplyClass(officeContainer, "d-none", true);

                    if(officeSelect.value != "") {
                        ApplyClass(authBtn, "disabled", true);
                    }
                    break;
            }
        } else {
            ApplyClass(collegeContainer, "d-none", false);
            ApplyClass(courseContainer, "d-none", false);
            ApplyClass(officeContainer, "d-none", false);

            ApplyClass(authBtn, "disabled", true);
        }
    }
</script>