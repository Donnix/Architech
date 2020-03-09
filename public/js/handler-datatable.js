jQuery(document).ready(function() {

    $('#table').on('click', '.edit', function(e) {
        var x    = $(this).closest('td').find('#id').val();
        var href = $(this).attr("href");
        $(this).attr('href', href + '/' + x);
    });

    $('#table').on('click', '.view', function(e) {
        var x    = $(this).closest('td').find("#id").val();
        var href = $(this).attr("href");
        $(this).attr('href', href + '/' + x);
    });

    $('#table').on('click', '.delete', function(e) {
        var x    = $(this).closest('td').find('#id').val();
        var href = $(this).attr('href');

        e.preventDefault();  

        swal({
          title             : "Are you sure ?",
          text              : "Once deleted, you will not be able to recover this data!",
          type              : "warning",
          confirmButtonText : 'Yes',
          showCancelButton  : true,
          allowOutsideClick : false
        })

        .then(function(e) {
           
           e.value ? 

           $.ajax({
                type    : 'GET',
                url     : href,
                data    : { id : x },
                cache   : false,
                success : function(result) {

                    if(result.status == 'success')
                    {
                        swal({
                            type: "success",
                            title: result.message,
                            showConfirmButton: !1,
                            timer: 1500
                        });

                        setTimeout(function() {
                            window.location.href = result.url;
                        }, 2000);
                    }
                    else
                    {
                        swal({
                            type: "error",
                            title: result.message,
                            showConfirmButton: !1,
                            timer: 1500
                        });

                        setTimeout(function() {
                            window.location.href = result.url;
                        }, 2000);
                    }
                }
           })

           : "cancel" === e.dismiss && swal("Cancelled", "Your data is safe :)", "error");
        });
    });

    $('#table').on('click', '.add-room', function(e) {
        var x    = $(this).closest('td').find('#id').val();
        var href = $(this).attr("href");
        console.log(x);
        $(this).attr('href', href + '/' + x);
    });

    /* disabled right click */
    $(document).on('contextmenu', '.view, .edit, .refund, .delete', function(e){
        return false;
    });
});