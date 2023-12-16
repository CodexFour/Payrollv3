<!--<link rel="stylesheet" href="../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-payslip')">
    </button>
    <header class="modal-header payslip-header">
        <img src="../../../../src/assets/icons/logo.png" alt="" class="icon-xl">
        <div class="card-name text-center">
            <strong class="text-title txt-xxs">GVCFI PAYROLL SLIP</strong>
            <span class="text-bold txt-teen text-underline" id="db_curr_pr_date">--/--/----</span>
            <span class="text-regular txt-teen">Payroll Period</span>
        </div>
    </header>
    <main class="modal-body">
        <div class="payroll-details-container">
           <span class="text-regular txt-teen payroll-details">Name:
               <span class="text-bold txt-teen right">John Rey</span>
           </span>
            <span class="text-regular txt-teen payroll-details">Semi-Monthly Rate: <span
                        class="text-bold txt-teen amount">500</span></span>
            <div class="payroll-container">
                <div class="employee-header personal-information">
                    <h2 class="text-bold txt-xxs">Earnings</h2>
                </div>
                <span class="text-bold txt-teen payroll-details">GROSS SALARY:
                    <span class="text-bold txt-teen amount">500</span>
                </span>

            </div>
            <div class="payroll-container">
                <div class="employee-header personal-information">
                    <h2 class="text-bold txt-xxs">Deductions</h2>
                </div>
                <span class="text-bold txt-teen payroll-details">Total:
                    <span class="text-bold txt-teen amount">500</span>
                </span>
                <div class="vertical-line"></div>
                <span class="text-bold txt-teen payroll-details">NET SALARY:
                    <span class="text-bold txt-teen amount">500</span>
                </span>

            </div>

            <div class="payroll-footer">
                <span class="text-regular txt-teen">Prepared by:</span>
                <div class="payroll-in-charge">
                    <span class="text-bold txt-teen">Name</span>
                    <span class="text-regular txt-teen">Payroll In-charge</span>
                </div>
            </div>
        </div>
        <button class="btn text-bold txt-xxs btn-save">PRINT</button>
    </main>
</section>