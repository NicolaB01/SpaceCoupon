@extends('layout/body')

@section('content')
    <section class="profile-section">
        @include('layout/navProfilo')
        <div class="edit-profile-section">
            <div class="header-section">
                <a href="{{route('profilo')}}" class="btn-go-back">
                    <img width="20" height="20" src="https://img.icons8.com/ios-glyphs/30/000000/arrow-pointing-left--v2.png" alt="arrow-pointing-left--v2"/>  Torna indietro
                </a>
                <h2>Modifica il profilo</h2>
            </div>
            {{Form::open(array('route'=>'profilo.update', 'class'=>'input-container-form'))}}
            {{ Form::token() }}
            <div class= "input-div">
                {{ Form::label('nome','Nome')}}
                {{ Form::text('nome', auth()->user()->nome)}}
                    @if ($errors->first('nome'))
                        <ul>
                            @foreach($errors->get('nome') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
            </div>
            <div class= "input-div">
                {{ Form::label('cognome','Cognome')}}
                {{ Form::text('cognome', auth()->user()->cognome)}}
                    @if ($errors->first('cognome'))
                    <ul>
                        @foreach($errors->get('cognome') as $message)
                        <li>
                                {{$message}}
                        </li>   
                            @endforeach
                    </ul>
                    @endif
            </div>
            <div class= "input-div">
                {{Form::label('eta','Età')}}
                {{Form::number('eta', auth()->user()->eta)}}
                @if ($errors->first('eta'))
                <ul>
                    @foreach($errors->get('eta') as $message)
                    <li>
                        {{$message}}
                    </li>   
                    @endforeach
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('telefono','Telefono')}}
                {{ Form::text('telefono', auth()->user()->telefono)}}
                @if ($errors->first('telefono'))
                <ul>
                    @foreach($errors->get('telefono') as $message)
                    <li>
                        {{$message}}
                    </li>   
                    @endforeach
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('email','E-mail')}}
                {{ Form::text('email', auth()->user()->email)}}
                @if ($errors->first('email'))
                <ul>
                    @foreach($errors->get('email') as $message)
                    <li>
                        {{$message}}
                    </li>   
                    @endforeach
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('username','Username')}}
                {{ Form::text('username', auth()->user()->username)}}
                @if ($errors->first('username'))
                <ul>
                    @foreach($errors->get('username') as $message)
                    <li>
                        {{$message}}
                    </li>   
                    @endforeach
                </ul>
                @endif
            </div>
            <div class= "input-div">
                {{ Form::label('password','Password')}}
                {{ Form::password('password')}}
                @if ($errors->first('password'))
                <ul>
                    @foreach($errors->get('password') as $message)
                    <li>
                        {{$message}}
                    </li>   
                    @endforeach
                </ul>
                @endif
            </div> 
            <div class= "input-div">
                {{ Form::label('conferma-password','Conferma password')}}
                {{ Form::password('password_confirmation')}}  
            </div> 
            <div class= "radio-div">
                <div class="radio-label">
                    {{Form::radio('genere','uomo',true)}}
                    {{Form::label('inLineRadio1','Uomo')}}
                </div>
                <div class="radio-label">
                    {{Form::radio('genere','donna')}}
                    {{Form::label('inLineRadio1','Donna')}}
                </div>
                <div class="radio-label">
                    {{Form::radio('genere','altro')}}
                    {{Form::label('inLineRadio1','Altro')}}
                </div>
            </div>
            <div class="input-container-btn-div">
                {{ Form::submit('Modifica',['class'=>'input-container-btn'])}} 
            </div>
            {{Form::close()}}
        </div>
    </section>
@endsection
