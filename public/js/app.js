/*$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#top');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          
          $(".navbar").css('background-color', 'transparent');
       }
   });
    }
});*/
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#mid');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() {
       $(".navbar").stop().animate({
                backgroundColor: $(window).scrollTop() > 0 ? 'rgba(62, 71, 79,.9)' : 'rgba(0,0,0,.0)'
            }, 400);
      /*scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
           $(".nav").stop().animate({
                backgroundColor: $(window).scrollTop() > 0 ? 'rgba(62, 71, 79,.9)' : '#000'
            }, 800);
          
       }else{
           
       }*/
   });
    }
});
