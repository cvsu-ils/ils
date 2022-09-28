<div class="container-fluid ils-bg-default">
    <div class="container p-3">
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Create Profile</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="./">Home</a></li>
                            <li class="breadcrumb-item"><a href="?view=profile">Profile</a></li>
                            <li class="breadcrumb-item active">Create Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card card-success card-outline">
                            <div class="card-body box-profile">
                                <div class="text-center">
                                    <img class="profile-user-img img-fluid img-circle" src="<?php echo $user['google_userinfo']['gu_picture'];?>" alt="User profile picture">
                                </div>
                                <div class="px-3 mt-3">
                                    <div class="form-group row mb-3">
                                        <label for="inputName" class="col-form-label">First Name</label>
                                        <input class="form-control" type="text" value="<?php echo $user['google_userinfo']['gu_givenName'];?>" placeholder="First name...">
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputName" class="col-form-label">Middle Name</label>
                                        <input class="form-control" type="text" placeholder="Middle name...">
                                    </div>
                                    <div class="form-group row mb-3">
                                        <label for="inputName" class="col-form-label">Last Name</label>
                                        <input class="form-control" type="text" value="<?php echo $user['google_userinfo']['gu_familyName'];?>" placeholder="Last name...">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="card">
                            <div class="card-header p-3 ils-bg-green">
                                <h3 class="card-title text-white"><i class="fas fa-user-plus"></i> Create Profile</h3>
                            </div>
                            <div class="card-body">
                                <form class="form-horizontal">
                                    <div class="form-group row">
                                        <label for="campus" class="col-lg-2 col-sm-12 col-form-label">Campus</label>
                                        <div class="col-lg-10 col-sm-12">
                                            <select class="form-control" data-select="campus">
                                                <option value="" selected disabled>Choose campus...</option>
                                                <?php
                                                    if($campuses) {
                                                        foreach($campuses as $campus) {
                                                            echo '<option value="' . $campus['id'] .'">' . $campus['name'] .'</option>';
                                                        }
                                                    }
                                                ?>
                                            </select>
                                            <div class="valid-feedback">
                                                Campus is valid!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="userType" class="col-lg-2 col-sm-12 col-form-label">User Type</label>
                                        <div class="col-lg-10 col-sm-12">
                                            <select class="form-control" data-select="userType">
                                                <option value="" selected disabled>Choose user type...</option>
                                                <option value="Student">Student</option>
                                                <option value="Faculty">Faculty (Academic)</option>
                                                <option value="Staff">Staff (Non-Academic)</option>
                                            </select>
                                            <div class="valid-feedback">
                                                User type is valid!
                                            </div>
                                        </div>
                                    </div>
                                    <!-- STUDENT FIELDS -->
                                    <div class="d-none" data-show="studentSelected">
                                        <div class="form-group row">
                                            <label for="studentNumber" class="col-lg-2 col-sm-12 col-form-label">Student Number</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="studentNumber" placeholder="Student Number..." maxLength="9">
                                                <div class="valid-feedback">
                                                    Student Number is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Student number must contain 9 digits only!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="studentCollege" class="col-lg-2 col-sm-12 col-form-label">College</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="studentCollege">
                                                    <option value="" selected disabled>Choose college...</option>
                                                    <?php
                                                        if($colleges) {
                                                            foreach($colleges as $college) {
                                                                echo '<option value="' . $college['id'] .'">' . $college['name'] .'</option>';
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    College is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    College is required!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="studentCourse" class="col-lg-2 col-sm-12 col-form-label">Course</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="studentCourse">
                                                    <option value="" selected disabled>Choose course...</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    Course is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Course is required!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- FACULTY FIELDS -->
                                    <div class="d-none" data-show="facultySelected">
                                        <div class="form-group row">
                                            <label for="facultyId" class="col-lg-2 col-sm-12 col-form-label">Employee ID</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="facultyId" placeholder="Employee ID...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="facultyPosition" class="col-lg-2 col-sm-12 col-form-label">Position</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="facultyPosition" placeholder="Position...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="facultyCollege" class="col-lg-2 col-sm-12 col-form-label">College</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="facultyCollege">
                                                    <option value="" selected disabled>Choose college...</option>
                                                    <?php
                                                        if($colleges) {
                                                            foreach($colleges as $college) {
                                                                echo '<option value="' . $college['id'] .'">' . $college['name'] .'</option>';
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    College is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    College is required!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- STAFF FIELDS -->
                                    <div class="d-none" data-show="staffSelected">
                                        <div class="form-group row">
                                            <label for="staffId" class="col-lg-2 col-sm-12 col-form-label">Employee ID</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="staffId" placeholder="Employee ID...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staffPosition" class="col-lg-2 col-sm-12 col-form-label">Position</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="staffPosition" placeholder="Position...">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="staffCollege" class="col-lg-2 col-sm-12 col-form-label">Office</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="staffCollege">
                                                    <option value="" selected disabled>Choose office...</option>
                                                    <?php
                                                        if($offices) {
                                                            foreach($offices as $office) {
                                                                echo '<option value="' . $office['id'] .'">' . $office['name'] .'</option>';
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    Office is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Office is required!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <hr>
                                    <div class="form-group row">
                                        <label for="sex" class="col-lg-2 col-sm-12 col-form-label">Sex</label>
                                        <div class="col-lg-10 col-sm-12">
                                            <select class="form-control" data-select="sex">
                                                <option value="" selected disabled>Choose sex...</option>
                                                <option value="Male">Male</option>
                                                <option value="Female">Female</option>
                                            </select>
                                            <div class="valid-feedback">
                                                Sex is valid!
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="address" class="col-lg-2 col-sm-12 col-form-label">Address</label>
                                        <div class="col-lg-10 col-sm-12">
                                            <textarea class="form-control" data-textarea="address" placeholder="Address..."></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <label for="mobileNumber" class="col-lg-2 col-sm-12 col-form-label">Mobile Number</label>
                                        <div class="col-lg-10 col-sm-12">
                                            <input type="text" class="form-control" data-input="mobileNumber" placeholder="Mobile Number..." mainLength="11" maxLength="11">
                                            <div class="valid-feedback">
                                                Mobile number is valid!
                                            </div>
                                            <div class="invalid-feedback">
                                                Mobile number must contain 11 digits only! <em>Example: 09xxxxxxxxx</em>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-sm-2 col-lg-10 col-sm-12">
                                            <div class="checkbox">
                                                <label>
                                                    <input type="checkbox" data-checkbox="terms"> I agree to the <a href="javascript:void(0)" data-toggle="modal" data-target="#modal-xl" data-backdrop="static" data-keyboard="false" >terms and conditions</a>
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="offset-lg-2 offset-sm-0 col-lg-10 col-sm-12">
                                            <button type="submit" class="btn ils-bg-green text-white" disabled>Submit</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<div class="modal fade" id="modal-xl" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Terms and Conditions</h4>
            </div>
            <div class="modal-body">
                <p>...
                    <?php
                        $i = 0;
                        while($i < 100) {
                            echo $i + 1 . '<br>';
                            $i++;
                        }
                    ?>
                </p>
            </div>
            <div class="modal-footer justify-content-end">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Agree</button>
            </div>
        </div>
    </div>
</div>
<script>
    const campusSelection = document.querySelector('[ data-select="campus"]');
    const userTypeSelection = document.querySelector('[data-select="userType"]');
    const studentFields = document.querySelector('[data-show="studentSelected"]');
    const facultyFields = document.querySelector('[data-show="facultySelected"]');
    const staffFields = document.querySelector('[data-show="staffSelected"]');
    const studentNumberInput = document.querySelector('[data-input="studentNumber"]');
    const studentCollegeSelection = document.querySelector('[data-select="studentCollege"]');
    const studentCourseSelection = document.querySelector('[data-select="studentCourse"]');
    const sexSelection = document.querySelector('[data-select="sex"]');
    const addressTextArea = document.querySelector('[data-textarea="address"]');
    const mobileNumberInput = document.querySelector('[data-input="mobileNumber"]');
    const termsCheckBox = document.querySelector('[data-checkbox="terms"]');

    document.addEventListener("click", function(e) {
        termsCheckBox.checked = false;
    });

    document.addEventListener("change", function(e) {
        CheckForm();
    });

    document.addEventListener("keyup", function(e) {
        CheckForm();
    });

    function CheckForm() {
        if(campusSelection.value === "") {
            ShowValidation(campusSelection, "REMOVEALL");
        } else {
            if(campusSelection === document.activeElement) {
                ShowValidation(campusSelection, "is-valid");
            }
        }
        if(userTypeSelection.value === "") {
            ShowValidation(userTypeSelection, "REMOVEALL");
        } else {
            if(userTypeSelection === document.activeElement) {
                ShowValidation(userTypeSelection, "is-valid");
                if(!studentFields.classList.contains("d-none")) {
                    studentFields.classList.add("d-none");
                }
                if(!facultyFields.classList.contains("d-none")) {
                    facultyFields.classList.add("d-none");
                }
                if(!staffFields.classList.contains("d-none")) {
                    staffFields.classList.add("d-none");
                }
                switch(userTypeSelection.options[userTypeSelection.selectedIndex].value) {
                    case "Student":
                        if(studentFields.classList.contains("d-none")) {
                            studentFields.classList.remove("d-none");
                        }
                        break;
                    case "Faculty":
                        if(facultyFields.classList.contains("d-none")) {
                            facultyFields.classList.remove("d-none");
                        }
                        break;
                    case "Staff":
                        if(staffFields.classList.contains("d-none")) {
                            staffFields.classList.remove("d-none");
                        }
                        break;
                }
            }
        }
        if(studentNumberInput.value === "") {
            ShowValidation(studentNumberInput, "is-invalid");
        } else {
            if(studentNumberInput === document.activeElement) {
                if(studentNumberInput.value.length == studentNumberInput.maxLength) {
                    ShowValidation(studentNumberInput, "is-valid");
                } else {
                    ShowValidation(studentNumberInput, "is-invalid");
                }
            }
        }
        if(studentCollegeSelection.value === "") {
            ShowValidation(studentCollegeSelection, "is-invalid");
        } else {
            if(studentCollegeSelection === document.activeElement) {
                ShowValidation(studentCollegeSelection, "is-valid");
            }
        }
        if(studentCourseSelection.value === "") {
            ShowValidation(studentCourseSelection, "is-invalid");
        } else {
            if(studentCourseSelection === document.activeElement) {
                ShowValidation(studentCourseSelection, "is-valid");
            }
        }
        if(sexSelection.value === "") {
            ShowValidation(sexSelection, "REMOVEALL");
        } else {
            if(sexSelection === document.activeElement) {
                ShowValidation(sexSelection, "is-valid");
            }
        }
        if(mobileNumberInput === "") {
            ShowValidation(mobileNumberInput, "is-invalid");
        } else {
            if(mobileNumberInput === document.activeElement) {
                if(mobileNumberInput.value.length == mobileNumberInput.maxLength) {
                    ShowValidation(mobileNumberInput, "is-valid");
                } else {
                    ShowValidation(mobileNumberInput, "is-invalid");
                }
            }
        }
    };

    // Restricts input for the given textbox to the given inputFilter function.
    function setInputFilter(textbox, inputFilter, errMsg) {
        ["input", "keydown", "keyup", "mousedown", "mouseup", "select", "contextmenu", "drop", "focusout"].forEach(function(event) {
            textbox.addEventListener(event, function(e) {
            if (inputFilter(this.value)) {
                // Accepted value
                if (["keydown","mousedown","focusout"].indexOf(e.type) >= 0){
                this.classList.remove("input-error");
                this.setCustomValidity("");
                }
                this.oldValue = this.value;
                this.oldSelectionStart = this.selectionStart;
                this.oldSelectionEnd = this.selectionEnd;
            } else if (this.hasOwnProperty("oldValue")) {
                // Rejected value - restore the previous one
                this.classList.add("input-error");
                this.setCustomValidity(errMsg);
                this.reportValidity();
                this.value = this.oldValue;
                this.setSelectionRange(this.oldSelectionStart, this.oldSelectionEnd);
            } else {
                // Rejected value - nothing to restore
                this.value = "";
            }
            });
        });
    }

    setInputFilter(studentNumberInput, function(value) {
        return /^-?\d*$/.test(value);
    }, "");

    setInputFilter(mobileNumberInput, function(value) {
        return /^-?\d*$/.test(value);
    }, "");
    // Install input filters.
    // setInputFilter(document.getElementById("intTextBox"), function(value) {
    //     return /^-?\d*$/.test(value); }, "Must be an integer");
    // }
    // setInputFilter(document.getElementById("uintTextBox"), function(value) {
    //     return /^\d*$/.test(value); }, "Must be an unsigned integer");
    // }
    // setInputFilter(document.getElementById("intLimitTextBox"), function(value) {
    //     return /^\d*$/.test(value) && (value === "" || parseInt(value) <= 500); }, "Must be between 0 and 500");
    // }
    // setInputFilter(document.getElementById("floatTextBox"), function(value) {
    //     return /^-?\d*[.,]?\d*$/.test(value); }, "Must be a floating (real) number");
    // }
    // setInputFilter(document.getElementById("currencyTextBox"), function(value) {
    //     return /^-?\d*[.,]?\d{0,2}$/.test(value); }, "Must be a currency value");
    // }
    // setInputFilter(document.getElementById("latinTextBox"), function(value) {
    //     return /^[a-z]*$/i.test(value); }, "Must use alphabetic latin characters");
    // }
    // setInputFilter(document.getElementById("hexTextBox"), function(value) {
    //     return /^[0-9a-f]*$/i.test(value); }, "Must use hexadecimal characters");
    // }
    // $(window).scroll(function() {
    //     if($(window).scrollTop() + $(window).height() == $(document).height()) {
    //         alert("bottom!");
    //     }
    // });
</script>