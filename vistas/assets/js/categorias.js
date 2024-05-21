$(".tablaCategorias").DataTable({
  ajax: $("#url").val() + "ajax/tablaCategorias.ajax.php", 
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


$(".tablaCategorias tbody, .categorias").on("click", ".btnBoton", function () {
 let id_categoria = $(this).attr("id_categoria"); 
 let tipo = $(this).attr("tipo");
 
 console.log(id_categoria);  

 if (tipo == "editar") {
 }
 if (tipo == "nuevo") {
 }
 console.log(tipo);

 let datos = new FormData();

 datos.append("id_categoria", id_categoria);

 $.ajax({
     url: $("#url").val() + "ajax/categorias.ajax.php",
     method: "POST",
     data: datos,
     cache: false,
     contentType: false,
     processData: false,
     dataType: "json",
     success: function (respuesta) {
         console.log(respuesta);
         $("#editar-categoria .editar_id_categoria").val(
             respuesta["id_categoria"]
         );
         $("#editar-categoria .nombre_categoria").val( 
             respuesta["nombre_categoria"]
         );

         /*=============================================
       CARGAMOS LA FOTO
       =============================================*/

           
     },
 });

 //console.log("Hiciste click en el producto " + id_producto);
});



$(".tablaCategorias tbody").on("click", ".btnEliminarCategoria", function () {
 
  let idCategoriaEliminar = $(this).attr("id_categoria");
  console.log(idCategoriaEliminar);
  Swal.fire({
      title: "¿Está seguro de borrar la Categoria?",
      text: "¡Si no lo está puede cancelar la acción!",
      icon: "warning",
      showCancelButton: true,
      confirmButtonColor: "#3085d6",
      cancelButtonColor: "#d33",
      cancelButtonText: "Cancelar",
      confirmButtonText: "Si, borrar Categoria!",
  }).then(function (result) {
      if (result.value) {
          window.location =
              $("#url").val() +
              "index.php?pagina=categorias&idCategoriaEliminar=" +
              idCategoriaEliminar;
      }
  });
 });