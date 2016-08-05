
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
});
