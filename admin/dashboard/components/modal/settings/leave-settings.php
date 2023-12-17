<!--<link rel="stylesheet" href="../../../../admin.css">-->
<section class="modal-content card leave-type-settings">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-settings')">
    </button>
    <header class="modal-header">
        <div class="card-name">
            <strong class="text-title txt-xs">LEAVE SETTINGS</strong>
            <span class="text-subtitle txt-xxs">Explore Leave Types</span>
        </div>

    </header>
    <main class="modal-body">
        <div class="leave-type-table-actions">
            <button class="btn btn-add" onclick="openModal('.modal-add-leave-type')">
            </button>
            <?php include_once "leave-type-table.php" ?>
        </div>
    </main>

</section>

<dialog class="modal modal-add-leave-type"><?php include_once "add-leave-type.php" ?></dialog>