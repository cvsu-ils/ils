<?php
    $studentNumber = NULL;
    $lastName = $user->google_userinfo->gu_familyName;
    $firstName = $user->google_userinfo->gu_givenName;
    $sex = "";
    $address = "";
    $mobileNumber = "";
    $collegeId = 0;
    $officeId = 0;
    $userType = "";

    if($tempInfo) {
        $studentNumber = $tempInfo->student_number;
        $lastName = ucwords(strtolower($tempInfo->last_name)) ?? $user->google_userinfo->gu_familyName;
        $firstName = ucwords(strtolower($tempInfo->first_name)) ?? $user->google_userinfo->gu_givenName;
        $sex = $tempInfo->sex == "M" ? "Male" : "Female";
        $address =  ucwords(strtolower($tempInfo->address));
        $mobileNumber = "0" . $tempInfo->mobile_number;
        $collegeId = $tempInfo->college_id;
        $userType = "Student";
    }
?>
<div class="container-fluid ils-bg-default">
    <div class="container p-3 mb-5">
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
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <div class="pt-3 pb-3">
                            <div class="d-block font-weight-bold text-uppercase text-muted" data-step="text">
                                Step: 1 of 3
                            </div>
                            <div class="d-block font-weight-bold text-uppercase" data-step="details">
                                <h5 class="font-weight-bold" data-title="name">Your name</h5>
                                <div class="progress progress-sm active">
                                    <div class="progress-bar bg-success progress-bar-striped" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 0%">
                                        <!-- <span class="sr-only">20% Complete</span> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="offset-lg-2 col-lg-8 col-md-12 col-sm-12">
                        <div class="card card-success card-outline">
                            <form data-form="createProfile">
                                <div class="card-body box-profile">
                                    <div class="px-3 ils-step-form" data-step="1">
                                        <div class="form-group row mb-3">
                                            <label for="inputName" class="col-lg-2 col-sm-12 col-form-label">First Name</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input class="form-control" type="text" value="<?php echo $firstName;?>" placeholder="First name..." data-input="firstName">
                                                <div class="valid-feedback">
                                                    First name is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    First name cannot be empty!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputName" class="col-lg-2 col-sm-12 col-form-label">Middle Name</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input class="form-control" type="text" placeholder="Middle name..." data-input="middleName">
                                            </div>
                                        </div>
                                        <div class="form-group row mb-3">
                                            <label for="inputName" class="col-lg-2 col-sm-12 col-form-label">Last Name</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input class="form-control" type="text" value="<?php echo $lastName;?>" placeholder="Last name..." data-input="lastName">
                                                <div class="valid-feedback">
                                                    Last name is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Last name cannot be empty!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 ils-step-form d-none" data-step="2">
                                        <div class="form-group row">
                                            <label for="sex" class="col-lg-2 col-sm-12 col-form-label">Sex</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="sex">
                                                    <option value="" selected disabled>Choose sex...</option>
                                                    <?php
                                                        $sexes = array("Male", "Female");
                                                        foreach($sexes as $temp) {
                                                            if($sex == $temp) {
                                                                echo '<option value="' . $temp . '" selected>' . $temp . '</option>';
                                                            } else {
                                                                echo '<option value="' . $temp . '">' . $temp . '</option>';
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    Sex field is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select an option!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="address" class="col-lg-2 col-sm-12 col-form-label">Address</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <textarea class="form-control" data-textarea="address" placeholder="Address..."><?php echo $address;?></textarea>
                                                <div class="valid-feedback">
                                                    Address is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Address is required!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="mobileNumber" class="col-lg-2 col-sm-12 col-form-label">Mobile Number</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <div class="input-group mb-2">
                                                    <div class="input-group-prepend">
                                                    <div class="input-group-text">+63</div>
                                                    </div>
                                                    <input type="text" class="form-control" data-input="mobileNumber" placeholder="Mobile Number..." minLength="10" maxLength="10" <?php echo $mobileNumber;?>>
                                                    <div class="valid-feedback">
                                                        Mobile number is valid!
                                                    </div>
                                                    <div class="invalid-feedback">
                                                        Mobile number must contain 11 digits only! <em>Example: +63xxxxxxxxxx</em>
                                                    </div>
                                                </div>
                                                <!-- <input type="text" class="form-control" data-input="mobileNumber" placeholder="Mobile Number..." mainLength="11" maxLength="11" value="<?php echo $mobileNumber;?>"> -->
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 ils-step-form d-none" data-step="3">
                                        <div class="form-group row">
                                            <label for="campus" class="col-lg-2 col-sm-12 col-form-label">Campus</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="campus">
                                                    <option value="" selected disabled>Choose campus...</option>
                                                    <?php
                                                        if($campuses) {
                                                            foreach($campuses as $campus) {
                                                                echo '<option value="' . $campus->id .'">' . $campus->name .'</option>';
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    Campus is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select an option!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label for="userType" class="col-lg-2 col-sm-12 col-form-label">User Type</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="userType">
                                                    <option value="" selected disabled>Choose user type...</option>
                                                    <?php
                                                        $userTypes = array("Student" => "Student", "Faculty" => "Faculty (Academic)", "Staff" => "Staff (Non-Academic)");
                                                        foreach($userTypes as $key => $value) {
                                                            if($key == $userType) {
                                                                echo '<option value="' . $key .'" selected>' . $value . '</option>';
                                                            } else {
                                                                echo '<option value="' . $key .'">' . $value . '</option>';
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    User Type is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select an option!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 ils-step-form d-none" data-step="4">
                                        <div class="form-group row" data-container="studentNumber">
                                            <label for="studentNumber" class="col-lg-2 col-sm-12 col-form-label">Student Number</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="studentNumber" placeholder="Student Number..." maxLength="9" value="<?php echo $studentNumber;?>">
                                                <div class="valid-feedback">
                                                    Student Number is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Student number must contain 9 digits only!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" data-container="office">
                                            <label for="office" class="col-lg-2 col-sm-12 col-form-label">Office</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="office">
                                                    <option value="" selected disabled>Choose office...</option>
                                                    <?php
                                                        if($offices) {
                                                            foreach($offices as $office) {
                                                                if($officeId == $office->id) {
                                                                    echo '<option value="' . $office->id .'" selected>' . $office->name .'</option>';
                                                                } else {
                                                                    echo '<option value="' . $office->id .'">' . $office->name .'</option>';
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    Office is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select an option!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" data-container="employeeId">
                                            <label for="employeeId" class="col-lg-2 col-sm-12 col-form-label">Employee ID</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="employeeId" placeholder="Employee ID...">
                                                <div class="valid-feedback">
                                                    Employee ID is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Employee ID is required!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" data-container="position">
                                            <label for="position" class="col-lg-2 col-sm-12 col-form-label">Position</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <input type="text" class="form-control" data-input="position" placeholder="Position...">
                                                <div class="valid-feedback">
                                                    Position is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Position is required!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" data-container="college">
                                            <label for="college" class="col-lg-2 col-sm-12 col-form-label">College</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="college">
                                                    <option value="" selected disabled>Choose college...</option>
                                                    <?php
                                                        if($colleges) {
                                                            foreach($colleges as $college) {
                                                                if($collegeId == $college->id) {
                                                                    echo '<option value="' . $college->id .'" selected>' . $college->name .'</option>';
                                                                } else {
                                                                    echo '<option value="' . $college->id .'">' . $college->name .'</option>';
                                                                }
                                                            }
                                                        }
                                                    ?>
                                                </select>
                                                <div class="valid-feedback">
                                                    College is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select an option!
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row" data-container="course">
                                            <label for="course" class="col-lg-2 col-sm-12 col-form-label">Course</label>
                                            <div class="col-lg-10 col-sm-12">
                                                <select class="form-control" data-select="course" disabled>
                                                    <option value="" selected disabled>Choose course...</option>
                                                </select>
                                                <div class="valid-feedback">
                                                    Course is valid!
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please select an option!
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="px-3 ils-step-form d-none" data-step="5">
                                        <div class="form-group mb-3">
                                            <label class="col-form-label">Name</label>
                                            <p class="text-muted" data-text="name">Name</p>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label">Sex</label>
                                            <p class="text-muted" data-text="sex">Sex</p>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label">Address</label>
                                            <p class="text-muted" data-text="address">Address</p>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label">Mobile Number</label>
                                            <p class="text-muted" data-text="mobileNumber">Mobile Number</p>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label">Campus</label>
                                            <p class="text-muted" data-text="campus">Campus</p>
                                        </div>
                                        <hr>
                                        <div class="form-group mb-3">
                                            <label class="col-form-label">User Type</label>
                                            <p class="text-muted" data-text="userType">User Type</p>
                                        </div>
                                        <hr>
                                        <div data-container="studentNumberText">
                                            <div class="form-group mb-3">
                                                <label class="col-form-label">Student Number</label>
                                                <p class="text-muted" data-text="studentNumber">Student Number</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div data-container="officeText">
                                            <div class="form-group mb-3">
                                                <label class="col-form-label">Office</label>
                                                <p class="text-muted" data-text="office">Office</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div data-container="employeeIdText">
                                            <div class="form-group mb-3">
                                                <label class="col-form-label">Employee ID</label>
                                                <p class="text-muted" data-text="employeeId">Employee ID</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div data-container="positionText">
                                            <div class="form-group mb-3">
                                                <label class="col-form-label">Position</label>
                                                <p class="text-muted" data-text="position">Position</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div data-container="collegeText">
                                            <div class="form-group mb-3">
                                                <label class="col-form-label">College</label>
                                                <p class="text-muted" data-text="college">College</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div data-container="courseText">
                                            <div class="form-group mb-3">
                                                <label class="col-form-label">Course</label>
                                                <p class="text-muted" data-text="course">Course</p>
                                            </div>
                                            <hr>
                                        </div>
                                        <div class="form-group row">
                                            <div class="col-12">
                                                <div class="checkbox">
                                                    <label>
                                                        <input type="checkbox" data-checkbox="terms"> I agree to the CvSU Integrated Library System to manage provided information for a better experience of online services and not share with a third-party organization.
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <input type="hidden" value="<?php echo $next;?>" data-redirect="next">
                                <div class="card-footer box-profile">
                                    <button class="btn bg-gradient-light d-none" data-button="backStep">Back</button>
                                    <button class="btn bg-gradient-primary float-right" data-button="nextStep">Next</button>
                                    <button class="btn bg-gradient-primary float-right d-none" data-button="finishStep">Finish</button>
                                </div>
                            </form>
                            <div class="d-none" data-message="success">
                                <div class="card-body box-profile ils-bg-green text-center text-white p-5">
                                    <i class="fas fa-check fa-2x mb-3"></i><br>Successfully completed your profile!
                                </div>
                                <div class="card-footer box-profile text-center text-muted">
                                    Redirecting to Profile Page in <span data-countdown="refresh">3</span>
                                </div>
                            </div>
                            <div class="overlay d-none" data-loader="card">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</div>
<script>
    const stepTitle = document.querySelector('[data-title="name"]');
    const progressBar = document.querySelector('.progress-bar');
    const cardLoader = document.querySelector('[data-loader="card"]');
    const steps = document.querySelectorAll('.ils-step-form');
    const stepText = document.querySelector('[data-step="text"]');
    
    const backButton = document.querySelector('[data-button="backStep"]');
    const nextButton = document.querySelector('[data-button="nextStep"]');
    const finishButton = document.querySelector('[data-button="finishStep"]');
    
    const redirect = document.querySelector('[data-redirect="next"]');

    const form = document.querySelector('[data-form="createProfile"]');
    
    // Step 1
    let step1 = false;
    const firstNameInput = document.querySelector('[data-input="firstName"]');
    const middleNameInput = document.querySelector('[data-input="middleName"]');
    const lastNameInput = document.querySelector('[data-input="lastName"]');

    // Step 2
    let step2 = false;
    const sexSelect = document.querySelector('[data-select="sex"]');
    const addressTextArea = document.querySelector('[data-textarea="address"]');
    const mobileNumberInput = document.querySelector('[data-input="mobileNumber"]');

    // Step 3
    let step3 = false;
    const campusSelect = document.querySelector('[data-select="campus"]');
    const userTypeSelect = document.querySelector('[data-select="userType"]');

    // Data Containers
    const studentNumberContainerAlt = document.querySelector('[data-container="studentNumberText"]');
    const officeContainerAlt = document.querySelector('[data-container="officeText"]');
    const employeeIdContainerAlt = document.querySelector('[data-container="employeeIdText"]');
    const positionContainerAlt = document.querySelector('[data-container="positionText"]');
    const collegeContainerAlt = document.querySelector('[data-container="collegeText"]');
    const courseContainerAlt = document.querySelector('[data-container="courseText"]');

    // Step 4
    let step4 = false;
    const studentNumberInput = document.querySelector('[data-input="studentNumber"]');
    const collegeSelect = document.querySelector('[data-select="college"]');
    const courseSelect = document.querySelector('[data-select="course"]');
    const employeeIdInput = document.querySelector('[data-input="employeeId"]');
    const positionInput = document.querySelector('[data-input="position"]');
    const officeSelect = document.querySelector('[data-select="office"]');

    // Data Containers
    const studentNumberContainer = document.querySelector('[data-container="studentNumber"]');
    const officeContainer = document.querySelector('[data-container="office"]');
    const employeeIdContainer = document.querySelector('[data-container="employeeId"]');
    const positionContainer = document.querySelector('[data-container="position"]');
    const collegeContainer = document.querySelector('[data-container="college"]');
    const courseContainer = document.querySelector('[data-container="course"]');

    // Step 5
    let step5 = false;
    const termsCheckBox = document.querySelector('[data-checkbox="terms"]');
    const nameText = document.querySelector('[data-text="name"]');
    const sexText = document.querySelector('[data-text="sex"]');
    const addressText = document.querySelector('[data-text="address"]');
    const mobileNumberText = document.querySelector('[data-text="mobileNumber"]');
    const campusText = document.querySelector('[data-text="campus"]');
    const userTypeText = document.querySelector('[data-text="userType"]');
    const studentNumberText = document.querySelector('[data-text="studentNumber"]');
    const collegeText = document.querySelector('[data-text="college"]');
    const courseText = document.querySelector('[data-text="course"]');
    const officeText = document.querySelector('[data-text="office"]');
    const employeeIdText = document.querySelector('[data-text="employeeId"]');
    const positionText = document.querySelector('[data-text="position"]');

    const cardSuccess = document.querySelector('[data-message="success"]');
    const countDown = document.querySelector('[data-countdown="refresh"]');
    const stepDetails = document.querySelector('[data-step="details"]');

    var currentStep = 1;

    backButton.addEventListener("click", (e) => {
        e.preventDefault();
        Back();
    });

    nextButton.addEventListener("click", (e) => {
        e.preventDefault();
        Next();
    });

    finishButton.addEventListener("click", (e) => {
        e.preventDefault();
        Finish();
    });

    function SetStepText() {
        switch(currentStep) {
            case 1:
            case 2:
                stepTitle.innerHTML = "Personal Information";
                break;
            case 3:
            case 4:
                stepTitle.innerHTML = "University Information";
                break;
            case 5:
                stepTitle.innerHTML = "Review Information";
                break;
        }
        stepText.innerHTML = "Steps: " + currentStep + " of " + steps.length;
    }

    function StepStepProgress(time) {
        return new Promise(function(resolve, reject) {
            var percentage = 100 / steps.length;
            for(var i = 1; i <= steps.length; i++) {
                if(i == currentStep) {
                    current = percentage * (currentStep - 1);
                    progressBar.style.width = current + "%";
                    break;
                }
            }
            if(currentStep == 1) {
                progressBar.style.width = "0%";
            }
            if(currentStep == steps.length) {
                progressBar.style.width = "100%";
            }
            progressBar.classList.add("progress-bar-animated");
            cardLoader.classList.remove("d-none");
            setTimeout(() => {
                progressBar.classList.remove("progress-bar-animated");
                cardLoader.classList.add("d-none");
                resolve();
            }, time);
        });
    }

    function Back() {
        currentStep--;
        if(currentStep == 1) {
            if(!backButton.classList.contains("d-none")) {
                backButton.classList.add("d-none");
            }
        }
        if(currentStep != steps.length) {
            if(nextButton.classList.contains("d-none")) {
                nextButton.classList.remove("d-none");
            }
            if(!finishButton.classList.contains("d-none")) {
                finishButton.classList.add("d-none");
            }
        }
        StepStepProgress(0000).then(SetStepWizard);
    }

    function SetStepWizard() {
        SetStepText();
        steps.forEach((step) => {
            if(!step.classList.contains("d-none")) {
                step.classList.add("d-none");
            }

            if(step.getAttribute('data-step') == currentStep) {
                step.classList.remove("d-none");
            }
        });
        CheckCurrentForm();
    }

    function Next() {
        currentStep++;
        if(backButton.classList.contains("d-none")) {
            backButton.classList.remove("d-none");
        }
        if(currentStep == steps.length) {
            if(!nextButton.classList.contains("d-none")) {
                nextButton.classList.add("d-none");
            }
            if(finishButton.classList.contains("d-none")) {
                finishButton.classList.remove("d-none");
            }
        }
        StepStepProgress(1000).then(SetStepWizard);
    }

    function CheckCurrentForm() {
        nextButton.disabled = true;
        finishButton.disabled = true;
        switch(currentStep) {
            case 1:
                let isFirstNameReady = false;
                let isLastNameReady = false;
                if(firstNameInput.value === "") {
                    ShowValidation(firstNameInput, "is-invalid");
                    isFirstNameReady = false;
                } else {
                    ShowValidation(firstNameInput, "is-valid");
                    isFirstNameReady = true;
                }
                if(lastNameInput.value === "") {
                    ShowValidation(lastNameInput, "is-invalid");
                    isLastNameReady = false;
                } else {
                    ShowValidation(lastNameInput, "is-valid");
                    isLastNameReady = true;
                }
                if(isFirstNameReady && isLastNameReady) {
                    step1 = true;
                    nextButton.disabled = false;
                    finishButton.disabled = false;
                }
                break;
            case 2:
                let isSexReady = false;
                let isAddressReady = false;
                let isMobileNumberReady = false;
                if(sexSelect.value === "") {
                    ShowValidation(sexSelect, "is-invalid");
                    isSexReady = false;
                } else {
                    ShowValidation(sexSelect, "is-valid");
                    isSexReady = true;
                }
                if(addressTextArea.value === "") {
                    ShowValidation(addressTextArea, "is-invalid");
                    isAddressReady = false;
                } else {
                    ShowValidation(addressTextArea, "is-valid");
                    isAddressReady = true;
                }
                if(mobileNumberInput.value === "") {
                    ShowValidation(mobileNumberInput, "is-invalid");
                    isMobileNumberReady = false;
                } else {
                    if(mobileNumberInput.value.length != 10 || isNaN(mobileNumberInput.value)) {
                        ShowValidation(mobileNumberInput, "is-invalid");
                        isMobileNumberReady = false;
                    } else {
                        ShowValidation(mobileNumberInput, "is-valid");
                        isMobileNumberReady = true;
                    }
                }
                if(isSexReady && isAddressReady && isMobileNumberReady) {
                    step2 = true;
                    nextButton.disabled = false;
                    finishButton.disabled = false;
                }
                break;
            case 3:
                let isCampusReady = false;
                let isUserTypeReady = false;
                if(campusSelect.value === "") {
                    ShowValidation(campusSelect, "is-invalid");
                    isCampusReady = false;
                } else {
                    ShowValidation(campusSelect, "is-valid");
                    isCampusReady = true;
                }
                if(userTypeSelect.value === "") {
                    ShowValidation(userTypeSelect, "is-invalid");
                    isUserTypeReady = false;
                } else {
                    ShowValidation(userTypeSelect, "is-valid");
                    isUserTypeReady = true;
                }
                if(isCampusReady && isUserTypeReady) {
                    step3 = true;
                    nextButton.disabled = false;
                    finishButton.disabled = false;
                    
                    studentNumberContainer.classList.add("d-none");
                    officeContainer.classList.add("d-none");
                    employeeIdContainer.classList.add("d-none");
                    positionContainer.classList.add("d-none");
                    collegeContainer.classList.add("d-none");
                    courseContainer.classList.add("d-none");

                    switch(userTypeSelect.options[userTypeSelect.selectedIndex].value) {
                        case "Student":
                            studentNumberContainer.classList.remove("d-none");
                            collegeContainer.classList.remove("d-none");
                            courseContainer.classList.remove("d-none");
                            break;
                        case "Faculty":
                            employeeIdContainer.classList.remove("d-none");
                            positionContainer.classList.remove("d-none");
                            collegeContainer.classList.remove("d-none");
                            break;
                        case "Staff":
                            officeContainer.classList.remove("d-none");
                            employeeIdContainer.classList.remove("d-none");
                            positionContainer.classList.remove("d-none");
                            break;
                    }
                }
                break;
            case 4:
                let isStudentNumberReady = false;
                let isCollegeReady = false;
                let isCourseReady = false;
                let isEmployeeIdReady = false;
                let isPositionReady = false;
                let isOfficeReady = false;
                if(studentNumberInput.value === "") {
                    ShowValidation(studentNumberInput, "is-invalid");
                    isStudentNumberReady = false;
                } else {
                    if(studentNumberInput.value.length != 9) {
                        ShowValidation(studentNumberInput, "is-invalid");
                        isStudentNumberReady = false;
                    } else {
                        ShowValidation(studentNumberInput, "is-valid");
                        isStudentNumberReady = true;
                    }
                }

                if(campusSelect.options[campusSelect.selectedIndex].value != 1) {
                    if(userTypeSelect.options[userTypeSelect.selectedIndex].value == "Staff") {
                        officeContainer.classList.add("d-none");
                    } else {
                        collegeContainer.classList.add("d-none");
                        courseContainer.classList.add("d-none");
                    }
                }

                if(collegeSelect.value === "") {
                    ShowValidation(collegeSelect, "is-invalid");
                    isCollegeReady = false;
                    courseSelect.disabled = true;
                } else {
                    ShowValidation(collegeSelect, "is-valid");
                    isCollegeReady = true;
                    courseSelect.disabled = false;
                    if(collegeSelect == document.activeElement) {
                        var formData = new FormData();
                        formData.append('id', collegeSelect.options[collegeSelect.selectedIndex].value);
                        $.ajax({
                            type: "POST",
                            url: "?view=getcourses",
                            data: formData,
                            contentType: false,
                            processData: false,
                            success: function(response) {
                                ShowValidation(courseSelect, "is-invalid");
                                isCourseReady = false;
                                courseSelect.innerHTML = JSON.parse(response).data;
                            }
                        });
                    }
                }
                if(courseSelect.value === "") {
                    ShowValidation(courseSelect, "is-invalid");
                    isCourseReady = false;
                } else {
                    ShowValidation(courseSelect, "is-valid");
                    isCourseReady = true;
                }
                if(employeeIdInput.value === "") {
                    ShowValidation(employeeIdInput, "is-invalid");
                    isEmployeeIdReady = false;
                } else {
                    ShowValidation(employeeIdInput, "is-valid");
                    isEmployeeIdReady = true;
                }
                if(positionInput.value === "") {
                    ShowValidation(positionInput, "is-invalid");
                    isPositionReady = false;
                } else {
                    ShowValidation(positionInput, "is-valid");
                    isPositionReady = true;
                }
                if(officeSelect.value === "") {
                    ShowValidation(officeSelect, "is-invalid");
                    isOfficeReady = false;
                } else {
                    ShowValidation(officeSelect, "is-valid");
                    isOfficeReady = true;
                }

                if(campusSelect.options[campusSelect.selectedIndex].value != 1) {
                    if(userTypeSelect.options[userTypeSelect.selectedIndex].value == "Staff") {
                        isOfficeReady = true;
                    } else {
                        isCollegeReady = true;
                        isCourseReady = true;
                    }
                }
                
                studentNumberContainerAlt.classList.add("d-none");
                officeContainerAlt.classList.add("d-none");
                employeeIdContainerAlt.classList.add("d-none");
                positionContainerAlt.classList.add("d-none");
                collegeContainerAlt.classList.add("d-none");
                courseContainerAlt.classList.add("d-none");

                switch(userTypeSelect.options[userTypeSelect.selectedIndex].value) {
                    case "Student":
                        if(isStudentNumberReady && isCollegeReady && isCourseReady) {
                            step4 = true;
                            nextButton.disabled = false;
                            finishButton.disabled = false;

                            studentNumberContainerAlt.classList.remove("d-none");
                            collegeContainerAlt.classList.remove("d-none");
                            courseContainerAlt.classList.remove("d-none");
                        }
                        break;
                    case "Faculty":
                        if(isEmployeeIdReady && isPositionReady && isCollegeReady) {
                            step4 = true;
                            nextButton.disabled = false;
                            finishButton.disabled = false;

                            employeeIdContainerAlt.classList.remove("d-none");
                            positionContainerAlt.classList.remove("d-none");
                            collegeContainerAlt.classList.remove("d-none");
                        }
                        break;
                    case "Staff":
                        if(isEmployeeIdReady && isPositionReady && isOfficeReady) {
                            step4 = true;
                            nextButton.disabled = false;
                            finishButton.disabled = false;

                            officeContainerAlt.classList.remove("d-none");
                            employeeIdContainerAlt.classList.remove("d-none");
                            positionContainerAlt.classList.remove("d-none");
                        }
                        break;
                }

                if(campusSelect.options[campusSelect.selectedIndex].value != 1) {
                    if(userTypeSelect.options[userTypeSelect.selectedIndex].value == "Staff") {
                        officeContainerAlt.classList.add("d-none");
                    } else {
                        collegeContainerAlt.classList.add("d-none");
                        courseContainerAlt.classList.add("d-none");
                    }
                }

                break;
            case 5:
                nameText.innerHTML = firstNameInput.value + " " + middleNameInput.value + " "  + lastNameInput.value;
                sexText.innerHTML = sexSelect.options[sexSelect.selectedIndex].text;
                addressText.innerHTML = addressTextArea.value;
                mobileNumberText.innerHTML = mobileNumberInput.value;
                campusText.innerHTML = campusSelect.options[campusSelect.selectedIndex].text;
                userTypeText.innerHTML = userTypeSelect.options[userTypeSelect.selectedIndex].text;
                studentNumberText.innerHTML = studentNumberInput.value;
                collegeText.innerHTML = collegeSelect.options[collegeSelect.selectedIndex].text;
                courseText.innerHTML = courseSelect.options[courseSelect.selectedIndex].text;
                employeeIdText.innerHTML = employeeIdInput.value;
                positionText.innerHTML = positionInput.value;
                officeText.innerHTML = officeSelect.options[officeSelect.selectedIndex].text;
                break;
        }
        if(termsCheckBox.checked) {
            finishButton.disabled = false;
        }
    }

    function Finish() {
        form.classList.add("d-none");
        cardSuccess.classList.remove("d-none");
        stepText.classList.add("d-none");
        stepText.classList.remove("d-block");
        stepDetails.classList.add("d-none");
        stepDetails.classList.remove("d-block");
        var formData = new FormData();
        formData.append('firstName', firstNameInput.value);
        formData.append('middleName', middleNameInput.value);
        formData.append('lastName', lastNameInput.value);
        formData.append('sex', sexSelect.options[sexSelect.selectedIndex].value);
        formData.append('address', addressTextArea.value);
        formData.append('mobileNumber', mobileNumberInput.value);
        formData.append('campus', campusSelect.options[campusSelect.selectedIndex].value);
        formData.append('userType', userTypeSelect.options[userTypeSelect.selectedIndex].value);
        formData.append('studentNumber', studentNumberInput.value);
        switch(userTypeSelect.options[userTypeSelect.selectedIndex].value) {
            case "Student":
                if(campusSelect.options[campusSelect.selectedIndex].value == 1) {
                    formData.append('college', collegeSelect.options[collegeSelect.selectedIndex].value);
                    formData.append('course', courseSelect.options[courseSelect.selectedIndex].value);
                }
                break;
            case "Faculty":
                formData.append('employeeId', employeeIdInput.value);
                formData.append('position', positionInput.value);

                if(campusSelect.options[campusSelect.selectedIndex].value == 1) {
                    formData.append('college', collegeSelect.options[collegeSelect.selectedIndex].value);
                }
                break;
            case "Staff":
                if(campusSelect.options[campusSelect.selectedIndex].value == 1) {
                    formData.append('office', officeSelect.options[officeSelect.selectedIndex].value);
                }
                formData.append('employeeId', employeeIdInput.value);
                formData.append('position', positionInput.value);
                break;
        }
        $.ajax({
            type: "POST",
            url: "?view=createprofile",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                if(JSON.parse(response).status === "success") {
                    Countdown(3);
                }
            }
        });
    }

    function Countdown(seconds) {
        let counter = seconds;
    
        const interval = setInterval(() => {
            countDown.innerHTML = counter;
            counter--;
            
            if (counter < 0 ) {
                clearInterval(interval);
                
                if(redirect && redirect.value != "") {
                    window.location.replace('?view=' + redirect.value);
                } else {
                    location.reload();
                }
            }
        }, 1000);
    }

    form.addEventListener("keyup", (e) => {
        CheckCurrentForm();
    });

    form.addEventListener("change", (e) => {
        CheckCurrentForm();
    });

    Init();
    
    function Init() {
        SetStepText();
        CheckCurrentForm();
        var formData = new FormData();
        formData.append('id', collegeSelect.options[collegeSelect.selectedIndex].value);
        $.ajax({
            type: "POST",
            url: "?view=getcourses",
            data: formData,
            contentType: false,
            processData: false,
            success: function(response) {
                ShowValidation(courseSelect, "is-invalid");
                isCourseReady = false;
                courseSelect.innerHTML = JSON.parse(response).data;
            }
        });
    }
</script>