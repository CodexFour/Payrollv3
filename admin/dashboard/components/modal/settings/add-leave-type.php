<!--<link rel="stylesheet" href="../../../../admin.css">-->

<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-add-leave-type')">
    </button>
    <header class="modal-header leave-type-header-container">
        <div class="card-name">
            <strong class="text-title txt-xs">Customize Your Time Off</strong>
            <span class="text-subtitle txt-xxs">Adding a New Leave Type</span>
        </div>

    </header>
    <main class="modal-body">
        <form action="">
            <div class="leave-type-form">
                <div class="leave-status-type">
                    <label class="toggle-switch control fields-group">
                        <input type="checkbox">
                        <span class="txt-teen text-bold">Active?</span>
                    </label>
                </div>
                <!--               TODO: GET THE VALUE OF AN DEPARTMENT NAME-->
                <label for="leave-type-name" class="fields-group">
                    <span class="text-title txt-xxs form-required">Leave Type Name</span>
                    <input class="fields text-regular txt-xxs"
                           id="leave-type-name"
                           name="leave-type-name"
                           placeholder="Leave Type"
                           type="text"/>
                    <!--                    NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                                            TODO: SET THE DISPLAY INTO PLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                                                WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <!--               TODO: GET THE VALUE OF AN INITIAL NAME-->

                <label for="leave-type-duration" class="fields-group">
                    <span class="text-title txt-xxs form-required">Duration <span
                                class="text-regular txt-teen instruction">in days</span>
</span>

                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="leave-type-duration"
                           name="leave-type-duration"
                           placeholder="Days"
                           type="text"/>
                    <!--NOTE: THIS IS A NOTIFICATION IF THERE IS SOMETHING WRONG TO THE INPUT
                        TODO: SET THE DISPLAY INTO FLEX TO SHOW THE ERROR AND YOU CAN CHANCE THE TYPE OF AN ERROR:
                            WARNING, ERROR-->
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
            </div>

            <button type="submit" class="btn text-bold txt-xxs btn-save" id="add-leave-type">SAVE</button>
        </form>
    </main>
</section>
