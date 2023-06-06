@php
        $logoAzienda = null;
        if (empty($imgUrl)) {
            $logoAzienda = 'default.png';
        }else {
            $logoAzienda = $imgUrl;
        }
@endphp
<img class="logo-azienda" src="{{ asset('images/loghiAziende/' . $logoAzienda) }}" id="chosen-logo">