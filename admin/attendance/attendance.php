<article id="attendance" class="attendance-content-container">
    <div class="attendance-content-head">
        <div class="timesheet card">
            <div id="attendance-timesheet">
            </div>
        </div>
        <div class="events card">
            <div class="events-header">
                <div class="events-info">
                    <h2 class="text-title txt-xs">HOLIDAYS</h2>
                    <span class="text-subtitle txt-teen"><span>10/01/2023</span> - <span>10/15/2023</span></span>
                </div>
                <button class="btn btn-add" onclick="openModal('.modal-holiday')">
                </button>
            </div>
            <div class="events-body">
                <div class="event card">
                    <strong class="text-title txt-xxs">ADD EMPLOYEE</strong>
                    <span class="text-regular txt-teen event-body">Add New Employee From Here <span
                                class="text-subtitle">Oct 10</span></span>
                </div>

            </div>
        </div>
        <div class="calendar card">
            <div class="header">
                <button class="btn-chevron btn-cal chevron-left" id="btn-left"></button>
                <h2 class="text-bold txt-xs" id="date-header"></h2>
                <button class="btn-chevron btn-cal chevron-right" id="btn-right"></button>
            </div>
            <div class="weeks">
                <p class="txt-teen text-bold">SUN</p>
                <p class="txt-teen text-bold">MON</p>
                <p class="txt-teen text-bold">TUE</p>
                <p class="txt-teen text-bold">WED</p>
                <p class="txt-teen text-bold">THU</p>
                <p class="txt-teen text-bold">FRI</p>
                <p class="txt-teen text-bold">SAT</p>
            </div>
            <ul class="days">
                <!-- <li>1</li> -->
            </ul>
        </div>
    </div>
    <div class="attendance-content-body">
        <div class="card-heading-container employee-filter-fields filter-employee table-container">
            <div class="employee-table-control">
                <div class="employee-search-control">
                    <label for="searching_employee">
                        <input class="fields search-icon text-title txt-xxs" type="text"
                               id="searching_employee"
                               placeholder="Search Employee"/>
                    </label>
                    <button class="btn text-bold txt-xxs" onclick="openModal('.modal-attendance')">ADD</button>
                    <div class="toggle-container">
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span></span>
                        </label>
                    </div>
                </div>
                <div class="employee-attendance-filter-control">
                    <label>
                        <select id='department-selection' class="checkbox-fields text-title txt-xxs">
                            <option class="text-subtitle" value="" disabled selected>Department</option>
                            <option class="text-subtitle" value="">Department</option>
                        </select>
                    </label>
                    <label>
                        <select id="time" class="checkbox-fields text-title txt-xxs">
                            <option class="text-subtitle" value="AM">AM</option>
                            <option class="text-subtitle" value="PM">PM</option>
                        </select>
                    </label>
                    <button class="btn text-bold txt-xxs" onclick="openModal('.modal-export')">EXPORT</button>
                </div>
            </div>
        </div>
        <div class="attendance_table-container">
            <?php include_once 'components/attendance-table.php' ?>
        </div>
    </div>
</article>

<!--Modal-->
<dialog class="modal modal-attendance"> <?php include_once 'components/modal/add-attendance.php' ?> </dialog>
<dialog class="modal modal-holiday"> <?php include_once 'components/modal/add-holiday.php' ?> </dialog>
<dialog class="modal modal-export"> <?php include_once '../modal/exports.php' ?> </dialog>