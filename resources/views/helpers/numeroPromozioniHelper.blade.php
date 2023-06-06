@if($azienda->Promozioni()->count() == 1)
    <p>{{$azienda->Promozioni()->count()}} offerta disponibile</p>
@else
    <p>{{$azienda->Promozioni()->count()}} offerte disponibili</p>
@endif