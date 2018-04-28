var k = jQuery.noConflict();

k(document).ready(function(){
	var estado = false;
 
	k('#btn-toggle').on('click',function(){
		k('.seccionToggle').slideToggle();
 
		if (estado == true) {
			/*k(this).replaceWith("<a href='#' id='btn-toggle' ><img src='img/menu.png' height='64' width='64' alt=''></a>").html();
			k('body').css({
				"overflow": "auto"
			});*/
			estado = false;
		} else {
			/*k(this).replaceWith("<a href='#' id='btn-toggle' ><img src='img/menu-up.png' height='64' width='64' alt=''></a>").html();
			k('body').css({
				"overflow": "hidden"
			});*/
			estado = true;
		}
	});

	k('#btn-toggle2').on('click',function(){
		k('.seccionToggle').slideToggle();
 
		if (estado == true) {
			/*k(this).replaceWith("<a href='#' id='btn-toggle' ><img src='img/menu.png' height='64' width='64' alt=''></a>").html();
			k('body').css({
				"overflow": "auto"
			});*/
			estado = false;
		} else {
			/*k(this).replaceWith("<a href='#' id='btn-toggle' ><img src='img/menu-up.png' height='64' width='64' alt=''></a>").html();
			k('body').css({
				"overflow": "hidden"
			});*/
			estado = true;
		}
	});


});


var s = jQuery.noConflict();
	  s(document).ready(function(){


		s("#_nombre").mouseover(function(event){
		      s("#_nombre").removeClass("error");
		   });

		s("#_empresa").mouseover(function(event){
		      s("#_empresa").removeClass("error");
		   });

		s("#_telefono").mouseover(function(event){
		      s("#_telefono").removeClass("error");
		   });

		s("#_celular").mouseover(function(event){
		      s("#_celular").removeClass("error");
		   });


		s("#_email").mouseover(function(event){
		      s("#_email").removeClass("error");
		   });

		s("#_asunto").mouseover(function(event){
		      s("#_asunto").removeClass("error");
		   });

		s("#_mensaje").mouseover(function(event){
		      s("#_mensaje").removeClass("error");
		   });

	
		s('#identidad').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#mkt').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#multimedia').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#editorial').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#web').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#blog').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#pantalla').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

	    s('#portafolio').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });

		s('#contacto').hover(function(){
	        s(this).animate({opacity:0});
		    },function(){
		        s(this).animate({opacity:1});
	    });


	  });