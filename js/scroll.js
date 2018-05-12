// For transparent navbar
$(window).scroll(function() {
    if($(this).scrollTop() > 50)  /*height in pixels when the navbar becomes non opaque*/ 
    {
        $('.btn-toggle').addClass('opaque');
    } else {
        $('.btn-toggle').removeClass('opaque');
    }
})

$.scrollUp({
	scrollText:"",
	scrollSpeed: 2000,
	easingType: "easeOutQuint"
});