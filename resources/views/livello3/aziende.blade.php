@extends('layout/bodyAdmin')

@section('content')    
    <div class="admin-section">
    @include('layout/messageStatus')
    <h1>Aziende</h1>
    @include('layout/search-bar', ['redirect' => 'admin.aziende'])
                <table>
                    <tr>
                        <th>Logo</th>
                        <th>Ragione sociale</th>
                        <th>Tipologia</th>
                        <th>Descrizione</th>
                        <th>Locazione</th>
                        <th>Azioni</th>
                    </tr>
                    @if(count($aziende) != 0)
                        @foreach($aziende as $azienda)
                            <tr>
                                <td>
                                    @include('helpers/aziendaImg', ['imgUrl' => $azienda->logo])
                                </td>
                                <td>
                                    <span>{{$azienda->ragioneSociale}}</span>
                                </td>
                                <td>
                                    <span>{{$azienda->tipologia}}</span>
                                </td>
                                <td>
                                    <p>{{$azienda->descrizione}}</p>
                                </td>
                                <td>
                                    <span>{{$azienda->localizzazione}}</span>
                                </td>
                                <td class="btn-action">
                                    <div>
                                        <a href="{{route('admin.edit.azienda', ['idAzienda' => $azienda->idAzienda])}}">Modifica</a>
                                        {{Form::open(array('route' => ['admin.delete.azienda', $azienda->idAzienda]))}}
                                        {{Form::token()}}
                                        {{Form::submit('Elimina', ['id' => 'eliminaButton','class' => 'delete-btn'])}}
                                        {{Form::close()}}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    @endif
                </table>
                @if($ricerca and count($aziende) == 0)
                    @include('layout/error', ['tipoErrore' => 1, 'ricerca' => $ricerca, 'redirect' => 'admin.aziende'])
                @elseif(count($aziende) == 0)
                    @include('layout/error', ['tipoErrore' => 5])
                @endif
                <div class="btn-add-section">
                    <a href="{{route('admin.create.azienda')}}" >Aggiungi azienda <i class="fa fa-circle-plus"></i></a>
                </div>
                <div class="pagination-admin">
                    @include('pagination.paginator', ['paginator' => $aziende])
                </div>
    </div>
@endsection