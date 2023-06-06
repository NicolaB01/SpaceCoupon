@extends('layout/bodyAdmin')
@section('title', 'SpaceCoupon.com')

@section('content')  
    <div class="admin-section">
    <div class="admin-add-container">
        <div class="header">
            <a href="{{ session()->get('url') }}" class="">
                <i class="fa fa-arrow-left"></i>
                Torna indietro</a>
            <h2>Modifica membro dello staff</h2>
        </div>
            {{Form::open(array('route'=> ['admin.update.staff', $staff->idUtente], 'class'=>'input-container-form'))}}
            {{Form::token()}}
                <div class="input-div-id" style="display:none;">
                    {{ Form::text('id', $staff->idUtente )}}
                </div>
                <div class= "input-div">
                    {{ Form::label('nome','Nome')}}
                    {{ Form::text('nome',$staff->nome )}}
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
                    {{ Form::text('cognome',$staff->cognome)}}
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
                    {{Form::number('eta',$staff->eta)}}
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
                    {{ Form::text('telefono',$staff->telefono)}}
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
                    {{ Form::text('email',$staff->email)}}
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
                    {{ Form::text('username',$staff->username)}}
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
    </div>
@endsection