$(document).ready(function(){
    var tableData = $('#data');
    var route     = 'http://comparadordeenergias-franklingra.c9users.io/home/usuarios/lista';
    
    $.get(route, function(res){
        $(res).each(function(key, value){
            tableData.append(
                "<tr>" + 
                    "<td class='text-center'>" + value.first_name + "</td>" +
                    "<td class='text-center'>" + value.last_name  + "</td>" +
                    "<td class='text-center'>" + value.email      + "</td>" +
                    "<td class='text-center'>" + value.role       + "</td>" +
                    "<td class='text-center'>" + "<img class='tableavatar' src='../../uploads/avatar/"+ value.avatar + "' alt='avatar'/>"    + "</td>" +
                    "<td class='text-center'>" + "<button class='btn-table btn btn-info btn-sm'>Editar</button>" + " | " + "<button class='btn-table btn btn-danger btn-sm'>Eliminar</button>" + "</td>" +
                "</tr>"
            );
        });
    });
});