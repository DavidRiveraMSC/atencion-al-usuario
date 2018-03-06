$(function () {
    $('.js-categoria').DataTable({
        responsive: true,
        "language": {
            "url": "/admin/js/pages/tables/Spanish.json"
        },
        "order": [[ 0, "desc" ]],        
        dom: 'lBfrtip',
        
        buttons: [
        {
           extend: 'pdf',           
           exportOptions: {
                columns: [0,1,2]
            }
       },
       {
           extend: 'csv',
           exportOptions: {
                columns: [0,1,2]
            }
          
       },
       {
           extend: 'excel',
           exportOptions: {
                columns: [0,1,2]
            }
       }
    ],
    "columnDefs": [
            {
                "targets": [ 0 ],
                "visible": false,
                "searchable": false
            },
            {
                "targets": [ 3 ],
                "searchable": false
            }
        ],

    });

});
