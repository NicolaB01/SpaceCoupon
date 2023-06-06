<div class="error">
  <div class="error-content">
    <div class="message">
      @switch($tipoErrore)
        @case(1)
          <p>"{{$ricerca}}" purtroppo non è presente nel database</p>
          @break 
        @case(2)
          <p>Al momento non siamo affiliati con alcun azienda che dispone di promozioni!</p>
          @break
        @case(3)
          <p>Al momento non sono presenti promozioni, ci dispiace torna più tardi!</p>
          @break
        @case(4)
          <p>Al momento non sono presenti faq, ci dispiace torna più tardi!</p>
          @break
        @case(5)
          <p>Al momento non sono collaboriamo con alcun azienda , ci dispiace torna più tardi!</p>
          @break
        @case(6)
          <p>Al momento non ci sono utenti</p>
          @break    
        @case(7)
          <p>Al momento non ci sono membri dello staff</p>
          @break      
      @endswitch
    </div>
    <!--Aggiungere link torna indietro-->
    <div class="icona">
      <img width="90" height="90" src="https://img.icons8.com/pastel-glyph/64/000000/error--v5.png" alt="error--v5"/>
    </div>
  </div>
  @if($tipoErrore == 1)
  <div class="error-btn">
    <a href="{{route($redirect)}}">
      <!--Mettere un icona che può cambiare colore come quelle della registrazione-->
      <i class="fa fa-arrow-left"></i>
      Torna indietro
    </a>
  </div>
  @endif
</div>
