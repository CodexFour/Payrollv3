<table id="pd-deduction-table">
    <thead class="table-head">
    <tr class="table-column">
        <th class="text-bold txt-xxs primary-color">NAME</th>
        <th class="text-bold txt-xxs primary-color">RATE</th>
        <th class="text-bold txt-xxs primary-color">STATUS</th>
        <th class="text-bold txt-xxs primary-color">CATEGORY</th>
        <th class="text-bold txt-xxs primary-color">ACTIONS</th>
    </tr>
    </thead>
    <tbody class="table-body">
    <?php
    include_once '../../src/phpFunctions/connection.php';
    $con = connect('');
    $result = $con->query('SELECT * FROM payroll_db.deduction;');
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td class="text-regular txt-xxs"><?php echo $row['deduction_name']?></td>
        <td class="text-regular txt-xxs"><?php echo $row['calculation']?></td>
        <td>
            <span class="text-regular txt-xxs status active"></span>
        </td>
        <td class="text-regular txt-xxs"><?php echo $row['type']=='M'? 'Mandatory':'Non-mandatory' ?></td>
        <td>
            <div class="action-container">
                <div class="action">
                    <div class="action-icon edit-icon">
                        <img src="../src/assets/icons/svg/edit.svg" alt="" class="icon-xxs">
                    </div>
                    <div class="action-icon delete-icon" onclick="openModal('.modal-pop-up')">
                        <img src="../src/assets/icons/svg/deleterow.svg" alt="" class="icon-xxs">
                    </div>
                </div>
            </div>
        </td>
    </tr>
    <?php
    }
    ?>

    </tbody>
</table>
