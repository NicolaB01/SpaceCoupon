@php
    $coupon = $temp->getCouponByPromozione($promozione);
@endphp
@if($coupon)
    <div class="bottom-promo">
        <p>Hai già riscattato questa promozione,visualizza il coupon o scegline altre!</p>
        <div class="btn-section">
            <a href="{{route('stampa.coupon', ['idCoupon' => $coupon->idCoupon])}}" target="_blank">Mostra</a>
        </div>
    </div>
@elseif(strtotime($promozione->tempoFruizione) < strtotime(date('Y-m-d')))
    <div class="bottom-promo">
        <p>La promozione che stai cercando di ritirare è scaduta!</p>
    </div>
@else
<div class="bottom-promo">
    <p>Riscatta ora il tuo coupon , affrettati!</p>
    <div class="btn-section">
        {{ Form::open(array('route' => ['crea.coupon', $promozione->idPromozione] )) }}
        {{ Form::token() }}
        {{ Form::submit('Ritira', ['class' => 'button-ritira']) }}
        {{ Form::close() }}
    </div>
</div>
@endif