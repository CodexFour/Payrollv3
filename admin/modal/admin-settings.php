<link rel="stylesheet" href="../admin.css">
<section class="modal-content card admin-settings">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-admin-settings')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">Settings</strong>
            <span class="text-subtitle txt-xxs">Navigating Settings for Ultimate Control</span>
        </div>
    </header>
    <main class="modal-body">
        <div class="admin-settings-actions">
            <div class="card setting-card maximize-height">
                <div class="reset">
                    <div class="card-name">
                        <strong class="text-title txt-xxs">PASSWORD RESET</strong>
                        <span class="text-subtitle txt-teen">Rekindling Access Safely</span>
                    </div>
                    <label for="employee-rfid" class="fields-group employee_rfid margin-unset">
                        <!--                    TODO: GET THE VALUE OF RFID NUMBER-->
                        <span class="text-title txt-xxs form-required">Employee Name</span>
                        <input class="fields reset-password-password text-regular txt-xxs"
                               id="employee-rfid"
                               name="employee-rfid"
                               type="text"/>
                        <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                                TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                    WARNING, ERROR-->
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>

                    </label>
                    <button type="submit" class="btn text-bold txt-xxs btn-save" id="find">FIND</button>

                </div>
            </div>
            <div class="card setting-card">
                <div class="import-export">
                    <div class="card-name">
                        <strong class="text-title txt-xxs">IMPORT/EXPORT DATA</strong>
                        <span class="text-subtitle txt-teen">Data Transfer and Exchange</span>
                    </div>

                    <div class="data-action-container">
                        <div class="data-action" onclick="openModal('.modal-import')">
                            <img src="../../src/assets/icons/svg/import.svg" alt="" class="icon-xl">
                            <span class="text-title txt-xxs">Import</span>
                        </div>

                        <div class="data-action" onclick="openModal('.modal-export')">
                            <img src="../../src/assets/icons/svg/export.svg" alt="" class="icon-xl">
                            <span class="text-title txt-xxs">Export</span>
                        </div>
                    </div>

                </div>
            </div>
            <div class="card setting-card maximize-height">
                <div class="privileges-header">
                    <div class="card-name">
                        <strong class="text-title txt-xxs">PRIVILEGE</strong>
                        <span class="text-subtitle txt-teen">Special Rights and Access</span>
                    </div>
                    <button class="btn btn-add" onclick="openModal('.modal-department')">
                    </button>
                </div>
                <div class="hr-department-employee">
                    <div class="affected-employee">
                        <div class="affected-employee-content">
                            <img src="../../src/assets/img/profile.jpg" alt="" class="icon-round icon-l">
                            <img src="../../src/assets/img/profile.jpg" alt=""
                                 class="icon-round icon-l hr-icon hr-employee-on-queue">
                            <img src="../../src/assets/img/profile.jpg" alt=""
                                 class="icon-round icon-l hr-icon hr-employee-on-queue-2">
                            <span class="txt-xxs text-bold hr-employee-on-queue-3">2+</span>
                        </div>
                    </div>
                </div>
                <span class="btn btn-transparent text-regular txt-teen highlight privileges-view">View All</span>
            </div>
            <div class="admin-settings-auth">
                <div class="card setting-card">
                    <div class="enable-notification-header">
                        <div class="card-name">
                            <strong class="text-title txt-xxs">ENABLE NOTIFICATION</strong>
                            <span class="text-subtitle txt-teen">Send notification to your email</span>
                        </div>
                        <div class="toggle-container">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
                <div class="card setting-card">
                    <div class="two-factor-authentication">
                        <div class="card-name">
                            <strong class="text-title txt-xxs">TWO-FACTOR AUTHENTICATION</strong>
                            <span class="text-subtitle txt-teen">Enable 2FA may help you secure your account</span>
                        </div>
                        <div class="toggle-container">
                            <label class="toggle-switch">
                                <input type="checkbox">
                                <span></span>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>
</section>
<dialog class="modal modal-export"> <?php include_once 'exports.php' ?> </dialog>
<dialog class="modal modal-import"> <?php include_once 'import.php' ?> </dialog>
