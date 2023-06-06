<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="{{asset('css/index.css')}}">    
    <link rel="stylesheet" type="text/css" href="{{asset('css/stampa.css')}}">   

</head>
<body>
    <h1 class="stampa-title">Anteprima di stampa</h1>
    <div class="div-stampa-coupon">
        <div class="info-azienda">
            <img src="{{asset('images/loghiAziende')}}/{{$promozione->Azienda->logo}}" alt="Logo">
        </div>
        <hr>
        <h2 class="discount">Codice attivazione: {{$codiceAttivazione}}</h2>
        <hr>
        <div class="div-info">
            <div class="promo-campo">
                <h2>Azienda:</h2>
                <p>{{ $promozione->Azienda->ragioneSociale}}</p>
            </div>
            <div class="promo-campo">
                <h2>Oggetto:</h2>
                <p>{{ $promozione->oggetto}}</p>
            </div>
            <div class="promo-campo">
                <h2>Sconto:</h2>
                <p>{{ $promozione->sconto}}%</p>
            </div>
            <div class="promo-campo">
                <h2>Modalità di fruizione:</h2>
                <p>{{ $promozione->modalita}}</p>
            </div>
            <div class="promo-campo">
                <h2>Tempo di fruizione:</h2>
                <p>{{date('d-m-Y', strtotime($promozione->tempoFruizione))}}</p>
            </div>
            <div class="promo-campo">
                <h2>Luogo di fruizione:</h2>
                <p>{{ $promozione->luogoFruizione}}</p>
            </div>
            <hr class="hr-separa-utente">
            <h2>Utente</h2>
            <div class="info-utente-stampa">
                <div>
                    <h2>Nome:</h2>
                    <p>{{auth()->user()->nome}}</p>
                </div>
                <div> 
                    <h2>Cognome:</h2>
                    <p>{{auth()->user()->cognome}}</p>
                </div>
            </div>
        </div>
        <div class="bottom-stampa">
            <button class="btn-stampa" onclick="window.print()">Stampa coupon</button>
        </div>
    </div>  
</body>
</html>