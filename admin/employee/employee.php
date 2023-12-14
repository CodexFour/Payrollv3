<link rel="stylesheet" href="../admin.css">
<article id="employee" class="employee-content-container">
    <div class="employee-content-total-employees">
        <div class="card employee-content-total-employees-head">
            <div>
                <h2 class="text-title txt-xs">TOTAL EMPLOYEES</h2>
                <h3 class="text-subtitle txt-xxs">Total Number of Employees</h3>
            </div>
            <div class="line"></div>
            <div>
                <strong class="text-bold txt-m" id="emp_total_emp">---</strong>
                <p class="text-subtitle txt-xxs">Employees</p>
            </div>
        </div>
    </div>
    <div class="employee-content-employees-table card">
        <div class="card-heading-container employee-filter-fields">
            <div class="card-name">
                <strong class="text-title txt-xs">Employees</strong>
                <span class="text-subtitle txt-xxs">Sort by Department</span>
            </div>
            <div class="card-actions">
                <div class="filter-fields">
                    <label for="searching_employee">
                        <input class="fields search-icon text-title txt-xxs" type="text"
                               id="searching_employee"
                               placeholder="Search Employee"/>
                    </label>
                    <label for="filter_department">
                        <select class="checkbox-fields text-title txt-xxs" id="filter_department">
                            <option class="text-subtitle" value="" disabled selected>Department</option>
                            <option class="text-subtitle" value="">Department</option>
                        </select>
                    </label>
                </div>
                <button class="btn text-bold txt-xxs employee-add" onclick="openModal('.modal-employee')">ADD</button>
            </div>
        </div>
        <div class="employee_table-container">
            <?php include_once 'components/employee-table.php'?>
        </div>
    </div>
    <div class="employee-content-employees-department-chart card">
        <div class="card-heading-container">
            <div class="card-name">
                <div class="department-header">
                    <div class="department-head">
                        <strong class="text-title txt-xs">Total Number of Employees</strong>
                        <span class="text-subtitle txt-xxs">Exploring the Total Workforce Size</span>
                    </div>
                    <button class="btn btn-add" onclick="openModal('.modal-department')">
                    </button>
                </div>
                <div class="chart department-card">
                    <div id="department-donut-chart">
                    </div>
                </div>
            </div>
        </div>
    </div>
</article>

<!--Modals-->
<dialog class="modal modal-department"> <?php include_once 'components/modal/add-department.php' ?> </dialog>
<dialog class="modal modal-employee"> <?php include_once 'components/modal/add-employee.php' ?> </dialog>