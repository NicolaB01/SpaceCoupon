$(document).ready(function() {
    $(document).on('click', '#mostra-coupon-utente', function() {
        var username = $(this).data('username');
        var coupon = $(this).data('coupon');

        $('.user-overlay').show();
        $('.coupon-user').show();
        $('#nomeutente').text(username);
        $('#coupon').text(coupon);
        });
    
        $(document).on('click', '#icon-close-coupon-utente', function() {
        $('.user-overlay').hide();
        $('.coupon-user').hide();
        });

        $('.user-overlay').on('click', function() {
            $('.user-overlay').hide(); 
        });
    

});