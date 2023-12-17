<!--<link rel="stylesheet" href="../admin.css">-->
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-export')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">File Freedom</strong>
            <span class="text-subtitle txt-xxs">Exporting Essentials</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="">
            <label for="file-path" class="fields-group">
                <span class="text-title txt-xxs form-required">File Name</span>
                <input class="fields employee-field-regular text-regular txt-xxs"
                       id="file-path"
                       name="file-path"
                       placeholder="File Name"
                       type="text"/>
                <span class="txt-teen text-regular notification error">ERROR MSG</span>
            </label>
            <button type="submit" class="btn text-bold txt-xxs btn-save" id="export">EXPORT</button>
        </form>

    </main>
</section>
