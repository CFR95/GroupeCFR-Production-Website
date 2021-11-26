
// Carrousel accueil pour défilement automatique + clique sur les boutons pour aller à la slide souhaitée.

let radio_button1 = document.getElementById("radio_slide1");
let radio_button2 = document.getElementById("radio_slide2");
let radio_button3 = document.getElementById("radio_slide3");
let radio_button4 = document.getElementById("radio_slide4");
let radio_button5 = document.getElementById("radio_slide5");

let slideAnim = document.getElementById("container_slide");
let sliderWidth = document.getElementById("banniere").offsetWidth;
let count = 1;
let items = slideAnim.querySelectorAll("div").length;
let slide1 = document.getElementById("slide1");

const buttonsRadio = document.querySelectorAll('input[name="switch"]');
let timeSlider = 7000;

let nextSlide = function() {
    let i = 20;

    // On vérifie si un bouton est coché si oui on bougé à la bonne slide, grâce a la valeur donnée dans l'HTML + on remet à 0 le timer pour que la slide soit lisible.
    for (const radio of buttonsRadio) {
        if(radio.checked === true){
            slideAnim.style.transform = "translatex(-" + (radio.value * i) + "%)";
            count = radio.value;
            radio.checked = false;

            clearInterval(auto_slide);
            auto_slide = setInterval(function () {
                nextSlide()
            }, timeSlider);
        }
    }

    //Si rien coché, itération normale.
    if(count < items) {
        slideAnim.style.transform = "translatex(-" + (count * i) + "%)";
        count++;
        i += 20;
      }
    else if(count = items) {
        slideAnim.style.transform = "translatex(0)";
        count = 1;
    }
}

let auto_slide = setInterval(function () {
    nextSlide()
}, timeSlider);

radio_button1.addEventListener("click", nextSlide);
radio_button2.addEventListener("click", nextSlide);
radio_button3.addEventListener("click", nextSlide);
radio_button4.addEventListener("click", nextSlide);
radio_button5.addEventListener("click", nextSlide);

