@extends('layout/bodyAdmin')

@section('content')
    <div>
        <div class="torna-indietro-visualizza-promo">
            <a href="{{ redirect()->back()->getTargetUrl() }}" class="btn-go-back-from-coupon">
            <i class="fa fa-arrow-left" style="scale:0.9"></i>  Torna indietro
            </a>
        </div>
        @include('layout/messageStatus')
        <div class="promo-container">
                <div class="div-promo-coupon">
                    <div class="info-azienda">
                        @include('helpers/aziendaImg', ['imgUrl' => $promozione->Azienda->logo])
                    </div>
                    <hr>
                    <div class="discount">
                        <h2>Sconto: {{$promozione->sconto}}%</h2>
                    </div>
                    <hr>
                    <div class="grid-promo-container">
                        <div class="promo-campo">
                            <h2>Oggetto:</h2>
                            <p>{{$promozione->oggetto}}</p>
                        </div>
                        <div class="promo-campo">
                            <h2>Modalità di fruizione:</h2>
                            <p>{{$promozione->modalita}}</p>
                        </div>
                        <div class="promo-campo">
                            <h2>Tempo di fruizione:</h2>
                            <p>{{date('d-m-Y', strtotime($promozione->tempoFruizione))}}</p>
                        </div>
                        <div class="promo-campo">
                            <h2>Luogo di fruizione:</h2>
                            <p>{{$promozione->luogoFruizione}}</p>
                        </div>
                    </div>
                    <div class="bottom-promo">
                        <p>Il numero di coupon emessi per questa promozione è <strong>{{$promozione->numeroCoupon}}</strong></p>
                    </div>
            </div>
        </div>
    </div>  
@endsection
