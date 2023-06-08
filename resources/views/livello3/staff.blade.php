@extends('layout/bodyAdmin')

@section('content')   
 <div class="admin-section">
    @include('layout/messageStatus')
    <h1>Staff</h1>
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
                @if(count($staffs) != 0)
                    @foreach($staffs as $staff)
                        <tr>
                            <td>
                                <span>{{$staff->nome}}</span>
                            </td>
                            <td>
                                <span>{{$staff->cognome}}</span>
                            </td>
                            <td>
                                <span>{{$staff->username}}</span>
                            </td>
                            <td>
                                <span>{{$staff->email}}</span>
                            </td>
                            <td>
                                <span>{{$staff->telefono}}</span>
                            </td>
                            <td>
                                <span>{{$staff->eta}}</span>
                            </td>
                            <td class="btn-action">
                                <div>
                                    <a href="{{route('admin.edit.staff', ['idStaff' => $staff->idUtente])}}">Modifica</a>
                                    {{Form::open(array('route' => ['admin.delete.staff', $staff->idUtente]))}}
                                    {{Form::token()}}
                                    {{Form::submit('Elimina', ['id' => 'eliminaButton'])}}
                                    {{Form::close()}}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                @endif
            </table>
            @if(count($staffs) == 0)
                @include('layout/error', ['tipoErrore' => 7])
            @endif
            <div class="btn-add-section">
                <a href="{{route('admin.create.staff')}}" >Aggiungi membro dello staff <i class="fa fa-circle-plus"></i></a>
            </div>
            <div class="pagination-admin">
                    @include('pagination.paginator', ['paginator' => $staffs])
            </div>
    </div>
@endsection