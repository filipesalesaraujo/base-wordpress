jQuery(document).ready(function(){
    $(".dg-galeria-carrossel").slick({
        dots: true,
        arrows: false,
        // slidesToShow: 6,
        // slidesToScroll: 6,
        responsive: [
            {
              breakpoint: 991,
              settings: {
              slidesToShow: 1,
              slidesToScroll: 1,
              
              }
            }
        ]  
    });
    
})

