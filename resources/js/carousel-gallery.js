import Flickity from 'flickity';


let flkty = new Flickity( '.carousel-gallery', {
    wrapAround: true,
    pageDots: false,
    prevNextButtons: false

  });



  const nextBtn = document.querySelector('.carousel-gallery__buttons-next')
  const prevBtn = document.querySelector('.carousel-gallery__buttons-prev')

  nextBtn.addEventListener('click',function(){

        flkty.next()
  })

  prevBtn.addEventListener('click',function(){

    flkty.previous()
})
