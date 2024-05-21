$(".tablaUsuarios").DataTable({
     ajax: $("#url").val() + "ajax/tablaUsuarios.ajax.php", 
     deferRender: true, 
     retrieve: true, 
     processing: true, 
     language: { 
        sProcessing: "Procesando...", 
        sLengthMenu: "Mostrar _MENU_ usuarios", 
        sZeroRecords: "No se encontraron resultados", 
        sEmptyTable: "Ningún dato disponible en esta tabla", 
        sInfo: "Mostrando usuarios del _START_ al _END_ de un total de _TOTAL_", 
        sInfoEmpty: "Mostrando usuarios del 0 al 0 de un total de 0", 
        sInfoFiltered: "(filtrado de un total de _MAX_ usuarios)", 
        sInfoPostFix: "", 
        sSearch: "Buscar:", 
        sUrl: "", 
        sInfoThousands: ",", 
        sLoadingRecords: "Cargando...", 
        oPaginate: { 
            sFirst: "Primero", 
            sLast: "Último", 
            sNext: '<i class="fa-solid fa-angle-right"></i>', 
            sPrevious: '<i class="fa-solid fa-angle-left"></i>',
        }, 
        oAria: { 
            sSortAscending: ": Activar para ordenar la columna de manera ascendente", 
            sSortDescending: ": Activar para ordenar la columna de manera descendente", 
            }, 
    }, 
});


$(".tablaUsuarios tbody").on("click", ".btnEliminarUsuario", function () {
    
    let idUsuarioEliminar = $(this).attr("id_usuario");
    console.log(idUsuarioEliminar);
    Swal.fire({
        title: "¿Está seguro de borrar el Usuario?",
        text: "¡Si no lo está puede cancelar la acción!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        cancelButtonText: "Cancelar",
        confirmButtonText: "Si, borrar Usuario!",
    }).then(function (result) {
        if (result.value) {
            window.location =
                $("#url").val() +
                "index.php?pagina=usuarios&idUsuarioEliminar=" +
                idUsuarioEliminar;
        }
    });
});



$(".tablaUsuarios tbody, .usuarios").on("click", ".btnBoton", function () {
    let id_usuario = $(this).attr("id_usuario");  
    let roles = $("#roles");
    let estado = $("#estado");
    let tipo = $(this).attr("tipo");
    
    console.log(id_usuario);

    if (tipo == "editar") {
    }
    if (tipo == "nuevo") {
    }
    console.log(tipo);

    let datos = new FormData();

    datos.append("id_usuario", id_usuario);

    $.ajax({
        url: $("#url").val() + "ajax/usuarios.ajax.php",
        method: "POST",
        data: datos,
        cache: false,
        contentType: false,
        processData: false,
        dataType: "json",
        success: function (respuesta) {
            console.log(respuesta);
            $("#editar-usuario .editar_id_usuario").val(
                respuesta["id_usuario"]
            );
            $("#editar-usuario .nombre_usuario").val( 
                respuesta["nombre_usuario"]
            );
            $("#editar-usuario .email_usuario").val(
                respuesta["email_usuario"]
            );
            
            let id_rol = respuesta["id_rol_usuario"];   

            roles
                .find('option[value="' + id_rol + '"]')
                .prop("selected", true);  
        
            
            let id_estado = respuesta["estado_usuario"];   

            estado
                .find('option[value="' + id_estado + '"]')
                .prop("selected", true);

            /*=============================================
          CARGAMOS LA FOTO
          =============================================*/

              
        },
    });

    // console.log("Hiciste click en el usuario " + id_usuario); 
});