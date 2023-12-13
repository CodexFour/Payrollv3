function closeModal(removeModalSelector) {
    const modal = document.querySelector(removeModalSelector);
    modal.classList.remove("show-modal");
}

function toggle(modal) {
    const openModal = document.querySelector(modal);
    openModal.classList.toggle('notification-show');

}

function flip(addModalSelector) {
    const modal = document.querySelector(addModalSelector);
    modal.classList.add("flip");
}


function modal(className, file) {
    new HTTPRequest(className, file);
    const modal = document.querySelector(className);
    modal.classList.add("show-modal");

}

function openModal(className){
    let modal = document.querySelector(className);
    modal.style.opacity = 1;
    modal.showModal();
}
function switchModal(className){
    let modals = document.querySelectorAll('.modal');
    modals.forEach( m =>{
        m.style.opacity = 0;
    });
    
    openModal(className);
}
function migrateModal(className){
    closeAllModal();
    openModal(className);
}
function closeAllModal(){
    let modals = document.querySelectorAll('.modal');
    modals.forEach( m =>{
        m.style.opacity = 1;
        m.close();
    });
}
function closeModal(className){
    document.querySelector(className).close();
}

