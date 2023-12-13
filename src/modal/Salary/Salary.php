<section class="modal-content">
    <header class="card-form">
        <button class="btn btn-back" onclick="closeModal('.modal-Salary')">
            <img alt="" class="icon-xs" src="../src/assets/icons/svg/back.svg">
        </button>
        <div class="card-name form-header">
            <strong class="text-card-title txt-xs">ADD SALARY</strong>
        </div>
    </header>
    <main class="form-content-container card-content">
        <form id="Salary-form" class="form" action="#" method="POST">
            <div class="field-group">
                <label class="text-card-title txt-xxs text input-label" for="SalaryName">
                    Name
                    <input class="fields form-fields text-card-title txt-xxs" type="text" id="SalName" required />
                </label>
                <label class="text-card-title txt-xxs text input-label" for="SalaryName">
                    Amount
                    <input class="fields form-fields text-card-title txt-xxs" type="text" id="SalAmount" required />
                </label>
            </div>
            <footer class="footer-btn">
                <button class="btn btn-save btn-name txt-xxs"
                    onclick="closeModal('.modal-Salary'); modal('.modal-cong', '../src/modal/pop-up/pop-up.html')">SAVE
                </button>
            </footer>
        </form>
    </main>

</section>