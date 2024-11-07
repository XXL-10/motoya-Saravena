const slides = document.querySelectorAll('.carrusel');
let btnAnt = document.querySelector('#btnAnterior');
let btnSig = document.querySelector('#btnSiguiente');
btnAnt.addEventListener('click', slideAnterior);
btnSig.addEventListener('click', slideSiguiente);
let pos = 0;

function mostrarSlide(index){
    slides.forEach((slide,i) => {
        slide.classList.add('hidden');
        if(i===index){
            slide.classList.remove('hidden');
        }
    })
}

mostrarSlide(pos);

function slideAnterior(){
    pos = (pos - 1 + slides.length) % slides.length;
    mostrarSlide(pos);
}

function slideSiguiente(){
    pos = (pos + 1) % slides.length;
    mostrarSlide(pos);
}

setInterval(slideSiguiente, 5000); 