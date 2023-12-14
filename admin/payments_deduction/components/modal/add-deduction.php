<link rel="stylesheet" href="../../../admin.css">
<section class="modal-content card">
    <button class="btn btn-iconic btn-close btn-transparent" onclick="closeModal('.modal-deduction')">
    </button>
    <header class="modal-header modal-header-department">
        <div class="card-name">
            <strong class="text-title txt-xs">ADD DEDUCTION</strong>
            <span class="text-subtitle txt-xxs">Subtracting Beyond Limits</span>
        </div>
    </header>
    <main class="modal-body">
        <form action="" class="form-expand">
            <div class="payments-form">
                <div class="group-components-on-row">
                    <div class="toggle-container switch fields-group push-to-start">
                        <label class="toggle-switch control">
                            <input type="checkbox">
                            <span class="txt-teen text-bold">Active?</span>
                        </label>
                    </div>
                    <div class="toggle-container switch fields-group">
                        <label class="toggle-switch">
                            <input type="checkbox">
                            <span class="txt-teen text-bold">Mandatory?</span>
                        </label>
                    </div>
                </div>
                <div class="deduction-fields">
                    <label for="deduction-name" class="fields-group">
                        <span class="text-title txt-xxs form-required">Deduction Name</span>
                        <input class="fields employee-field-regular text-regular txt-xxs"
                               id="deduction-name"
                               name="deduction-name"
                               type="text"/>
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>
                    </label>
                    <div class="employee-field-group">
                    <label for="deduction-amount" class="fields-group margin-unset">
                        <span class="text-title txt-xxs form-required">Rate (per year)</span>
                        <input class="fields employee-field-haft text-regular txt-xxs"
                               id="deduction-amount"
                               name="deduction-amount"
                               type="number"/>
                        <span class="txt-teen text-regular notification error">ERROR MSG</span>
                    </label>

                    <!--                    if the deduction type is loan, the term must be shown otherwise hide
                                               TODO: if regular -> remove <div class="employee-field-group"> &  <label for="deduction-amount" class="fields-group margin-unset">
                                                <span class="text-title txt-xxs form-required">Term</span>
                                                <input class="fields employee-field-haft text-regular txt-xxs"
                                                       id="deduction-amount"
                                                       name="deduction-amount"
                                                       type="number"/>
                                                <span class="txt-teen text-regular notification error">ERROR MSG</span>
                                                  </label>

                                                 TODO: the principal must set 0 as default;


                    -->

                        <label for="deduction-amount" class="fields-group margin-unset">
                            <span class="text-title txt-xxs">Penalty</span>
                            <input class="fields perc employee-field-haft text-regular txt-xxs"
                                   id="deduction-amount"
                                   name="deduction-amount"
                                   type="number"/>
                            <span class="txt-teen text-regular notification error">ERROR MSG</span>
                        </label>
                    </div>
                    <div class="group-components-on-row">
                        <label for="apply-to-all">
                            <input type="checkbox" id="apply-to-all" name="apply-to-all">
                            <span class="txt-teen text-bold">Apply to all</span>
                        </label>
                        <label for="specify">
                            <input type="checkbox" id="specify" name="specify">
                            <span class="txt-teen text-bold">Specify</span>
                        </label>
                    </div>
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
