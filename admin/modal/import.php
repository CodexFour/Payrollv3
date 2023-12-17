<link rel="stylesheet" href="../admin.css">
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-import')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">Seamless Data Transfer</strong>
            <span class="text-subtitle txt-xxs">File Import Essentials</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="" class="import-form">
            <div class="import">
                <label for="path" class="fields-group">
                    <span class="text-title txt-xxs">File Path</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="path"
                           name="file-path"
                           disabled
                           placeholder="File Path"
                           type="text"/>
                </label>

                <label for="importing-input" class="fields-group import-group">

                    <input type="file" hidden accept=".csv, .xls, .xlsx"
                           id="importing-input">
                    <button class="btn text-regular txt-teen fields" id="import-choose-file" onclick="importFile()">Choose File</button>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
            </div>
            <button type="submit" class="btn text-bold txt-xxs btn-save" id="import">IMPORT</button>
        </form>

    </main>
</section>