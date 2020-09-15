import smoothscroll from 'smoothscroll-polyfill';
smoothscroll.polyfill();


    document.addEventListener("DOMContentLoaded", function () {

        let cuandoMover = 0
        let breakMin=0
        let breakMax=0
        let wantBreak = false
        let compensacion = 0

        if (window.matchMedia('(max-width: 768px)').matches) {
            breakMin=0
            breakMax=0
            wantBreak = false
            cuandoMover = 0.6

            compensacion = '60vw'
        }
        if (window.matchMedia('(min-width: 992px)').matches) {
            breakMin=-300
            breakMax=20
            cuandoMover = 0.86
            wantBreak = true

            compensacion = '30vw'
        }

            const animalito = document.getElementById('animalito')
            const container = document.querySelector('.slogan-container')
            const btnScroll = document.getElementById('scroll-btn')

            btnScroll.addEventListener('click',function(){

                document.getElementById('slogan-container').scrollIntoView({behavior: "smooth"})
            })

            const io = new IntersectionObserver(entries => {

                // Element enters the viewport
                if (entries[0].intersectionRatio !== 0) {


                    let value = entries[0].boundingClientRect.top * -1

                    if ((value < breakMin || value > breakMax) && wantBreak) return

                    if (entries[0].intersectionRatio >= cuandoMover) value = `${value}px + ${compensacion}`
                    else value = `${value}px`


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