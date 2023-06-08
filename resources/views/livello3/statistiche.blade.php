@extends('layout/bodyAdmin')

@section('content') 
    <div class="admin-stats">
        <h1>Statistiche</h1>
        <div class="stats">
            <p class="stats-description">Numero coupon emessi</p>
            <p>{{ $numeroCoupon }} <i class="fa fa-ticket" style="margin-left:10px"></i></p>
        </div>
        @include('layout/search-bar', ['redirect' => 'admin.stats'])
        @include('livello3/listaPromozioniStats', ['redirect' => 'admin.stats', 'ricerca' => $ricerca])
    </div>
@endsection