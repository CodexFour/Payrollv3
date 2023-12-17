<!--<link rel="stylesheet" href="../../../admin.css">-->
<section class="modal-content card" id="view-employee-modal">
    <button class="btn btn-iconic btn-close btn-transparent" id="view--employee-close" onclick="closeModal('.modal-view-employee')">
    </button>
    <header class="modal-header">
        <div class="card-name">
            <strong class="text-title txt-s">VIEW EMPLOYEE</strong>
            <span class="text-subtitle txt-xs">Employee Details</span>
        </div>
        <div class="view-employee-action">
            <div class="action-container">
                <div class="action">
                    <div class="action-icon edit-icon" id="employee-edit-btn">
                        <img src="../src/assets/icons/svg/edit.svg" alt="" class="icon-xxs">
                    </div>
                    <div class="action-icon delete-icon" id="employee-delete-btn">
                        <img src="../src/assets/icons/svg/deleterow.svg" alt="" class="icon-xxs">
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main class="modal-body">
        <div class="employee">
            <div class="employee-pic">
                <img src="../src/assets/img/profile.jpg" alt="image" class="icon-xxxl icon-employee" id="view-employee-pfp">
                <span class="age-badge text-bold txt-teen primary-color" id="view-employee-age">28</span>
            </div>
            <div class="employee-info">
                <div class="employee-name">
                    <strong class="text-title txt-s" id="view-employee-name">Employee Name</strong>
                    <span class="text-bold txt-xxs gender-badge female" id="view-employee-gender">F</span>
                </div>
                    <span class="text-subtitle txt-xxs" id="view-employee-birthdate">O1-O1-2013</span>
                <div class="employee_job-info">
                    <span class="department-badge id-color employee-id-card">
                    <img src="../src/assets/icons/svg/employee-id.svg" alt="" class="icon-xs">
                        <span class="text-bold txt-xxs primary-color" id="view-employee_id">1234</span>
                    </span>
                    <span class="text-subtitle txt-xxs employee-id-card">
                       <img src="../src/assets/icons/svg/rfid.svg" alt="" class="icon-xs">
                        <span class="text-bold txt-xxs" id="view-employee-rfid">RFID</span>
                    </span>
                </div>
            </div>
        </div>
        <div class="vertical-line"></div>
        <div class="leave-details">

            <div class="employee-section">
                <div>
                    <div class="employee-header address-information">
                        <h2 class="text-bold txt-xs">Address Information</h2>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">STREET:</strong>
                            <p id="leave_employee_leave_type" class="text-title txt-xxs" id="view-employee-street">Sick Leave</p>
                        </div>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">BARANGAY:</strong>
                            <p id="leave_employee_leave_type" class="text-title txt-xxs"  id="view-employee-barangay">OCT. 05, 2023</p>
                        </div>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">CITY/MUNICIPALITY:</strong>
                            <p id="leave_employee_leave_type" class="text-title txt-xxs" id="view-employee-city">OCT. 05, 2023</p>
                        </div>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">PROVINCE:</strong>
                            <p id="leave_employee_leave_type" class="text-title txt-xxs" id="view-employee-province">OCT. 10, 2023</p>
                        </div>
                    </div>
                </div>
                <div>
                    <div class="employee-header address-information">
                        <h2 class="text-bold txt-xs">Job Information</h2>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">DEPARTMENT:</strong>
                            <p class="text-title txt-xxs" id="view-employee-department">Sick Leave</p>
                        </div>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">JOB TITLE:</strong>
                            <p class="text-title txt-xxs" id="view-employee-job-title">OCT. 05, 2023</p>
                        </div>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">WORKING TYPE:</strong>
                            <p class="text-title txt-xxs" id="view-employee-working-type">OCT. 05, 2023</p>
                        </div>
                    </div>
                    <div class="leave-details-card">
                        <div class="leave-selection">
                            <strong class="text-title txt-xxs">HIRED DATE:</strong>
                            <p class="text-title txt-xxs" id="view-employee-hired-date">OCT. 10, 2023</p>
                        </div>
                        </div>
                    </div>
                </div>


                </div>
            </div>
        </div>
    </main>
</section>

