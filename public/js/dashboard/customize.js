$(document).ready(function(){
    /*Delete user*/
    $('.btn-delete-user').on('click', function(e){
       e.preventDefault();
       
       var form = $(this).parents('form');
       
        swal({
           title: "¿Estás seguro?",
           text: '¿Deseás eliminar este usuario?',
           type: "warning",
           showCancelButton: true,
           confirmButtonColor: "#DD6B55",
           confirmButtonText: "Si, Eliminar!",
           closeOnConfirm: false
         }, function(isConfirm){
            if (isConfirm){
              $('#form1').submit();
            } 
         });
       
      });
     /*/. Delete user */
    
    $('.btn-delete-post').on('click', function(e){
       e.preventDefault();
       
       var form = $(this).parents('form');
       
        swal({
           title: "¿Estás seguro?",
           text: '¿Deseás eliminar este artículo?',
           type: "warning",
           showCancelButton: true,
           confirmButtonColor: "#DD6B55",
           confirmButtonText: "Si, Eliminar!",
           closeOnConfirm: false
         }, function(isConfirm){
            if (isConfirm){
              $('#form1').submit();
            } 
         });
       
      });
     /*/. Delete user */
});