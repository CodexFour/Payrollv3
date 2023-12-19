<!--<link rel="stylesheet" href="../../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-add-loan')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD LOAN</strong>
            <span class="text-subtitle txt-xxs">Embrace the 'Add Loan' Functionality</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="">
            <div class="department-form">
                <!--               TODO: GET THE VALUE OF AN DEPARTMENT NAME-->
                <label for="department-name" class="fields-group adding-department-fields">
                    <span class="text-title txt-xxs form-required">Loan Name</span>
                    <select class="fields employee-field-regular text-title txt-xxs"
                            id="schedule-day">
                        <option class="text-subtitle" value="" disabled selected>-SELECT-</option>
                        <option class="text-subtitle" value="">Monday</option>
                    </select>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <!--               TODO: GET THE VALUE OF AN INITIAL NAME-->

                <label for="department-initial" class="fields-group adding-department-fields">
                    <span class="text-title txt-xxs form-required">Amount</span>
                    <input class="fields department-initial-field text-regular txt-xxs"
                           id="department-initial"
                           name="department-initial"
                           type="number"/>
                    <!--NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                        TODO: SET THE DISPLAY INTO FLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                            WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
            </div>

            <button type="submit" class="btn text-bold txt-xxs btn-save" id="add-department">SAVE</button>
        </form>
    </main>
</section>
