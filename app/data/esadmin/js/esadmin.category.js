$(function(){
    $('#panels .panel.active .eno-datagrid tbody tr').each(function(){
        $(this).find('td:eq(1)').html(function(){
            return '<a data-href="/esadmin/category/lists/'+$(this).prev().html()+'">'+$(this).html()+'</a>';
        });
    });
    
    EsAdmin.Dom.Btn._add('/esadmin/category/id','?pid=');
});