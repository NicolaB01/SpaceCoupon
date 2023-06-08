@extends('layout/body')

@section('content')
        @include('layout/messageStatus')
        @include('layout/search-bar', ['redirect' => 'catalogo'])
        @can('isStaff')
        <div class="btn-create-promo-section">
                <a href="{{route('crea.promozione')}}" >Aggiungi promozione <i class="fa fa-circle-plus"></i></a>
        </div>
        @endcan

        @include('layout/listaPromozioni', ['promozioni' => $promozioni, 'ricerca' => $ricerca, 'redirect' => 'catalogo'])
@endsection

