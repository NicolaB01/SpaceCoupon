@extends('layout/body')

@section('scripts')
<script src="{{ asset('js/errors.js') }}" defer></script>
@endsection

@section('content')
<div class="wrapper-message-error">
    <p class="text_403">4 
      <i class="fa fa-user-astronaut"></i> 
      3</p>
    <p class="text_lost">Non sei autorizzato</p>
    <a href="">Torna alla home</a>
</div>
@endsection