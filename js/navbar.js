/*------------------ Variables -------------------------*/

const hamburger = document.querySelector(".hamburger");
const navMenu = document.getElementById("menu_navbar");

const navLink = document.querySelectorAll(".nav_link");

const navBar = document.getElementById("navbar");


/*------------------ Ouverture menu latéral -------------------------*/

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
    hamburger.classList.toggle("active");
    navMenu.classList.toggle("active");
}


/*------------- Fermeture menu latéral click lien menu --------------*/
navLink.forEach((item, index) => {
    item.addEventListener("click", function tagClose() {
        closeMenu();
    })
});


function closeMenu() {
    hamburger.classList.remove("active");
    navMenu.classList.remove("active");
}


/*------------- Fermeture menu latéral on scroll --------------*/

window.addEventListener("scroll", function closeMenuScroll() {
    closeMenu();
});


/*------------- Si le navigateur ne reconnaît pas les fonctions natives requestAnimationFrame() et cancelAnimationFrame(), on les recrées sur la base d’un setTimeout() --------------*/

(function () {
    var lastTime = 0;
    var vendors = ['ms', 'moz', 'webkit', 'o'];
    for (var x = 0; x < vendors.length && !window.requestAnimationFrame; ++x) {
        window.requestAnimationFrame = window[vendors[x] + 'RequestAnimationFrame'];
        window.cancelAnimationFrame = window[vendors[x] + 'CancelAnimationFrame'] || window[vendors[x] + 'CancelRequestAnimationFrame'];
    }

    if (!window.requestAnimationFrame) {
        window.requestAnimationFrame = function (callback, element) {
            var currTime = new Date().getTime();
            var timeToCall = Math.max(0, 16 - (currTime - lastTime));
            var id = window.setTimeout(function () { callback(currTime + timeToCall); },
                timeToCall);
            lastTime = currTime + timeToCall;
            return id;
        };
    }

    if (!window.cancelAnimationFrame) {
        window.cancelAnimationFrame = function (id) {
            clearTimeout(id);
        };
    }
}());


/*------------- Apparition de la NavBar quand le scroll remonte --------------*/
/*------------- Quand la largeur max de l'affichage est de 768px --------------*/


// if (window.matchMedia("(max-width: 768px)").matches) {

    (function (w, d, undefined) {

        var el_html = d.documentElement,
            el_body = d.getElementsByTagName('body')[0],
            header = d.getElementById('navbar'),
            lastScroll = w.pageYOffset || el_body.scrollTop;

        menuIsStuck = function (triggerElement, wScrollTop, lastScroll) {

            var wScrollTop = w.pageYOffset || el_body.scrollTop,
                regexp = /(nav\-is\-stuck)/i,
                classFound = el_html.className.match(regexp),
                navHeight = header.offsetHeight,
                bodyRect = el_body.getBoundingClientRect(),
                scrollValue = triggerElement ? triggerElement.getBoundingClientRect().top - bodyRect.top - navHeight : 800,
                scrollValFix = classFound ? scrollValue : scrollValue + navHeight;

            // si le scroll est d'au moins 600 et
            // la class nav-is-stuck n'existe pas sur HTML
            if (wScrollTop > scrollValFix && !classFound && wScrollTop < lastScroll) {
                el_html.className = el_html.className + ' nav-is-stuck';
                el_body.style.paddingTop = navHeight + 'px';
            }

            // si le scroll est inférieur à 2 et
            // la class nav-is-stuck existe
            if (classFound && wScrollTop > lastScroll) {
                el_html.className = el_html.className.replace(regexp, '');
                el_body.style.paddingTop = '0';
            }
        },

            onScrolling = function () {
                // on récupère la valeur du scroll maintenant
                var wScrollTop = w.pageYOffset || el_body.scrollTop;

                // on ajoute deux arguments, valeurs de scrolls
                menuIsStuck(d.getElementById('main'), wScrollTop, lastScroll);

                // on enregistre notre dernière valeur de scroll
                lastScroll = wScrollTop;
            };

        // quand on scroll
        w.addEventListener('scroll', function () {
            // on exécute la fonction onScrolling()
            w.requestAnimationFrame(onScrolling);
        });

    }(window, document));
// }