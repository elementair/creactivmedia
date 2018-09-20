  $(window).load(function(){
    $("#autores").owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      autoplay:true,
      responsive:{
        0:{
            items:2,
            nav:false
        },
        450: {
          items: 3,
          nav:false
        },
        768:{
            items:4,
            nav:true
        },
        992:{
            items:5,
            nav:true,
            loop:true
        }
      }
    });
    $("#autores_detalle").owlCarousel({
      loop: true,
      nav: true,
      dots: false,
      autoplay:true,
      responsive:{
        0:{
            items:2,
            nav:false
        },
        450: {
          items: 3,
          nav:false
        },
        768:{
            items:4,
            nav:true
        },
        992:{
            items:5,
            nav:true,
            loop:true
        }
    }
    });
  });
