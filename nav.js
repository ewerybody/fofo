function menu_toggle() {
    var btn = document.getElementsByClassName("overlay-open")[0];
    btn.classList.toggle("overlay-btn-x");
    var menu = document.getElementsByClassName("menu-overlay")[0];
    menu.classList.toggle("menu-overlay-x");
}

function _connect_nb_btn() {
    const btn = document.getElementsByClassName("overlay-open")[0];
    btn.addEventListener('click', event => {
        menu_toggle();
    });
}

window.onload=_connect_nb_btn;