@extends('layout/bodyAdmin')

@section('content')    
    <div class="admin-section">
    <div class="admin-add-container">
        <div class="header">
            <a href="{{ session()->get('url') }}" class="">
                <i class="fa fa-arrow-left"></i>
                Torna indietro</a>
            <h2>Modifica la faq</h2>
        </div>
        {{Form::open(array('route'=> ['admin.update.faq', $faq->idFAQ], 'class'=>'admin-faq-form'))}}
        {{Form::token()}}

            <div class= "input-div">
                {{ Form::label('domanda','Domanda:')}}
                {{ Form::textArea('domanda',$faq->domanda)}}
                    @if ($errors->first('domanda'))
                        <ul>
                            @foreach($errors->get('domanda') as $message)
                            <li>
                                    {{$message}}
                            </li>   
                                @endforeach
                        </ul>
                            @endif
            </div>
            <div class= "input-div">
                {{ Form::label('risposta','Risposta:')}}
                {{ Form::textArea('risposta',$faq->risposta)}}
                    @if ($errors->first('risposta'))
                    <ul>
                        @foreach($errors->get('risposta') as $message)
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