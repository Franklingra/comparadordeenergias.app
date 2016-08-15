
$(document).ready(function(){       
   
   var startchange = $('#mid');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() {
       $(".navbar").stop().animate({
                backgroundColor: $(window).scrollTop() > 0 ? 'rgba(62, 71, 79,.9)' : 'rgba(0,0,0,.0)'
            }, 400);
   });
    }
    
    
   $('.navbar-toggle').click(function () {
        $('.navbar-nav').toggleClass('slide-in');
        $('.side-body').toggleClass('body-slide-in');
        $('#search').removeClass('in').addClass('collapse').slideUp(200);

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').toggleClass('slide-in');
        
    });
   
   // Remove menu for searching
   $('#search-trigger').click(function () {
        $('.navbar-nav').removeClass('slide-in');
        $('.side-body').removeClass('body-slide-in');

        /// uncomment code for absolute positioning tweek see top comment in css
        //$('.absolute-wrapper').removeClass('slide-in');

    }); 
    
    tinymce.init({
    selector: '#mytextarea',
    language : "es",
  });
    
  $('#user-delete').click(function(){
    alert("qwdqwd");
  });
});
