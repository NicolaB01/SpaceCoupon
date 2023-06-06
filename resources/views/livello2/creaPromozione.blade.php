@extends('layout/body')
@section('title', 'SpaceCoupon.com')

@section('scripts')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script>
$(function () {
    var actionUrl = "{{ route('store.promozione') }}";
    var formId = 'addPromo';
    $(":input").on('blur', function (event) {
        var formElementId = $(this).attr('id');
        doElemValidation(formElementId, actionUrl, formId);
    });
    $("#addPromo").on('submit', function (event) {
        event.preventDefault();
        doFormValidation(actionUrl, formId);
    });
});
</script>
@endsection

@section('content')
    <div class="create-promotion">
        <div class="create-standard-promotion">
            <div class="header">
                <a href="{{route('catalogo')}}" class="">
                    <i class="fa fa-arrow-left"></i>
                    Torna indietro</a>
                <h2>Aggiungi una promozione</h2>
            </div>

            {{Form::open(array('route'=> 'store.promozione', 'id'=>'addPromo','class'=>'create-promotion-form'))}}
            {{Form::token()}}
           
                <div class="input-div">
                    {{Form::label('idAzienda', 'Azienda:')}}
                    {{ Form::select('idAzienda', $nomeAziende, '', ['id' => 'idAzienda']) }}
                    @if ($errors->first('idAzienda'))
                        <ul>
                            @foreach($errors->get('idAzienda') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="input-div discount">
                    {{Form::label('sconto', 'Sconto:')}}
                    {{ Form::number('sconto', '', [ 'id' => 'sconto']) }}
                    <p>%</p>
                    @if ($errors->first('sconto'))
                        <ul>
                            @foreach($errors->get('sconto') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="input-div">
                    {{Form::label('oggetto', 'Oggetto:')}}
                    {{ Form::text('oggetto', '', [ 'id' => 'oggetto']) }}
                    @if ($errors->first('oggetto'))
                        <ul>
                            @foreach($errors->get('oggetto') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="input-div">
                    {{Form::label('modalita', 'Modalità di fruizione:')}}
                    {{ Form::text('modalita', '', [ 'id' => 'modalita']) }}
                    @if ($errors->first('modalita'))
                        <ul>
                            @foreach($errors->get('modalita') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="input-div date">
                    {{Form::label('tempoFruizione', 'Tempo di fruizione:')}}
                    <p>Valido fino al: </p>
                    {{ Form::date('tempoFruizione', '', [ 'id' => 'tempoFruizione']) }}
                    @if ($errors->first('tempoFruizione'))
                        <ul>
                            @foreach($errors->get('tempoFruizione') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="input-div">
                    {{Form::label('luogoFruizione', 'Luogo di fruizione:')}}
                    {{ Form::text('luogoFruizione', '', [ 'id' => 'luogoFruizione']) }}
                    @if ($errors->first('luogoFruizione'))
                        <ul>
                            @foreach($errors->get('luogoFruizione') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="btn-section">
                    {{ Form::submit('Conferma',['class'=>'btn-creeate-promotion'])}} 
                </div>

            {{Form::close()}}
        </div>
    </div>
@endsection
