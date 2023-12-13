let isDebug;
const all = document.querySelectorAll("*");
document.addEventListener('keydown', (e) => {
    if (e.ctrlKey && e.code === 'Space') {
        e.preventDefault();
        if (isDebug) {
            all.forEach((evt) => {
                evt.classList.remove("outline")
            });
            isDebug = false;
        } else {
            all.forEach((evt) => {
                evt.classList.add("outline")
            });
            isDebug = true;
        }
    }
});

const menuButton = document.querySelector('.menu');
const menu = document.querySelector(".collapse__menu")
menuButton.addEventListener('click', function () {
    this.classList.toggle('opened');
    this.setAttribute('aria-expanded', this.classList.contains('opened'));
    menu.classList.toggle("expand__menu");
});

window.addEventListener('scroll', function () {
    let components = document.querySelectorAll('.component');
    components.forEach(component => {
        let offsetTop = component.offsetTop - 50;
        let bottom = offsetTop + component.offsetHeight;
        if (window.scrollY >= offsetTop && window.scrollY <= bottom) {
            let navLink = document.querySelectorAll('.link')
            navLink.forEach(e => {
                e.classList.remove('link_active');
            });
            document.querySelector('ul li a[href*=' + component.getAttribute('id') + ']').classList.add('link_active');
        }

    });
})


 function isMobile(classname, filepath) {
    if (window.innerWidth < 768)
        window.location.href = filepath;
    else
        // modal(classname, filepath);
        document.querySelector(classname).classList.add("show-modal");
    // });
}

// Disable submit behaviors
const allButtons = document.querySelectorAll('button');
allButtons.forEach( b =>{
    b.addEventListener('click', e => e.preventDefault());
})

// let form = document.getElementById("login-form");
// function handleForm(event) { event.preventDefault(); }
// form.addEventListener('submit', handleForm);





