@extends('layout/body')

@section('content')

<div class="torna-indietro-visualizza-promo">
    <a href="{{ session()->get('back') }}" class="btn-go-back-from-coupon">
    <i class="fa fa-arrow-left" style="scale:0.9"></i> Torna indietro
    </a>
</div>
@include('layout/messageStatus')
<div class="div-singola-azienda">
    <div class="template-azienda">
        <div class="top-info-azienda">
            @include('helpers/aziendaImg', ['imgUrl' => $azienda->logo])
        </div>
        <div class="info">
            <h3 class="title"> Ragione sociale</h3>
            <p class="text">{{$azienda->ragioneSociale}}</p>
            <h3 class="title"> Locazione</h3>
            <p class="text">{{$azienda->localizzazione}}</p>
            <h3 class="title"> Tipologia</h3>
            <p class="text">{{$azienda->tipologia}}</p>
            <h3 class="title"> Descrizione</h3>
            <p class="text">{{$azienda->descrizione}}</p>
        </div>
        <hr class="hr-singola-azienda">
        <div class="promo-per-azienda">  
            @include('layout/listaPromozioni', ['ricerca' => false])
        </div>
    </div>
</div>                
@endsection
