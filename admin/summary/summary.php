<article id="summary" class="summary-deduction-content-container">
    <div class="card-heading-container employee-filter-fields">
        <div class="card-name">
            <strong class="text-title txt-xs">Summary</strong>
            <span class="text-subtitle txt-xxs">Unpacking the Key Insights</span>
        </div>
        <div class="card-actions">
            <label for="searching_employee">
                <input class="fields search-icon text-title txt-xxs" type="text"
                       id="searching_employee"
                       placeholder="Search Employee"/>
            </label>
            <button class="btn text-bold txt-xxs" onclick="openModal('.modal-export')">EXPORT</button>
        </div>
    </div>
    <div class="summary_table-container">
        <?php include_once 'components/summary-table.php' ?>
    </div>
</article>
<dialog class="modal modal-export"> <?php include_once '../modal/exports.php' ?> </dialog>