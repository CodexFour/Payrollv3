const removeToast = (toast) => {
    toast.classList.add("hide");
    if (toast.timeoutId) clearTimeout(toast.timeoutId);
    setTimeout(() => toast.remove(), 5000);
};

function createNotifications() {
    const notifications = document.createElement('ul');
    notifications.classList.add('toast-notifications');
    document.body.appendChild(notifications);

    const toastDetails = {
        timer: 5000,
        success: {
            icon: "success",
            text: "",
        },
        error: {
            icon: "error",
            text: "",
        },
        warning: {
            icon: "warning",
            text: "",
        },
        info: {
            icon: "info",
            text: "",
        },
    };


    const createToast = (id, msg) => {
        toastDetails[id].text = msg
        const {icon, text} = toastDetails[id]
        const toast = document.createElement("li")
        toast.className = `toast ${id}`
        toast.innerHTML = `<div class="column">
                         <img src='../src/assets/icons/svg/${icon}.svg' alt="" class="icon-s"/>
                         <span class="text-regular txt-xxs">${text}</span>
                      </div>
                      <img src="../src/assets/icons/svg/close.svg" alt='' class="icon-s toast-close" onclick="removeToast(this.parentElement)"/>`
        notifications.appendChild(toast)
        toast.timeoutId = setTimeout(() => removeToast(toast), toastDetails.timer)
    }

    return {
        createToast,
        // You can expose other methods or properties here if needed
    };
}

function showToast(id, msg) {
    createNotifications().createToast(id, msg)
}