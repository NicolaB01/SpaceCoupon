@extends('layout/body')

@section('content')
    <div class="create-promotion"> 
        <div class="create-standard-promotion"> 
            <div class="header">
                <a href="{{route('visualizzaPromozione', $promozione->idPromozione)}}" class="">
                    <i class="fa fa-arrow-left"></i>
                    Torna indietro</a>
                <h2>Modifica promozione</h2>
            </div>
            {{Form::open(array('route' => ['update.promozione', $promozione->idPromozione], 'class'=>'create-promotion-form'))}}
            {{Form::token()}}

                <div class="input-div">
                    {{Form::label('azienda', 'Azienda:')}}
                    {{Form::select('azienda', $nomeAziende, $promozione->Azienda->idAzienda)}}
                    @if ($errors->first('azienda'))
                        <ul class="errors">
                            @foreach($errors->get('azienda') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>
                <div class="input-div discount">
                    {{Form::label('sconto', 'Sconto:')}}
                    {{Form::number('sconto', $promozione->sconto)}}
                    @if ($errors->first('sconto'))
                        <ul class="errors">
                            @foreach($errors->get('sconto') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                    <p>%</p>
                </div>
                <div class="input-div">
                    {{Form::label('oggetto', 'Oggetto:')}}
                    {{Form::text('oggetto', $promozione->oggetto)}}
                    @if ($errors->first('oggetto'))
                        <ul class="errors">
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
                    {{Form::text('modalita', $promozione->modalita)}}
                    @if ($errors->first('modalita'))
                        <ul class="errors">
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
                    {{Form::date('tempoFruizione', $promozione->tempoFruizione)}}
                    @if ($errors->first('tempoFruizione'))
                        <ul class="errors">
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
                    {{Form::text('luogoFruizione', $promozione->luogoFruizione)}}
                    @if ($errors->first('luogoFruizione'))
                        <ul class="errors"> 
                            @foreach($errors->get('luogoFruizione') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
                </div>

                <div class="btn-section">
                    {{ Form::submit('Modifica',['class'=>'btn-create-promotion'])}}
                </div>
            {{Form::close()}}
        </div>
    </div>
@endsection