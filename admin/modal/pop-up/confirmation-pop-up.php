<link rel="stylesheet" href="../../admin.css">
<section class="modal-content card">
    <main class="modal-body pop-up">
        <img src="../../../src/assets/icons/svg/asking.svg" alt="" class="icon-xl">
        <strong class="text-title txt-s">CONFIRM TO DELETE?</strong>
        <div class="pop-up-information">
            <span class="text-regular txt-xs text-center">Are you sure you want to delete?</span>
            <span class="text-regular txt-xxs instruction ">Note: You cannot undo this action.</span>
        </div>
        <div class="pop-up-actions">
            <button class="btn text-title txt-xs cancel tertiary-color" onclick="closeModal('.modal-pop-up')">Cancel</button>
            <button class="btn text-title txt-xs confirm" id="confirm"></button>
        </div>
    </main>
</section>