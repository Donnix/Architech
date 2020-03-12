
$(".js-select2").each(function(){
    $(this).select2({
        minimumResultsForSearch: 20,
        dropdownParent: $(this).next('.dropDownSelect2')
    });


    $(".js-select2").each(function(){
        $(this).on('select2:close', function (e){
            if($(this).val() == "Please chooses") {
                $('.js-show-service').slideUp();
            }
            else {
                $('.js-show-service').slideUp();
                $('.js-show-service').slideDown();
            }
        });
    });
});

$(document).ready(function() {

        
    $(document).on('click', '.submit', function() {
        var form = $(this).closest('form');

        form.validate({
           
            rules: {
                name: {
                    required: true
                },
               email: {
                    required: true
                },
                no_hp: {
                    required: true
                },
                short_description: {
                    required: true
                },
                location_service: {
                    required: true
                },
                facebook_url: {
                    required: true
                },
                instagram_url: {
                    required: true
                },
                linkedin_url: {
                    required: true
                },
                twitter_url: {
                    required: true
                }

                // image_file_name: {
                //     required: function() {
                //         var val_image_file_name = $('input[name="val_image_file_name"]').val();

                //         if(val_image_file_name == '') {
                //             return true;
                //         } else {
                //             return false;
                //         }
                //     } 
                // }
            }
        });

        if(form.valid()) {

            swal({
                title                 : "Are you sure ?",
                text                  : "Make sure the data that you already input is correct",
                type                  : "warning",
                confirmButtonText     : 'Yes',
                showCancelButton      : true,
                allowOutsideClick     : false
            })

            .then((willSave) => {
                if (willSave.value === true) {

                    mApp.blockPage({
                        overlayColor : '#000000',
                        type         : 'loader',
                        state        : 'success',
                        size         : 'lg'
                    });

                    $.ajax({
                        type        : 'POST',
                        url         : form.attr('action'),
                        data        : new FormData(document.getElementById("form_add")),
                        processData : false,
                        contentType : false,
                        cache       : false,
                        success     : function(data) {
                            
                            if(data.status == '1')
                            {   
                                
                                toastr.success(data.message); 
                                setTimeout(function() {
                                    window.location.href = data.url;
                                }, 2000);   
                            }
                            else
                            {
                                toastr.error(data.message);
                                setTimeout(function() {
                                    window.location.href = data.url;
                                }, 2000);
                            }
                        }
                    });  
                }
            });
        }
    });

});
