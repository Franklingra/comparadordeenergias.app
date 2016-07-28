$(document).ready(function(){       
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
});
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#mid');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar").css('background-color', 'rgba(21,36,17,.7)');
       }
   });
    }
});
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#projects');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar").css('background-color', '');
       }
   });
    }
});
$(document).ready(function(){       
   var scroll_start = 0;
   var startchange = $('#bottom');
   var offset = startchange.offset();
    if (startchange.length){
   $(document).scroll(function() { 
      scroll_start = $(this).scrollTop();
      if(scroll_start > offset.top) {
          $(".navbar").css('background-color', '');
       }
   });
    }
});