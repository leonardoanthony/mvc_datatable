$(document).ready(function () {
    $('#user-table').DataTable({
        processing: true,
        serverSide: true,
        language: {
            url: "//cdn.datatables.net/plug-ins/1.12.1/i18n/pt-BR.json",
        },
        ajax: {
            url: '/usuarios/list',
            dataType: 'JSON',
        },
        columnDefs: [{
            "defaultContent": "-",
            "targets": "_all"
        }]
        
    });

});