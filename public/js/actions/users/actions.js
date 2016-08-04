
// listing all the users
$(document).ready(function(){
    
});

// function to load all users
function listeningUsers(){
    var page  = $('.pagination a').attr('href').split('page=')[1-1];
    var route = 'http://comparadordeenergias-franklingra.c9users.io/home/usuarios';
       
    $.ajax({
        url: route,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $(".users").html(data);
        }
    });   
}

// load user on model window
function updateUser(btn){
    var route = "http://comparadordeenergias-franklingra.c9users.io/home/usuario/" + btn.value + "/editar";
    
    $.get(route, function(res){
        $('#id').val(res.id);
        $('#first_name').val(res.first_name);
        $('#last_name').val(res.last_name);
        $('#email').val(res.email);
        $('#birthday').val(res.birthday);
        if(res.role == "administrator"){
            $('#administrator').prop('checked', true);
            
        }else if (res.role == "editor") {
            $('#editor').prop('checked', true);
            
        }else {
            $('#author').prop('checked', true);

        }
        
        if(res.gender == "m"){
            $('#m').prop('checked', true);
            
        }else{
            $('#f').prop('checked', true);

        }

        $('#biography').val(res.biography);
    });
}


// Update user information
$('#update').click(function(){
    var value = $('#id').val();
    var first_name = $('#first_name').val();
    var last_name = $('#last_name').val();
    var email  = $('#email').val();
    var birthday = $('#birthday').val();
    
    if($('#administrator').is(':checked')){
        var role = 'administrator';
    }else if ($('#editor').is(':checked')){
        var role = 'editor';
    }else {
        var role = 'author'
    }
    
    if ($('#m').is(':checked')){
        var gender = 'm';
    }else{
        var gender = 'f';
    }
    
    var biography = $('#biography').val();
    var file = $('#avatar').val();
    var route = "http://comparadordeenergias-franklingra.c9users.io/home/usuario/" + value+ "";
    var token = $('#token').val();
    
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'PUT',
        dataType: 'json',
        data: {
            first_name: first_name, 
            last_name: last_name, 
            email: email,
            birthday: birthday,
            role: role,
            gender: gender,
            biography: biography,
            file: file,
        },
        success: function(){
            listeningUsers();
            $('#myModal').modal('toggle');
        }
    });
    
   
});


// Delete
function destroy(btn){
    var route = "http://comparadordeenergias-franklingra.c9users.io/home/usuario/" + btn.value;
    var token = $('#token').val();
    
    $.ajax({
        url: route,
        headers: {'X-CSRF-TOKEN': token},
        type: 'DELETE',
        dataType: 'json',
        success: function(){
            listeningUsers();
        }
    });
}


// Pagination
$(document).on('click', '.pagination a', function(e){
    e.preventDefault();
    var page  = $(this).attr('href').split('page=')[1];
    var route = 'http://comparadordeenergias-franklingra.c9users.io/home/usuarios';
       
    $.ajax({
        url: route,
        data: {page: page},
        type: 'GET',
        dataType: 'json',
        success: function(data){
            $(".users").html(data);
        }
    });
});