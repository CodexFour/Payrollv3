<table>
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
                <span class="text-bold txt-xxs primary-color">START DATE</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">DUE DATE</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">REMAINING</span>
                <svg class="primary-color sort-icon">
                    <use href="../../../src/assets/icons/svg/sort.svg#sort">
                </svg>
            </div>
        </th>
        <th>
            <div class="head">
                <span class="text-bold txt-xxs primary-color">OVERLAP</span>
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
    </tr>
    </thead>
    <tbody class="table-body">
    <tr onclick="openModal('.modal-view-leave')">
        <td class="table-content-default">
            <img
                    src="../../../src/assets/img/img.png"
                    alt="image"
                    class="icon-m icon-soft-edge"
            />
        </td>
        <td class="text-regular txt-xxs">John Doe</td>
        <td class="text-regular txt-xxs">10-20-2023</td>
        <td class="text-regular txt-xxs">10-30-2023</td>
        <td class="text-regular txt-xxs">10</td>
        <td class="text-regular txt-xxs">-</td>
        <td>
            <span class="text-regular txt-xxs status inactive"></span>
        </td>
    </tr>


    </tbody>
</table>

<!--Modal-->
<dialog class="modal modal-view-leave"> <?php include_once 'modal/leave/view-leave.php' ?> </dialog>
<dialog class="modal modal-view-attachment"> <?php include_once 'modal/attachment/view-attachment.php' ?> </dialog>