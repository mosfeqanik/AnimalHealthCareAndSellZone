$('#search').keyup(function () {
    var search =$('#search').val();
    $.ajax({
        url:'search.php',
        data:'usearch='+search, 
        success:function (data) {
            $('#feedback').html(data);
        }
    });
});