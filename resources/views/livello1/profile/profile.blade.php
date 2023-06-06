@extends('layout/body')
@section('title', 'Profilo')

@section('content')
    <section class="profile-section">
        @include('layout/navProfilo')
        <div class="profile-info">
	@include('layout/messageStatus')
        <h2>Profilo</h2>
            <div class="info">
                <div>
                    <label class="title">
                        Nome:</label>
                    <label>{{$user->nome}}</label>
                </div>
                <div>
                    <label class="title">Cognome:</label>
                    <label>{{$user->cognome}}</label>
                </div>
                <div>
                    <label class="title">Genere:</label>
                    <label>{{$user->genere}}</label>
                </div>
                <div>
                    <label class="title">Età:</label>
                    <label>{{$user->eta}}</label>
                </div>
                <div>
                    <label class="title">E-mail:</label>
                    <label>{{$user->email}}</label>
                </div>
                <div>
                    <label class="title">Telefono:</label>
                    <label>{{$user->telefono}}</label>
                </div>
                <div>
                    <label class="title">Username:</label>
                    <label>{{$user->username}}</label>
                </div>
            </div>
            <div>
                <a href="{{route('profilo.edit')}}" class="edit-btn">
                Modifica
                <i class="fa-solid fa-pen-to-square"></i>
                </a>
            </div>
        </div>
    </section>
@endsection


