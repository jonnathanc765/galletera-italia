// safari no soporta scroll behavior smooth solo, necesita pollyfil
import smoothscroll from 'smoothscroll-polyfill';
import Flickity from 'flickity';


document.addEventListener("DOMContentLoaded", function () {

    const animalito = document.getElementById('animalito')
    const container = document.querySelector('.slogan-container')
    const btnScroll = document.getElementById('scroll-btn')
    const nextBtn = document.querySelector('.carousel-gallery__buttons-next')
    const prevBtn = document.querySelector('.carousel-gallery__buttons-prev')


    // galeria
    let flkty = new Flickity('.carousel-gallery', {
        wrapAround: true,
        pageDots: false,
        prevNextButtons: false

    });

    nextBtn.addEventListener('click', function () {

        flkty.previous()
    })

    prevBtn.addEventListener('click', function () {
        flkty.next()

    })


    // boton scroll to animacion
    smoothscroll.polyfill();
    btnScroll.addEventListener('click', function () {

        document.getElementById('slogan-container').scrollIntoView({
            behavior: "smooth"
        })
    })



    // animalito animacion

    let compensacion = 0

    if (window.matchMedia('(max-width: 576px)').matches) {

        compensacion = 0.35
    } else if (window.matchMedia('(min-width: 768px) and (max-width: 991px)').matches) {

        compensacion = 0.45
    } else if (window.matchMedia('(min-width: 992px)').matches) {

        compensacion = 0.7
    }

    const io = new IntersectionObserver(entries => {

        // Element enters the viewport
        if (entries[0].intersectionRatio !== 0) {

            if (entries[0].boundingClientRect.top < 0) return
            // si ya se empieza a dejar de verse por arriba, dejar de mover el muñeco

            let value = `${(entries[0].intersectionRatio * entries[0].boundingClientRect.width ) - (entries[0].boundingClientRect.width *compensacion)}px`
            // cuanto se ve * el ancho, ya que cuanto se ve sale en decimales de 0 a 1 es como un porcentaje
            // menos, el ancho * un decimal de compensacion,

            animalito.style.setProperty('--posX', `${value}`)

        }

    }, {
        // Call the observer, when the element enters the viewport,
        // when 25%, 50%, 75% and the whole element are visible
        // rootMargin: '0px 0px -20px 0px',
        threshold: [0, 0.1, 0.2, 0.3, 0.4, 0.5, 0.6, 0.7, 0.8, 0.9, 1]
    });

    // Start observing .box
    io.observe(container);

})
