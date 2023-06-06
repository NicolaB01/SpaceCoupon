@extends('layout/body')
@section('title', 'Login')

@section('content')
<section class="login-section">
    <h2>Login</h2>
    <div class = "login-div">
              {{Form::open(array('route'=>'login', 'class'=>'login-form'))}}
              {{Form::token()}}
            <div>
                {{ Form::label('username','Username',['class'=>'label-form'])}}
                {{ Form::text('username')}}
            </div>
            @if ($errors->first('username'))
            <ul>
                @foreach($errors->get('username') as $message)
                    <li>
                        {{$message}}
                    </li>   
                @endforeach
            </ul>
            @endif
            <div>
                {{ Form::label('password','Password',['class'=>'label-form'])}}
                {{ Form::password('password')}}
            </div>
            @if ($errors->first('password'))
            <ul>
            @foreach($errors->get('password') as $message)
                    <li>
                        {{$message}}
                    </li>   
                @endforeach
            </ul>
            @endif
            <div>
              {{ Form::submit('Login',['class'=>'login-btn'])}}
            </div>
              {{ Form::close() }}  

          <div class="login-register">
                <p>Non hai ancora un account?
                    <a href="{{ route('register') }}"> Registrati</a>
                </p>
            </div>
      </div>
</section>
@endsection


