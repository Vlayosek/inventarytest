$(document).ready(function() {

    //get base URL *********************
    var url = $('#url').val();
    $('.tblAreas').DataTable({
        language: {
            "emptyTable": "No hay información",
            "info": "Mostrando _TOTAL_ Registros",
            "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
            "infoFiltered": "(Filtrado de _MAX_ total Registros)",
            "thousands": ",",
            "lengthMenu": "Mostrar _MENU_ Registros",
            "loadingRecords": "Cargando...",
            "processing": "Procesando...",
            "search": "Buscar:",
            "zeroRecords": "Sin resultados encontrados",
            "paginate": {
                "first": "Primero",
                "last": "Ultimo",
                "next": "Siguiente",
                "previous": "Anterior"
            }
        },
    });

    // $('.tblAreas').DataTable({
    //     processing: true,
    //     serverside: true,
    //     /* ajax: "{{ route('area.table') }}", */
    //     ajax: {
    //         "type": "GET",
    //         "url": '/area/filltable',
    //     },
    //     "columns":[
    //         {data: 'id'},
    //         {data: 'name'},
    //         {data: 'areabadge'},
    //         {data: 'areabtn'}
    //     ],
    //     language: {
    //         "emptyTable": "No hay información",
    //         "info": "Mostrando _START_ a _END_ de _TOTAL_ Registros",
    //         "infoEmpty": "Mostrando 0 to 0 of 0 Registros",
    //         "infoFiltered": "(Filtrado de _MAX_ total Registros)",
    //         "thousands": ",",
    //         "lengthMenu": "Mostrar _MENU_ Registros",
    //         "loadingRecords": "Cargando...",
    //         "processing": "Procesando...",
    //         "search": "Buscar:",
    //         "zeroRecords": "Sin resultados encontrados",
    //         "paginate": {
    //             "first": "Primero",
    //             "last": "Ultimo",
    //             "next": "Siguiente",
    //             "previous": "Anterior"
    //         }
    //     },
    // });
});
