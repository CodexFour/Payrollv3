<!--<link rel="stylesheet" href="../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-specify')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">Deduction name</strong>
            <span class="text-subtitle txt-xxs">Specify Employee</span>
        </div>
    </header>
    <main class="modal-body">
        <form autocomplete="off" action="" class="form-expand">
            <label for="search-employee" class="fields-group margin-unset autocomplete">
                <span class="text-title txt-xxs form-required">Employee Name</span>
                <input class="fields text-regular txt-xxs"
                       id="search-employee"
                       name="deduction-name"
                       type="text"/>
                <span class="txt-teen text-regular notification error">ERROR MSG</span>
            </label>

            <div class="specific-employee">
                <div class='specific-employee-container'>
                    <div class="employee-combo">
                        <span class="txt-teen text-title ">John Rey</span>
                        <span class="txt-teen text-subtitle ">SET</span>
                    </div>
                    <div class="action-icon">
                        <img src="../../../../src/assets/icons/svg/deleterow.svg" alt="" class="icon-xxs">
                    </div>
                </div>

            </div>
            <button class="btn text-bold txt-xxs btn-save">SAVE</button>
        </form>
    </main>
</section>