<!--<link rel="stylesheet" href="../../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-add-schedule')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD SCHEDULE</strong>
            <span class="text-subtitle txt-xxs">Explore the 'Add Schedule' Functionality</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="" class="schedule-form">
            <button class="btn btn-add btn-schedule"
                    onclick="">
            </button>
            <div class="schedule-container">
                <div class="schedule-fields">
                    <label for="schedule-day" class="fields-group margin-unset">
                        <span class="text-title txt-teen form-required">Day</span>
                        <select class="fields employee-field-haft schedule-field text-title txt-teen"
                                id="schedule-day">
                            <option class="text-subtitle" value="" disabled selected>-SELECT-</option>
                            <option class="text-subtitle" value="">Monday</option>
                            <option class="text-subtitle" value="">Tuesday</option>
                            <option class="text-subtitle" value="">Wednesday</option>
                            <option class="text-subtitle" value="">Thursday</option>
                            <option class="text-subtitle" value="">Friday</option>
                            <option class="text-subtitle" value="">Saturday</option>
                            <option class="text-subtitle" value="">Sunday</option>
                        </select>
                    </label>
                    <label for="schedule-time-in" class="fields-group margin-unset">
                        <span class="text-title txt-teen form-required">Time In</span>
                        <input class="fields employee-field-haft schedule-field text-regular txt-teen"
                               id="schedule-time-in"
                               name="schedule-time-in"
                               type="time"
                        />
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>
                    </label>
                    <label for="schedule-time-out" class="fields-group margin-unset">
                        <span class="text-title txt-teen form-required">Time Out</span>
                        <input class="fields employee-field-haft schedule-field text-regular txt-teen"
                               id="schedule-time-out"
                               name="schedule-time-out"
                               type="time""
                        />
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>
                    </label>
                </div>
            </div>

            <button class="btn text-bold txt-xxs btn-save">SAVE</button>

        </form>
    </main>
</section>

