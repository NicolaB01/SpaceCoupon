@extends('layout/bodyAdmin')

@section('content')   
    <div class="admin-section">
        @include('layout/messageStatus')
        <h1>Utenti</h1>
        <div class="admin-divider"></div>
            <table>
                <tr>
                    <th>Nome</th>
                    <th>Cognome</th>
                    <th>Username</th>
                    <th>E-mail</th>
                    <th>Telefono</th>
                    <th>Età</th>
                    <th>Azioni</th>
                </tr>
                @if(count($users) != 0)
                    @foreach($users as $user)
                        <tr>
                            <td>
                                <span>{{$user->nome}}</span>
                            </td>
                            <td>
                                <span>{{$user->cognome}}</span>
                            </td>
                            <td>
                                <span>{{$user->username}}</span>
                            </td>
                            <td>
                                <span>{{$user->email}}</span>
                            </td>
                            <td>
                                <span>{{$user->telefono}}</span>
                            </td>
                            <td>
                                <span>{{$user->eta}}</span>
                            </td>
                            <td class="btn-action">
                                <div>
                                    @if($user->Coupons != null)
                                        <a href="javascript:void(0)" id="mostra-coupon-utente" data-username="{{$user->username}}" data-coupon="{{$user->Coupons->count()}}">Coupon</a>
                                    @else
                                        <a href="javascript:void(0)" id="mostra-coupon-utente" data-username="{{$user->username}}" data-coupon="0">Coupon</a>
                                    @endif
                                    {{Form::open(array('route' => ['admin.delete.user', $user->idUtente]))}}
                                    {{Form::token()}}
                                    {{Form::submit('Elimina', ['id' => 'eliminaButton'])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
            @if(count($users) == 0)
                    @include('layout/error', ['tipoErrore' => 6])
            @endif
            <div class="pagination-admin">
                    @include('pagination.paginator', ['paginator' => $users])
            </div>
    </div>

    <div class="user-overlay" style="display: none;">
        <div class="user-container">
            <div class="coupon-user" style="display: none;">
                <span class="icon-close-coupon-utente" id="icon-close-coupon-utente">
                    <img width="24" height="24" src="https://img.icons8.com/material-rounded/24/000000/delete-sign.png" alt="delete-sign"/>
                </span>
                <div class="dati-utente">
                    <h2>Utente:</h2>
                    <div class="nome-cognome-utente">
                        <p id="nomeutente"></p>
                    </div>
                </div>
                <div class="dettagli-coupon">
                    <h2>Numero di Coupon:</h2>
                    <div class="numero-coupon">
                        <p id="coupon"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection