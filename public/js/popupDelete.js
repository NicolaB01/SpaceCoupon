$(document).ready(function() {
    $(document).on('click', '#eliminaButton', function(event){
        event.preventDefault();

        Swal.fire({
            title: 'Conferma eliminazione',
            text: 'Sei sicuro di voler eliminare?',
            showCancelButton: true,
            confirmButtonText: 'Conferma',
            cancelButtonText: 'Annulla',
            customClass: {
                container: 'my-swal-container',
                popup: 'my-swal-popup',
                confirmButton: 'my-swal-confirm-button',
                cancelButton: 'my-swal-cancel-button'
                 }
        }).then((result) => {
        if (result.isConfirmed)                
            $(this).closest('form').submit();
        });
    });

    setTimeout(function() {
        $('#flash-message').slideUp('slow', function() {
            $(this).remove();
        });
    }, 5000);
});