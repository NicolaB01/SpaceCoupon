<div class="catalogo">
    @if($ricerca and count($promozioni) == 0)
        @include('layout/error', ['tipoErrore' => 1, 'ricerca' => $ricerca, 'redirect' => 'admin.stats'])
    @elseif(count($promozioni) == 0)
        @include('layout/error', ['tipoErrore' => 3])
    @else
        <div class="pag-catalogo">
            @foreach($promozioni as $promozione)
                    <a href="{{ route('admin.visualizzaPromozione', ['idPromozione' => $promozione->idPromozione]) }}" class="btn-best-offer">
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
        @include('pagination.paginator', ['paginator' => $promozioni])
    @endif
</div>