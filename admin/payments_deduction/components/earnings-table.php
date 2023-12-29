<table id="pd-earning-table">
    <thead class="table-head">
    <tr class="table-column">
        <th class="text-bold txt-xxs primary-color">NAME</th>
        <th class="text-bold txt-xxs primary-color">AMOUNT</th>
        <th class="text-bold txt-xxs primary-color">STATUS</th>
        <th class="text-bold txt-xxs primary-color">ACTIONS</th>
    </tr>
    </thead>
    <tbody class="table-body">
    <?php
    include_once '../../src/phpFunctions/connection.php';
    $con = connect('');
    $result = $con->query('SELECT * FROM payroll_db.earnings;');
    while ($row = $result->fetch_assoc()) {
    ?>
    <tr>
        <td class="text-regular txt-xxs"><?php echo $row['earnings_name']?></td>
        <td class="text-regular txt-xxs"><?php echo $row['calculation']?></td>
        <td>
            <span class="text-regular txt-xxs status inactive"></span>
        </td>
        <td>
            <div class="action-container">
                <div class="action">
                    <div class="action-icon edit-icon">
                        <img src="../src/assets/icons/svg/edit.svg" alt="" class="icon-xxs">
                    </div>
                    <div class="action-icon delete-icon">
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
