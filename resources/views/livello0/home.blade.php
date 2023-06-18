@extends('layout/body')

@section('scripts')
<script src="{{ asset('js/carousel.js') }}" defer></script>
@endsection

@section('content')
    <div class="scritta-movimento">
        <span>
            <i class="fa fa-shuttle-space fa-flip-horizontal"></i> Space coupon, promozioni spaziali <i class="fa fa-fire-flame-simple fa-rotate-90"></i>
    </div>
    @include('layout/messageStatus')
    @include('layout/search-bar', ['redirect' => 'catalogo'])

    
    <div class="header-vetrina-aziende">
        <h2>Aziende </h2>
        <img width="20" height="25" src="https://img.icons8.com/ios-glyphs/30/vertical-line.png" alt="vertical-line"/>
        <a href="{{route('aziende')}}">Scopri di più <i class="fa fa-arrow-right" style="scale: 0.8;"></i></a>
    </div>
    @if(count($aziende) == 0)
        @include('layout/error',['tipoErrore'=> 2])
    @else
    <section class="aziende-div">            
        <i  id="left" class="fa-solid fa-angle-left"></i>
        <div class="carousel">
            @foreach($aziende as $azienda)
            <a href="{{route('azienda', $azienda->idAzienda)}}" class="azienda">
                <div class="top-azienda">
                    @include('helpers/aziendaImg', ['imgUrl' => $azienda->logo])
                </div>
                <div class="bottom-azienda">
                    <h2>{{ $azienda->ragioneSociale }}</h2>
                    @include('helpers/numeroPromozioniHelper', ['azienda' => $azienda])
                    <span>Scopri</span>
                </div>
            </a>
            @endforeach
        </div>
        <i id="right" class="fa-solid fa-angle-right"></i>
    </section>
     <!-- fine sezione aziende -->
    <section class="best-offers">
        <div class="header-vetrina">
            <h2>Promozioni popolari </h2>
            <img width="20" height="25" src="https://img.icons8.com/ios-glyphs/30/vertical-line.png" alt="vertical-line"/>
            <a href="{{route('catalogo')}}">Scopri di più <i class="fa fa-arrow-right" style="scale: 0.8;"></i></a>
        </div>
                <div class="vetrina">
                @foreach($promozioni as $promozione)
                    <a href="{{ route('visualizzaPromozione', ['idPromozione' => $promozione->idPromozione]) }}" class="btn-best-offer">
                        <div class="conteiner-template">
                            <div class="circle-left"></div>
                            <div class="conteiner-offer">
                                <div class="discount">
                                    <h2> 
                                        {{$promozione->sconto}}%
                                    </h2>
                                    </div>
                                <hr>
                                <div class="description">
                                    <h3 class="nome-azienda">{{$promozione->Azienda->ragioneSociale}}</h3>
                                    <p>{{$promozione->oggetto}}</h2>
                                </div>
                            </div>
                            <div class="circle-rigth"></div>
                        </div>
                    </a>
                @endforeach
                </div>
    </section>
    <!-- fine sezione migliori offerte -->
    @endif
@endsection