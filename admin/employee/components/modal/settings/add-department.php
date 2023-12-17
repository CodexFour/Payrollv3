<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-add-department')">
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
                <!--               TODO: GET THE VALUE OF AN DEPARTMENT NAME-->
                <label for="department-name" class="fields-group adding-department-fields">
                    <span class="text-title txt-xxs form-required">Department Name</span>
                    <input class="fields text-regular txt-xxs"
                           id="department-name"
                           name="department-name"
                           placeholder="Department Name"
                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <!--               TODO: GET THE VALUE OF AN INITIAL NAME-->

                <label for="department-initial" class="fields-group adding-department-fields">
                    <span class="text-title txt-xxs form-required">Initial</span>
                    <input class="fields department-initial-field text-regular txt-xxs"
                           id="department-initial"
                           name="department-initial"
                           placeholder="ABC"
                           type="text"/>
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
