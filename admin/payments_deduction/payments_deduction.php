<article id="payments" class="payments-deduction-content-container">
    <div class="payment-content-head">
        <div class="card total-deduction">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">TOTAL DEDUCTION</h2>
                    <strong class="text-bold txt-m">68K</strong>
                    <p class="text-subtitle txt-xxs">OCT. 30, 2023</p></div>
            </div>
        </div>
        <div class="card">
            <div class="card-content mandatory_deduction">
                <div>
                    <h2 class="text-title txt-xxs">MANDATORY DEDUCTION</h2>
                    <strong class="text-bold txt-m">40K</strong>
                    <p class="text-subtitle txt-xxs">OCT. 30, 2023</p></div>
            </div>
        </div>
        <div class="card non_mandatory_deduction">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">NON MANDATORY DEDUCTION</h2>
                    <strong class="text-bold txt-m">400K</strong>
                    <p class="text-subtitle txt-xxs">OCT. 30, 2023</p></div>
            </div>
        </div>
        <div class="card employee_earnings">
            <div class="card-content">
                <div>
                    <h2 class="text-title txt-xxs">EMPLOYEE EARNINGS</h2>
                    <strong class="text-bold txt-m">68K</strong>
                    <p class="text-subtitle txt-xxs">OCT. 30, 2023</p></div>
            </div>
        </div>
        <div class="chart card" id="chart">
            <div id="payments_deduction_chart">
            </div>
        </div>

    </div>
    <div class="payment-content-body">
        <div class="card earnings">
            <div class="card-heading-container employee-filter-fields">
                <div class="card-name">
                    <strong class="text-title txt-xs">Earnings</strong>
                    <span class="text-subtitle txt-xxs">Navigating the Terrain of Financial Returns</span>
                </div>
                <div class="card-actions">
                    <label for="searching_employee_earnings">
                        <input class="fields search-icon text-title txt-xxs" type="text"
                               id="searching_employee_earnings"
                               placeholder="Search Earnings"
                               onkeyup="filterTable('searching_employee_earnings', 'pd-earning-table',0)"/>
                    </label>
                    <button class="btn text-bold txt-xxs employee-add" onclick="openModal('.modal-earnings')">ADD
                    </button>
                </div>
            </div>
            <div class="payments_deduction_table-container">
                <?php include_once 'components/earnings-table.php' ?>
            </div>
        </div>
        <div class="card deductions">
            <div class="card-heading-container employee-filter-fields">
                <div class="card-name">
                    <strong class="text-title txt-xs">Deductions</strong>
                    <span class="text-subtitle txt-xxs">Demystifying Components of Salary Deductions</span>
                </div>
                <div class="card-actions">
                    <label for="searching_deductions">
                        <input class="fields search-icon text-title txt-xxs" type="text"
                               id="searching_deductions"
                               placeholder="Search Deductions"
                               onkeyup="filterTable('searching_deductions', 'pd-deduction-table',0)"/>
                    </label>
                    <button class="btn text-bold txt-xxs employee-add" onclick="openModal('.modal-deduction')">ADD
                    </button>
                </div>
            </div>
            <div class="payments_deduction_table-container">
                <?php include_once 'components/deduction-table.php' ?>
            </div>
        </div>
    </div>

</article>
<dialog class="modal modal-earnings"> <?php include_once 'components/modal/add-earnings.php' ?> </dialog>
<dialog class="modal modal-deduction"> <?php include_once 'components/modal/add-deduction.php' ?> </dialog>
