	
function ScrollHandler(pageId) { 
    var page = $('#' + pageId);
    var pageStart = page.offset().top;
    var pageJump = false;

    function scrollToPage() {
        pageJump = true;
        $('html, body').animate({ 
            scrollTop: pageStart 
        }, {
            duration: 1000,
            complete: function() {
            pageJump = false;
            }
        });

        //console.log(pageId+" "+page.offset().top);
        switch(pageId){
            case 'seccion_portafolio':
                $(".btn-toggle").css("background", "#16171900");
            break;
            case 'contenedor_portafolio':
                $(".btn-toggle").css("background", "rgba(0, 0, 0, 0.8)"); 
            break;

        }
    }

    window.addEventListener('wheel', function(event) {
       var viewStart = $(window).scrollTop();
            if (!pageJump)  {   
                var pageHeight = page.height();
                var pageStopPortion = pageHeight / 2;
                var viewHeight = $(window).height();

                var viewEnd = viewStart + viewHeight;
                var pageStartPart = viewEnd - pageStart;
                var pageEndPart = (pageStart + pageHeight) - viewStart;
                  
                var canJumpDown = pageStartPart >= 0; 
                var stopJumpDown = pageStartPart > pageStopPortion; 
          
                var canJumpUp = pageEndPart >= 0; 
                var stopJumpUp = pageEndPart > pageStopPortion; 

                var scrollingForward = event.deltaY > 0;
                if (  ( scrollingForward && canJumpDown && !stopJumpDown) 
                || (!scrollingForward && canJumpUp   && !stopJumpUp)) {
                    event.preventDefault();
                    scrollToPage();
                } 
            }else {
                event.preventDefault();
            }    
    });
}


new ScrollHandler('seccion_portafolio');
new ScrollHandler('contenedor_portafolio');