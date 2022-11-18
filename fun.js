$(function () {
    $( "#inputState").change(function () {
        var id = $(this).val();
        $('.product_types input').removeAttr('disabled');
        $('.product_types > div').addClass('d-none');
        $('#'+id).removeClass('d-none');
        $('.product_types > .d-none input').attr('disabled', 'disabled');
    });

    $('#submitFrom').click(function(event) {
        event.preventDefault();
        var values = $('#myform').serialize();

        $.ajax({
            url: "productaddPhp.php",
            type: "post",
            data: values,

             success: function (data) {
                if (data.data.errors) {
                    var errors = data.data.errors;
                    // $('#myform')[0].reset(dfsdfsdfdfsdfsdfsfdfsdf);
                    $('#myform :input').removeClass('is-valid');
                        $.each( errors , function( index, value ) {
                            $("[name='"+ index + "']").addClass('is-invalid');
                            console.log( index + ": " + value );
                        });
                }else {
                    $(location).attr('href', 'http://proeqti.ge/home.php');
                    //show notification if no  errors
                }

            },
            error: function(jqXHR, textStatus, errorThrown) {
                  console.log(textStatus, errorThrown);
            }
        });
    });
});
