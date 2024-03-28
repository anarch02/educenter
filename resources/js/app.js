import './bootstrap';

import Swal from 'sweetalert2';


$('#add-form').on('submit', function(event){
    event.preventDefault();

    var url = $(this).attr('action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            console.log(response);
            $('#add-form').trigger("reset");
            $('.modal').modal('hide');
            $('.modal-backdrop').hide();
            $('.modal').trigger('dispose');
            $('.table').load(location.href+ ' .table');

            if(response)
            {
                Swal.fire(
                    response.message,
                    'You clicked the button!',
                    response.status
                )
            }

            
        },
        error: function(err) {
            let error = err.responseJSON;
            $.each(error.errors, function(index, value){
                
                $('#errors').append('<span class="text-danger">'+value+'</span>');
            });
        }
    });
});

$('body').on('click', '#del-form', function(event){
    event.preventDefault();

    var url = $(this).attr('action');

    $.ajax({
        url: url,
        method: 'POST',
        data: new FormData(this),
        dataType: 'JSON',
        contentType: false,
        cache: false,
        processData: false,
        success:function(response)
        {
            if(response)
            {
                Swal.fire(
                    response.message,
                    'You clicked the button!',
                    response.status
                  )
            }
            $("#del-form").trigger("reset");
            $('.table').load(location.href+ ' .table');
        },
        error: function(err) {
            let error = err.responseJSON;
            $.each(error.errors, function(index, value){
                $('.errorsMessage').append('<span class="text-danger">'+value+'</span>');
            });
        }
    });
});