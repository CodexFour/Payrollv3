<table class="table" id="salary-salary-table">
    <thead class="table-head">
    <tr class="table-column">
        <th>
            <span class="text-bold txt-xxs primary-color">No.</span>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">NAME</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">DEPT</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">PAID HRS.</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">UNITS CARRIED</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">GROSS PAY</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">DEDUCTION</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">NET PAY</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">STATUS</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">PAYSLIP</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
    </tr>
    </thead>
    <tbody class="table-body">
    <tr>
        <td class="table-content-default">
            <img
                    src="../../../src/assets/img/img.png"
                    alt="image"
                    class="icon-m icon-soft-edge"
            />
        </td>
        <td class="text-regular txt-xxs">John Doe</td>
        <td class="text-regular txt-xxs">SOE</td>
        <td class="text-regular txt-xxs">524</td>
        <td class="text-regular txt-xxs">15</td>
        <td class="text-regular txt-xxs">7500</td>
        <td class="text-regular txt-xxs">1200</td>
        <td class="text-regular txt-xxs">6300</td>
        <td>
            <span class="text-regular txt-xxs status paid"></span>
        </td>
        <td>
            <span class="text-regular txt-xxs view-payslip" onclick="openModal('.modal-payslip')">View Payslip</span>
        </td>
    </tr>
    </tbody>
</table>

<dialog class="modal modal-payslip"> <?php include_once 'modal/view-payslip.php' ?> </dialog>

