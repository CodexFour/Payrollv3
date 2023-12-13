<!--<link rel="stylesheet" href="../../../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-holiday')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD HOLIDAY</strong>
            <span class="text-subtitle txt-xxs">Embracing Joy: Adding a Holiday Touch</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="">
            <div class="attendance-form">
                <label for="announcement-subject" class="fields-group">
                    <span class="text-title txt-xxs form-required">Subject</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="announcement-subject"
                           name="announcement-subject"
                           placeholder="Your Subject"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <label for="announcement-content" class="fields-group">
                    <span class="text-title txt-xxs form-required">Content</span>
                    <textarea class="fields employee-field-regular text-regular txt-xxs announcement"
                              id="announcement-content" placeholder="Type here..."></textarea>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <label for="start-date" class="fields-group start-date">
                    <span class="text-title txt-xxs form-required">Date Applied</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="start-date"
                           name="start-date"
                           type="date"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>


                </label>

                </div>
            <button type="submit" class="btn text-bold txt-xxs btn-save" id="add-announcement">SAVE</button>
        </form>
    </main>
</section>
