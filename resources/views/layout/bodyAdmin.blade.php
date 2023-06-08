<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceCoupon.com</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"/>
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/admin.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{asset('css/profile.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{asset('css/inputForms.css')}}">   
    <link rel="stylesheet" type="text/css" href="{{asset('css/search-bar.css')}}">  
    <link rel="stylesheet" type="text/css" href="{{asset('css/catalogo.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/pagination.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/message.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/statistiche.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/offer.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/viewPromo.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('css/error.css')}}">           

    @show
        @section('scripts')
    @show
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="{{ asset('js/message.js') }}" defer></script>
    <script src="{{ asset('js/popupDelete.js') }}" defer></script> 
    <script src="{{ asset('js/popupCoupon.js') }}" defer></script> 
    <script src="{{ asset('js/validationForm.js') }}" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.0.19/dist/sweetalert2.min.js"></script>

</head>
<body>
    @include('layout/headerAdmin')
    <main class="main-admin">
        <div><!--da tenere--></div>
        @include('layout/navbarAdmin')
        @yield('content')
    </main>
</body>
</html>
