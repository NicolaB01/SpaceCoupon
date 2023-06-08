@extends('layout/bodyAdmin')

@section('scripts')
<script src="{{ asset('js/logo.js') }}" defer></script>
@endsection

@section('content')  
    <div class="admin-section">
        <div class="admin-add-container">
            <div class="header">
                <a href="{{ session()->get('url')}}" class="">
                    <i class="fa fa-arrow-left"></i>
                    Torna indietro</a>
                <h2>Modifica Azienda</h2>
            </div>
            {{Form::open(array('route'=> ['admin.update.azienda', $azienda->idAzienda], 'files' => true, 'class'=>'input-container-form'))}}
            {{Form::token()}}

            <div class= "input-div-logo">
                    {{ Form::label('logo','Logo')}}
                    {{ Form::file('logo', ['id' => 'logo', 'class' => 'logo hide'])}}
                    <div>
                        <label class= "label-input-logo"for="logo">
                            <i class="fa-solid fa-upload"></i> Inserisci il logo dell'azienda qui
                        </label>
                        <div class="display-logo" style ="display: block;">
                            @include('helpers/aziendaImg', ['imgUrl' => $azienda->logo])
                        </div>
                    </div>
                        @if ($errors->first('logo'))
                            <ul>
                                @foreach($errors->get('logo') as $message)
                                <li>
                                        {{$message}}
                                </li>   
                                    @endforeach
                            </ul>
                        @endif
                </div>
                <div class= "input-div">
                    {{ Form::label('ragioneSociale','Ragione sociale:')}}
                    {{ Form::text('ragioneSociale', $azienda->ragioneSociale)}}
                        @if ($errors->first('ragioneSociale'))
                        <ul>
                            @foreach($errors->get('ragioneSociale') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                        @endif
                </div>
                <div class= "input-div">
                    {{Form::label('tipologia','Tipologia:')}}
                    {{Form::text('tipologia', $azienda->tipologia)}}
                    @if ($errors->first('tipologia'))
                    <ul>
                        @foreach($errors->get('tipologia') as $message)
                        <li>
                            {{$message}}
                        </li>   
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class= "input-div-textarea">
                    {{ Form::label('descrizione','Descrizione:')}}
                    {{ Form::textArea('descrizione', $azienda->descrizione)}}
                    @if ($errors->first('descrizione'))
                    <ul>
                        @foreach($errors->get('descrizione') as $message)
                        <li>
                            {{$message}}
                        </li>   
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class= "input-div">
                    {{ Form::label('localizzazione','Locazione:')}}
                    {{ Form::text('localizzazione', $azienda->localizzazione)}}
                    @if ($errors->first('localizzazione'))
                    <ul>
                        @foreach($errors->get('localizzazione') as $message)
                        <li>
                            {{$message}}
                        </li>   
                        @endforeach
                    </ul>
                    @endif
                </div>
                <div class="input-container-btn-div">
                    {{ Form::submit('Modifica',['class'=>'input-container-btn'])}} 
                </div>
            {{Form::close()}}
        </div>
    </div>
@endsection
