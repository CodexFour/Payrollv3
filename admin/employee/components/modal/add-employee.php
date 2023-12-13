<!--<link rel="stylesheet" href="../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-employee')">
    </button>
    <header class="modal-header">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD NEW EMPLOYEE</strong>
            <span class="text-subtitle txt-xxs">Fill out the form to add new employee</span>
        </div>
    </header>

    <main class="modal-body">
        <strong class="text-bold txt-xxs text-center">EMPLOYEE INFORMATION</strong>
        <form>
            <div id="employee-form">
                <div class="employee-header personal-information">
                    <h2 class="text-bold txt-xs">Personal Information</h2>
                </div>
                <div>
                    <div class="employee-profile-container">
                        <img src="../../../../src/assets/img/profile.jpg" alt=""
                             class="icon-xl icon-employee icon-cover">
                        <label class="file-input-container">
                        <span class="text-content">
                            <input type="file"
                                   class="file-input"
                                   accept="image/jpeg, image/png, image/webp"/>
                            <span class="btn text-bold txt-xxs btn-transparent btn-border tertiary-color">Upload a file</span>
                            <span class="text-regular txt-teen instruction">Pick a profile picture <br>under 10MB</span>
                        </span>
                        </label>
                    </div>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </div>

                <label for="employee-department" class="fields-group employee-department">
                    <span class="text-title txt-xxs form-required">Department</span>
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-department">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <option class="text-subtitle" value="M">Male</option>
                        <option class="text-subtitle" value="F">Female</option>
                    </select>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <label for="employee-rfid" class="fields-group employee-rfid">
                    <span class="text-title txt-xxs form-required">RFID No.</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-rfid"
                           name="employee-rfid"
                           type="number"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <label for="employee-id" class="fields-group employee-id">
                    <span class="text-title txt-xxs form-required">ID Number</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-id"
                           name="employee-id"
                           type="number"
                           disabled/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-firstname" class="fields-group employee-firstname">
                    <span class="text-title txt-xxs form-required">First Name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-firstname"
                           name="employee-firstname"

                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-lastname" class="fields-group employee-lastname">
                    <span class="text-title txt-xxs form-required">Last Name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-lastname"
                           name="employee-lastname"

                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <!--                <div class="middle-name_suffix employee-field-group">-->
                <label for="employee-middlename" class="fields-group employee-middlename">
                    <span class="text-title txt-xxs">Middle Name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-middlename"
                           name="employee-middlename"

                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-suffix" class="fields-group employee-suffix">
                    <span class="text-title txt-xxs">Suffix</span>
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-suffix">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <option class="text-subtitle" value="Jr.">Jr.</option>
                        <option class="text-subtitle" value="Sr.">Sr.</option>
                        <option class="text-subtitle" value="II">II</option>
                        <option class="text-subtitle" value="III">III</option>
                        <option class="text-subtitle" value="IV">IV</option>
                    </select>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <!--                </div>-->
                <label for="employee-birthdate" class="fields-group employee-birthdate">
                    <span class="text-title txt-xxs form-required">Birth Date</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-birthdate"
                           name="employee-birthdate"
                           type="date"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="gender-age employee-field-group">
                    <label for="employee-age" class="fields-group employee-age">
                        <span class="text-title txt-xxs form-required">Age</span>
                        <input class="fields employee-field-haft text-regular txt-xxs"
                               id="employee-age"
                               name="employee-age"
                               type="number"
                               disabled/>
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>


                    </label> <label for="employee-gender" class="fields-group employee-gender">
                        <span class="text-title txt-xxs form-required">Gender</span>
                        <select class="fields employee-field-haft text-title txt-xxs" id="employee-gender">
                            <option class="text-subtitle" value="" disabled selected>-Select-</option>
                            <option class="text-subtitle" value="M">Male</option>
                            <option class="text-subtitle" value="F">Female</option>
                        </select>
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>

                    </label>
                </div>
                <label for="employee-email" class="fields-group employee-email">
                    <span class="text-title txt-xxs form-required">Email</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-email"
                           name="employee-email"
                           type="email"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-phone" class="fields-group employee-phone">
                    <span class="text-title txt-xxs form-required">Phone No.</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-phone"
                           name="employee-phone"
                           type="tel"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="employee-header address-information">
                    <h2 class="text-bold txt-xs">Address Information</h2>
                </div>

                <label for="employee-street" class="fields-group employee-street">
                    <span class="text-title txt-xxs form-required">Street</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-street"
                           name="employee-street"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>

                <label for="employee-barangay" class="fields-group employee-barangay">
                    <span class="text-title txt-xxs form-required">Barangay</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-barangay"
                           name="employee-barangay"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-city" class="fields-group employee-city">
                    <span class="text-title txt-xxs form-required">City</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-city"
                           name="employee-city"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <label for="employee-province" class="fields-group employee-province">
                    <span class="text-title txt-xxs form-required">Province</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-province"
                           name="employee-province"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>
                <div class="employee-header job-information">
                    <h2 class="text-bold txt-xs">Job Information</h2>
                </div>
                <label for="employee-job-title" class="fields-group employee-job-title">
                    <span class="text-title txt-xxs form-required">Job Title</span>
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-job-title">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <option class="text-subtitle" value="M">Male</option>
                        <option class="text-subtitle" value="F">Female</option>
                    </select>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <label for="employee-working-type" class="fields-group employee-working-type">
                    <span class="text-title txt-xxs form-required">Working Type</span>
                    <select class="fields employee-field-regular text-title txt-xxs" id="employee-working-type">
                        <option class="text-subtitle" value="" disabled selected>-Select-</option>
                        <option class="text-subtitle" value="M">Male</option>
                        <option class="text-subtitle" value="F">Female</option>
                    </select>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
                <label for="employee-hired-date" class="fields-group employee-hired-date">
                    <span class="text-title txt-xxs form-required">Hired Date</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-hired-date"
                           name="employee-hired-date"
                           type="date"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>

                </label>
            </div>
            <button type="submit" class="btn text-bold txt-xxs btn-save" id="add-employee">SAVE</button>
        </form>
    </main>

</section>