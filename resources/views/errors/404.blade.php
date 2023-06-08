@extends('layout/body')

@section('scripts')
<script src="{{ asset('js/errors.js') }}" defer></script>
@endsection

@section('content')
<div class="wrapper-message-error">
    <p class="text_404">4 
      <i class="fa fa-user-astronaut"></i> 
      4</p>
    <p class="text_lost">La pagina che stai cercando <br />è dispera nello spazio.</p>
    <a href="">Torna alla home</a>
</div>
@endsection