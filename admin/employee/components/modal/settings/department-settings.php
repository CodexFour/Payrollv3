<!--<link rel="stylesheet" href="../../../../admin.css">-->
<section class="modal-content card leave-type-settings">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-department-settings')">
    </button>
    <header class="modal-header">
        <div class="card-name">
            <strong class="text-title txt-xs">DEPARTMENT SETTINGS</strong>
            <span class="text-subtitle txt-xxs">Explore Different Departments</span>
        </div>

    </header>
    <main class="modal-body">
        <div class="leave-type-table-actions">
            <button class="btn btn-add" onclick="openModal('.modal-add-department')">
            </button>
            <?php include_once "department-table.php" ?>
        </div>
    </main>

</section>

<dialog class="modal modal-add-department"><?php include_once "add-department.php" ?></dialog>