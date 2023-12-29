<!--<link rel="stylesheet" href="../../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-leave')">
    </button>
    <header class="modal-header">
        <div class="card-name">
            <strong class="text-title txt-xs">APPLICATION FOR LEAVE</strong>
            <span class="text-subtitle txt-xxs">Time to Recharge: Submitting Your Leave
                Application</span>
        </div>

    </header>

    <main class="modal-body">
        <strong class="text-bold txt-xxs text-center">LEAVE APPLICATION FORM</strong>
        <form autocomplete="off" id="add-leave-form" onsubmit="return false">
            <div class="column-2">
                <div>
                    <label for="leave-employee-name" class="autocomplete fields-group">
                        <span class="text-title txt-xxs form-required">Employee Name</span>
                        <input class="fields text-regular txt-xxs"
                               id="leave-employee-name"
                               name="leave-employee-name"
                               placeholder="John Doe"
                               type="text"/>

                    </label>
                    <label for="leave-type" class="fields-group">
                        <span class="text-title txt-xxs form-required">Leave Type</span>
                        <select class="fields text-title txt-xxs" name="leave-type" id="leave-type">
                            <option class="text-subtitle" value="" disabled selected>Select Leave Type</option>
                            <?php
                            include_once '../../src/phpFunctions/connection.php';
                            $con = connect('');
                            $result = $con->query('SELECT * FROM payroll_db.leave_type;');
                            while ($row = $result->fetch_assoc()) {
                            ?>
                            <option class="text-subtitle" value="<?php echo $row['leave_type_id']?>"><?php echo $row['leave_name']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </label>
                    <label for="leave-start-date" class="fields-group">
                        <span class="text-title txt-xxs form-required">Start Date</span>
                        <input class="fields text-regular txt-xxs"
                               id="leave-start-date"
                               name="leave-start-date"
                               placeholder="MM/DD/YYYY"
                               type="date"/>
                    </label>
                    <label for="leave-end-date" class="fields-group">
                        <span class="text-title txt-xxs form-required">End Date</span>
                        <input class="fields text-regular txt-xxs"
                               id="leave-end-date"
                               name="leave-end-date"
                               placeholder="MM/DD/YYYY"
                               type="date"/>
                    </label>
                </div>
                <div class="form-content-area">
                    <label for="leave-comment" class="fields-group">
                        <span class="text-title txt-xxs">Comment</span>
                        <textarea class="comment-area textarea-field form-fields text-regular txt-xxs"
                                  id="leave-comment" placeholder="Comment for your approval"></textarea>
                    </label>
                    <div class="text-title txt-xxs text input-label attachment-area">
                        Attachment
                        <span class="card-file textarea-field form-fields">
                            <img class="icon-m file-icon"
                                 src="../src/assets/icons/svg/clip.svg"
                                 alt="">

                            <label class="file-input-container">
                                <span class="text-content">
                                <input type="file"
                                       class="file-input"/>
                                <span class="text-card-title txt-xxs highlight">Upload a file</span>
                                <span class="text-card-subtitle txt-teen">doc, pdf, png, and jpg up to 10MB</span>
                            </label>
                        </span>
                    </div>
                </div>
            </div>
            <button class="btn text-bold txt-xxs btn-save" id="add-leave" onclick="leaveFormSubmit()">SAVE</button>
        </form>
    </main>

</section>
<!--<script src=".././../../main.js"></script>-->
