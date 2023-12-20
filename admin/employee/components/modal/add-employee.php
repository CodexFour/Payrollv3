<?php
include_once '../../src/phpFunctions/connection.php';
$con = connect(''); ?>
<!--<link rel="stylesheet" href="../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent"
            onclick="closeModal('.modal-employee'); changeToEditTitle(false); clearEmployeeField()">
    </button>
    <header class="modal-header">
        <div class="card-name">
            <!--            TODO: CHANGE THE HEADER NAME IF YOU USE THIS MODAL FOR "EDITING EMPLOYEE'S DATA"
                                YOU MAY CHANGE LIKE THIS:
                                    • EDIT EMPLOYEE -> HEADING
                                    • Update employee information -> SUBHEADING
            -->

            <strong class="text-title txt-xs" id="add-employee-title">ADD NEW EMPLOYEE</strong>
            <span class="text-subtitle txt-xxs">Fill out the form to add new employee</span>
        </div>
    </header>

    <main class="modal-body">
        <strong class="text-bold txt-xxs text-center">EMPLOYEE INFORMATION</strong>
        <form onsubmit="return false" id="add-employee-form">
            <div id="employee-form">
                <div class="employee-header personal-information">
                    <h2 class="text-bold txt-xs">Personal Information</h2>
                </div>
                <div>
                    <div class="employee-profile-container">
                        <img src="../src/assets/img/profile.jpg" alt=""
                             class="icon-xl icon-employee icon-cover">
                        <label class="file-input-container" for="employee-pfp">
                        <span class="text-content">
<!--                         TODO: GET THE IMAGE UPLOADED BY THE USER.  -->
                            <!--                            IMPORTANT REMINDER: YOU MUST VALIDATE THE SIZE OF AN IMAGE IT MUST BE UNDER 5MB-->
                            <input type="file"
                                   class="file-input"
                                   accept="image/jpeg, image/png, image/webp"
                                   name="employee-pfp"
                                   id="employee-pfp"/>
                            <span class="btn text-bold txt-xxs btn-transparent btn-border tertiary-color">Upload a file</span>
                            <span class="text-regular txt-teen instruction">Pick a profile picture <br>under 5MB</span>
                        </span>
                        </label>
                    </div>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </div>


                <label for="employee-rfid" class="fields-group employee_rfid">
                    <!--                    TODO: GET THE VALUE OF RFID NUMBER-->
                    <span class="text-title txt-xxs form-required">RFID No.</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-rfid"
                           name="employee-rfid"
                           type="number"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <label for="employee_id" class="fields-group employee_id">
                    <!--                    TODO: GET THE VALUE OF ID-->
                    <span class="text-title txt-xxs form-required">ID Number</span>
                    <input onkeydown="return false" class="fields employee-field-regular text-regular txt-xxs"
                           id="employee_id"
                           name="employee_id"
                           type="number"
                    />
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-firstname" class="fields-group employee_firstname">
                    <span class="text-title txt-xxs form-required">First Name</span>
                    <!--                     TODO: GET THE VALUE OF FIRST NAME-->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-firstname"
                           name="employee-firstname"

                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-lastname" class="fields-group employee_lastname">
                    <!--                    TODO: GET THE VALUE OF LAST NAME                    -->
                    <span class="text-title txt-xxs form-required">Last Name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-lastname"
                           name="employee-lastname"

                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <!--                <div class="middle-name_suffix employee-field-group">-->
                <label for="employee-middlename" class="fields-group employee_middlename">
                    <!--                    TODO: GET THE VALUE OF MIDDLE NAME-->
                    <span class="text-title txt-xxs">Middle Name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-middlename"
                           name="employee-middlename"

                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="suffix-degree employee-field-group">
                    <label for="employee-suffix" class="fields-group employee_suffix">
                        <span class="text-title txt-xxs">Suffix</span>
                        <!--                    TODO: GET THE VALUE OF SUFFIX                    -->
                        <select class="fields employee-field-haft text-title txt-xxs" name="employee-suffix"
                                id="employee-suffix">
                            <option class="text-subtitle" value="" disabled selected>-Select-</option>
                            <option class="text-subtitle" value="Jr.">Jr.</option>
                            <option class="text-subtitle" value="Sr.">Sr.</option>
                            <option class="text-subtitle" value="II">II</option>
                            <option class="text-subtitle" value="III">III</option>
                            <option class="text-subtitle" value="IV">IV</option>
                        </select>

                        <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                                TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                    WARNING, ERROR-->
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>

                    </label>
                    <label for="employee-degree" class="fields-group employee_suffix">
                        <span class="text-title txt-xxs form-required">Degree</span>
                        <!--                    TODO: GET THE VALUE OF SUFFIX                    -->
                        <select class="fields employee-field-haft text-title txt-xxs" name="employee-degree"
                                id="employee-degree">
                            <option class="text-subtitle" value="" disabled selected>-Select-</option>
                            <option class="text-subtitle" value="Jr.">Undergraduate</option>
                            <option class="text-subtitle" value="Sr.">Masters</option>
                            <option class="text-subtitle" value="II">Doctors</option>
                        </select>

                        <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                                TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                    WARNING, ERROR-->
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>

                    </label>
                </div>
                <!--                </div>-->
                <label for="employee-birthdate" class="fields-group employee_birthdate">
                    <span class="text-title txt-xxs form-required">Birth Date</span>
                    <!--                    TODO: GET THE VALUE OF BIRTH DATE                    -->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-birthdate"
                           name="employee-birthdate"
                           type="date"
                           onchange="calcAge()"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="gender-age employee-field-group">
                    <label for="employee-age" class="fields-group employee_age">
                        <span class="text-title txt-xxs form-required">Age</span>
                        <!--                        TODO: GET THE VALUE OF AGE                        -->
                        <input class="fields employee-field-haft text-regular txt-xxs"
                               id="employee-age"
                               name="employee-age"
                               type="number"
                               onkeydown="return false" />
                        <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>


                    </label> <label for="employee-gender" class="fields-group employee_gender">
                        <span class="text-title txt-xxs form-required">Gender</span>
                        <!--                        TODO: GET THE VALUE OF GENDER                        -->
                        <select class="fields employee-field-haft text-title txt-xxs" name="employee-gender"
                                id="employee-gender">
                            <option class="text-subtitle" value="" disabled selected>-Select-</option>
                            <option class="text-subtitle" value="M">Male</option>
                            <option class="text-subtitle" value="F">Female</option>
                        </select>
                        <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>

                    </label>
                </div>
                <label for="employee-email" class="fields-group employee_email">
                    <span class="text-title txt-xxs form-required">Email</span>
                    <!--                    TODO: GET THE VALUE OF EMAIL                    -->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-email"
                           name="employee-email"
                           type="email"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-phone" class="fields-group employee_phone">
                    <!--                    TODO: GET THE VALUE OF PHONE                    -->
                    <span class="text-title txt-xxs form-required">Phone No.</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-phone"
                           name="employee-phone"
                           type="tel"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="employee-header address-information">
                    <h2 class="text-bold txt-xs">Address Information</h2>
                </div>

                <label for="employee-street" class="fields-group employee_street">
                    <span class="text-title txt-xxs form-required">Street</span>
                    <!--                    TODO: GET THE VALUE OF STREET                    -->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-street"
                           name="employee-street"
                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>

                <label for="employee-barangay" class="fields-group employee_barangay">
                    <span class="text-title txt-xxs form-required">Barangay</span>
                    <!--                    TODO: GET THE VALUE OF BARANGAY                    -->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-barangay"
                           name="employee-barangay"
                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-city" class="fields-group employee_city">
                    <span class="text-title txt-xxs form-required">City</span>
                    <!--                    TODO: GET THE VALUE OF CITY                    -->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-city"
                           name="employee-city"
                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-province" class="fields-group employee_province">
                    <span class="text-title txt-xxs form-required">Province</span>
                    <!--                    TODO: GET THE VALUE OF PROVINCE                    -->
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-province"
                           name="employee-province"
                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="employee-header job-information">
                    <h2 class="text-bold txt-xs">Job Information</h2>
                </div>
                <label for="employee-department" class="fields-group employee_department">
                    <span class="text-title txt-xxs form-required">Department</span>
                    <!--                    TODO: GET THE VALUE OF THE SELECTED OPTION OF THE USER
                                               the options tag and value must dependent to the department available in the database
                    -->
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-department"
                            name="employee-department">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <?php
                        $dept = $con->query('SELECT * FROM payroll_db.department;');
                        while ($row = $dept->fetch_assoc()) {
                            echo '<option class="text-subtitle" value="' . $row['department_id'] . '">' . $row['department_name'] . '</option>';
                        }
                        ?>
                    </select>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <label for="employee-job-title" class="fields-group employee_job_title">
                    <span class="text-title txt-xxs form-required">Job Title</span>
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-job-title"
                            name="employee-job-title">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <?php
                        $dept = $con->query('SELECT * FROM payroll_db.job_class;');
                        while ($row = $dept->fetch_assoc()) {
                            echo '<option class="text-subtitle" value="' . $row['job_id'] . '">' . $row['job_title'] . '</option>';
                        }
                        ?>
                    </select>
                    <!--                    TODO: GET THE VALUE OF JOB TITLE                        -->

                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-working-type" class="fields-group employee_working_type">
                    <span class="text-title txt-xxs form-required">Working Type</span>
                    <!--                    TODO: GET THE VALUE OF WORKING TYPE                    -->
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-working-type"
                            name="employee-working-type">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <option class="text-subtitle" value="Regular">Regular</option>
                        <option class="text-subtitle" value="Probationary">Probationary</option>
                    </select>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <!--                TODO: GET THE VALUE OF HIRED DATE                -->
                <label for="employee-hired-date" class="fields-group employee_hired_date">
                    <span class="text-title txt-xxs form-required">Hired Date</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-hired-date"
                           name="employee-hired-date"
                           type="date"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
            </div>
            <!--            TODO SAVE THE DATA IN THE DATABASE-->
            <button class="btn text-bold txt-xxs btn-save" id="add-employee" onclick="empFormSubmit()">SAVE</button>
        </form>
    </main>

</section>