@extends('layout/body')

@section('content')
    <div class="torna-indietro-visualizza-promo">
        <a href="{{ session()->get('url') }}" class="btn-go-back-from-coupon">
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
            @guest
                <div class="bottom-promo">
                    <p>Non hai ancora effettuato l'accesso, accedi al nostro sito web!</p>
                    <div class="btn-section">
                        <a href="{{route('login')}}" class="btn-coupon-accedi">Accedi</a>
                    </div>
                </div>
            @endguest
            @can('isUser')
                @include('helpers/couponHelper', ['promozione' => $promozione, 'temp' => $coupon])
            @endcan
            @can('isStaff')
                <div class="bottom-promo">
                    <div class="btn-section">
                        <a href="{{route('edit.promozione', $promozione->idPromozione)}}">Modifica</a>
                        {{Form::open(array('route' => ['delete.promozione', $promozione->idPromozione])) }}
                        {{Form::token()}}

                        {{ Form::submit('Elimina',['class'=>'button-ritira', 'id' => 'eliminaButton'])}} 

                        {{Form::close()}}
                    </div>
                </div>
            @endcan
            @can('isAdmin')
                <div class="bottom-promo">
                    <p>Il numero di coupon emessi per questa promozione è {{$promozione->numeroCoupon}}</p>
                </div>
            @endcan
        </div>
    </div>  
@endsection