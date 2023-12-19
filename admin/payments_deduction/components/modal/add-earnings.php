<link rel="stylesheet" href="../../../admin.css">
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-earnings')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD EARNINGS</strong>
            <span class="text-subtitle txt-xxs">Accruing Profits Addition</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="">
            <div class="payments-form">
                <div class="toggle-container switch fields-group">
                    <label class="toggle-switch">
                        <input type="checkbox">
                        <span class="txt-teen text-bold">Active?</span>
                    </label>
                </div>
                <label for="earnings-name" class="fields-group">
                    <span class="text-title txt-xxs form-required">Earnings Name</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="earnings-name"
                           name="earnings-name"
                           type="text"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <label for="earnings-amount" class="fields-group margin-unset">
                    <span class="text-title txt-xxs form-required">Amount</span>
                    <input class="fields employee-field-regular text-regular txt-xxs"
                           id="earnings-amount"
                           name="earnings-amount"
                           type="number"/>
                    <span class="txt-teen text-regular notification error">ERROR MSG</span>
                </label>
                <div class="group-components-on-row">
                    <label for="apply-to-all">
                        <input type="checkbox" id="apply-to-all" name="apply-to-all">
                        <span class="txt-teen text-bold">Apply to all</span>
                    </label>
                    <label for="specify">
                        <input type="checkbox" id="specify" name="specify" onclick="openModal('.modal-specify')">
                        <span class="txt-teen text-bold">Specify</span>
                    </label>
                </div>
            </div>
            <div class="payments-form-footer">
                <div class="affected-employee">
                    <div class="affected-employee-content">
                        <img src="../../../../src/assets/img/profile.jpg" alt="" class="icon-round icon-s">
                        <img src="../../../../src/assets/img/profile.jpg" alt=""
                             class="icon-round icon-s icon-border employee-on-queue">
                        <img src="../../../../src/assets/img/profile.jpg" alt=""
                             class="icon-round icon-s icon-border employee-on-queue-2">
                        <span class="txt-teen text-bold employee-on-queue-3">2+</span>
                    </div>

                </div>
                <button class="btn text-bold txt-xxs btn-save">SAVE</button>
            </div>
        </form>
    </main>
</section>
