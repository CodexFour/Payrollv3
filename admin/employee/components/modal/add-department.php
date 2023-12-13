
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-department')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD NEW DEPARTMENT</strong>
            <span class="text-subtitle txt-xxs">Exploring the Depths of the Department</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="">
            <div class="department-form">
                <label for="department-name" class="fields-group adding-department-fields">
                    <span class="text-title txt-xxs form-required">Department Name</span>
                    <input class="fields text-regular txt-xxs"
                           id="department-name"
                           name="department-name"
                           placeholder="Department Name"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <label for="department-initial" class="fields-group adding-department-fields">
                    <span class="text-title txt-xxs form-required">Initial</span>
                    <input class="fields department-initial-field text-regular txt-xxs"
                           id="department-initial"
                           name="department-initial"
                           placeholder="ABC"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
            </div>

            <button class="btn text-bold txt-xxs btn-save" id="add-department">SAVE</button>
        </form>
    </main>
</section>
