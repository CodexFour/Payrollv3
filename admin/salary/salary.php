<article id="salary" class="salary-content-container">
    <div class="salary-content-head">
        <div class="salary-total_employee card salary-content">
            <div class="card-salary-header">
                <h2 class="text-title txt-xxs">TOTAL EMPLOYEES</h2>
                <img src="../src/assets/icons/svg/employee.svg" alt="image" class="icon-m"/>
            </div>
            <div class="salary-monitoring">
                <strong class="text-bold txt-m">300</strong>
                <div class="salary-monitoring-description">
                    <img src="../src/assets/icons/svg/increase.svg" alt="image" class="icon-s"/>
                    <span class="text-regular txt-xxs increase-color">2% since last sem</span>
                </div>
            </div>
        </div>

        <div class="salary-total_working_hrs card salary-content">
            <div class="card-salary-header">
                <h2 class="text-title txt-xxs">TOTAL WORKING HRS</h2>
                <img src="../src/assets/icons/svg/working_hrs.svg" alt="image" class="icon-m"/>
            </div>
            <div class="salary-monitoring">
                <strong class="text-bold txt-m">300</strong>
                <div class="salary-monitoring-description">
                    <img src="../src/assets/icons/svg/increase.svg" alt="image" class="icon-s"/>
                    <span class="text-regular txt-xxs increase-color">5% since last 15 days</span>
                </div>
            </div>
        </div>

        <div class="salary-total_absences card salary-content">
            <div class="card-salary-header">
                <h2 class="text-title txt-xxs">GROSS SALARIES</h2>
                <img src="../src/assets/icons/svg/absences.svg" alt="image" class="icon-m"/>
            </div>
            <div class="salary-monitoring">
                <strong class="text-bold txt-m">300</strong>
                <div class="salary-monitoring-description">
                    <img src="../src/assets/icons/svg/decrease.svg" alt="image" class="icon-s"/>
                    <span class="text-regular txt-xxs decrease-color">-10% since last 15 days</span>
                </div>
            </div>
        </div>
        <div class="salary-distribution-chart card salary-content">
            <div class="chart" id="chart">
                <div id="salary-distribution-chart">
                </div>
            </div>
        </div>
        <div class="salary-total_salaries card salary-content">
            <div class="card-salary-header">
                <h2 class="text-title txt-xxs">TOTAL SALARIES</h2>
                <img src="../src/assets/icons/svg/total salary.svg" alt="image" class="icon-m"/>
            </div>
            <div class="salary-monitoring">
                <strong class="text-bold txt-m">300</strong>
                <div class="salary-monitoring-description">
                    <img src="../src/assets/icons/svg/stable.svg" alt="image" class="icon-s"/>
                    <span class="text-regular txt-xxs stable-color">stable since last 15 days</span>
                </div>
            </div>
        </div>
        <div class="salary-total_net_salaries card salary-content">
            <div class="card-salary-header">
                <h2 class="text-title txt-xxs">NET SALARIES</h2>
                <img src="../src/assets/icons/svg/net.svg" alt="image" class="icon-m"/>
            </div>
            <div class="salary-monitoring">
                <strong class="text-bold txt-m">300</strong>
                <div class="salary-monitoring-description">
                    <img src="../src/assets/icons/svg/stable.svg" alt="image" class="icon-s"/>
                    <span class="text-regular txt-xxs stable-color">stable since last 15 days</span>
                </div>
            </div>
        </div>
        <div class="salary-total_deduction card salary-content">
            <div class="card-salary-header">
                <h2 class="text-title txt-xxs">TOTAL DEDUCTION</h2>
                <img src="../src/assets/icons/svg/deduction.svg" alt="image" class="icon-m"/>
            </div>
            <div class="salary-monitoring">
                <strong class="text-bold txt-m">300</strong>
                <div class="salary-monitoring-description">
                    <img src="../src/assets/icons/svg/increase.svg" alt="image" class="icon-s"/>
                    <span class="text-regular txt-xxs increase-color">2% since last 15 days</span>
                </div>
            </div>
        </div>


    </div>
    <div class="salary-content-body" id="salary_table">
        <div class="card-heading-container employee-filter-fields filter-employee ">
            <div class="card-name">
                <strong class="text-title txt-xs">EMPLOYEE PAYROLL</strong>
            </div>
            <div class="employee-table-control">
                <div class="employee-search-control">
                    <label for="searching_employee">
                        <input class="fields search-icon text-title txt-xxs" type="text"
                               id="searching_employee"
                               placeholder="Search Employee"/>
                    </label>
                </div>
                <button class="btn text-bold txt-xxs" onclick="openModal('.modal-export')">EXPORT</button>
            </div>
        </div>
        <div class="salary_table-container">
            <?php include_once 'components/salary-table.php'; ?>
        </div>
    </div>
</article>
<dialog class="modal modal-export"> <?php include_once '../modal/exports.php' ?> </dialog>