@extends('layout/body')
@section('title', 'Aziende')

@section('content')
        @include('layout/search-bar', ['redirect' => 'aziende'])

        <div class="catalogo">
            @if($ricerca and count($aziende) == 0)
              @include('layout/error', ['tipoErrore' => 1, 'ricerca' => $ricerca, 'redirect' => 'aziende'])
            @elseif(count($aziende) == 0)
              @include('layout/error', ['tipoErrore' => 5])
            @else
              <div class="pag-catalogo-aziende">
                @foreach($aziende as $azienda)
                  <div class="template-aziende">
                    <div class="left-info">
                      @include('helpers/aziendaImg', ['imgUrl' => $azienda->logo])
                        <a href="{{route('azienda', $azienda->idAzienda)}}"> Visualizza le offerte</a>
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
                  </div>
                @endforeach
              </div>
              @include('pagination.paginator', ['paginator' => $aziende])
            @endif
        </div>  

@endsection
