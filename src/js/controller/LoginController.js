const loginController = {
    btnSubmit: null,
    className: null,
    filepath: null,
    login: function () {
        let submit = document.getElementById(this.btnSubmit);
        submit.addEventListener("click", () => {
            console.log('you click: ' + submit.innerText);

            if (window.innerWidth < 768)
                window.location.href = this.filepath;
            else
                if((this.className !== null && this.filepath !== null))
                    modal(this.className, this.filepath);
        });
    },
}