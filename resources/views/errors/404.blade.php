<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>SpaceCoupon.com</title>

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

  <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">
  <link rel="stylesheet" type="text/css" href="{{asset('css/error.css')}}">
</head>
<body>
  <div class="wrapper-message-error">
      <p class="text_404">4 
        <i class="fa fa-user-astronaut"></i> 
        4</p>
      <p class="text_lost">La pagina che stai cercando <br />è dispersa nello spazio.</p>
      <a href="{{ route('home') }}">Torna alla home</a>
  </div>
</body>
</html>