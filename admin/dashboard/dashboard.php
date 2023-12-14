<article id="dashboard" class="dashboard-content-container">
    <div class="dashboard-head">
        <div class="total_employee card" id="total_employee">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">TOTAL EMPLOYEES</h2>
                    <h3 class="text-subtitle txt-teen">Total Number of Employees</h3>
                    <strong class="text-bold txt-m" id="db_total_emp">---</strong>
                    <p class="text-subtitle txt-xxs">Employees</p>
                </div>
            </div>
        </div>
        <div class="total_salary card" id="total_salary">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">TOTAL SALARY</h2>
                    <h3 class="text-subtitle txt-teen">Current Salaries Per Month</h3>
                    <strong class="text-bold txt-m" id="db_total_salary">---</strong>
                    <p class="text-subtitle txt-xxs">PHP</p></div>
            </div>
        </div>
        <div class="total_leaves card" id="total_leaves">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">TOTAL LEAVES</h2>
                    <h3 class="text-subtitle txt-teen">Leave Summary</h3>
                    <strong class="text-bold txt-m" id="db_total_leave">---</strong>
                    <p class="text-subtitle txt-xxs">Leaves</p></div>
            </div>
        </div>
        <div class="total_absences card" id="total_absences">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">TOTAL ABSENCES</h2>
                    <h3 class="text-subtitle txt-teen">TOTAL ABSENCES</h3>
                    <strong class="text-bold txt-m" id="db_total_abs">---</strong>
                    <p class="text-subtitle txt-xxs">Absences</p></div>
            </div>
        </div>
        <div class="chart card" id="chart">
            <div id="dashboard-chart">
            </div>
        </div>
    </div>
    <div class="dashboard-body">
        <div class="leaves_table card" id="leaves_table">
            <div class="card-heading-container">
                <div class="card-name">
                    <strong class="text-title txt-xs">Leave Log</strong>
                    <span class="text-subtitle txt-xxs">Efficient Management of Employee Leaves</span>
                </div>
                <div class="card-actions">
                    <label for="searching_employee">
                        <input class="fields search-icon text-title txt-xxs" type="text"
                               id="searching_employee"
                               placeholder="Search Employee"/>
                    </label>
                    <!--                        onclick="openModal('.modal-leave')-->
                    <button class="btn text-bold txt-xxs" onclick="openModal('.modal-leave')">ADD</button>
                </div>
            </div>
            <div class="leave_table-container">
                <?php
                include_once "components/leave-table.php";
                ?>
            </div>
        </div>
        <div class="action_card" id="action_card">
            <div class="card card-generate-employee">
                <div class="payroll-info">
                    <img src="../src/assets/icons/svg/payroll_date.svg" alt="image" class="icon-xl"/>
                    <h2 class="text-title txt-xxs">PAYROLL DATE</h2>
                    <strong class="text-title txt-xs db_next_pr_date">--/--/----</strong>
                    <p class="text-regular txt-teen">Payroll Run: <span class="text-bold txt-teen" id="db_curr_pr_date">--/--/----</span>
                        <span class="text-bold txt-teen">-</span> <span class="text-bold txt-teen db_next_pr_date">--/--/----</span></p>
                    <button class="btn btn-deploy btn-name txt-xxs"
                        onclick="modal('.deploy-payslip', 'modal/payslip/payslip.html')">
                        DEPLOY
                        PAYROLLS
                    </button>
                </div>

            </div>
            <div class="card card-add-employee">
                <div class="side-btn-selection btn-selection">
                    <div class="dashboard-actions">
                        <img class="icon-xxl" src="../src/assets/icons/svg/user-add.svg" alt="">
                        <div class="text-content text-align add-employee">
                            <strong class="text-title txt-xs">ADD EMPLOYEE</strong>
                            <span class="text-subtitle txt-xxs">Add New Employee From Here</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!--Modals-->
<dialog class="modal modal-leave"> <?php include_once '../dashboard/components/modal/leave/leave.php' ?> </dialog>