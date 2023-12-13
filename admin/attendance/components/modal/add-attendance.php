
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-attendance')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">RECORD ATTENDANCE</strong>
            <span class="text-subtitle txt-xxs">Attendance Logging</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="">
            <div class="attendance-form">
                <label for="employee-name" class="fields-group">
                    <span class="text-title txt-xxs form-required">Employee name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="employee-name"
                           name="employee-name"
                           placeholder="Employee Name"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                    <label for="employee-time-in" class="fields-group">
                        <span class="text-title txt-xxs form-required">Time In</span>
                        <input class="fields employee-field-regular text-regular txt-xxs"
                               id="employee-time-in"
                               name="employee-time-in"
                               type="date"/>
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>
                    </label>
                    <label for="employee-time-out" class="fields-group">
                        <span class="text-title txt-xxs form-required">Time Out</span>
                        <input class="fields employee-field-regular text-regular txt-xxs"
                               id="employee-time-out"
                               name="employee-time-out"
                               type="date"/>
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>
                    </label>
                </div>

            <button class="btn text-bold txt-xxs btn-save">SAVE</button>
        </form>
    </main>
</section>
