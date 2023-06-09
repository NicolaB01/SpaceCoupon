@extends('layout/body')

@section('content')
    <section class="profile-section">
        @include('layout/navProfilo')
            <div class="coupon-section">
                @include('layout/search-bar', ['redirect' => 'profilo.coupons'])
                @include('layout/listaPromozioni', ['ricerca' => $ricerca, 'redirect' => 'profilo.coupons'])
            </div>
    </section>
@endsection