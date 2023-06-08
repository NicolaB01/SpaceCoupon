@extends('layout/body')

@section('content')
    <section class="profile-section">
        @include('layout/navProfilo')
        <div class="edit-profile-section">
            <div class="header-section">
                <a href="{{route('profilo.staff')}}" class="btn-go-back">
                <i class="fa-solid fa-arrow-left"></i>Torna indietro
                </a>
                <h2>Modifica il profilo</h2>
            </div>
            {{Form::open(array('route'=>'profilo.staff.update', 'class'=>'input-container-form'))}}
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
            <div class="input-container-btn-div">
                {{ Form::submit('Modifica',['class'=>'input-container-btn'])}} 
            </div>
            {{Form::close()}}
        </div>
    </section>
@endsection