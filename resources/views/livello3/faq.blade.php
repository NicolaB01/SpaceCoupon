@extends('layout/bodyAdmin')
@section('title', 'SpaceCoupon.com')

@section('content')        
    <div class="admin-section">
    @include('layout/messageStatus')
    <h1>Faq</h1>
    <div class="admin-divider"></div>
    <table>
        <tr>
            <th>Domanda</th>
            <th>Risposta</th>
            <th>Azioni</th>
        </tr>
        @if(count($faqs) != 0)
            @foreach($faqs as $faq)
                <tr>
                    <td>
                        <p>{{$faq->domanda}}</p>
                    </td>
                    <td>
                        <p>{{$faq->risposta}}</p>
                    </td>
                    <td class="btn-action">
                        <div>
                            <a href="{{route('admin.edit.faq', ['idFaq' => $faq->idFAQ])}}">Modifica</a>
                            {{Form::open(array('route' => ['admin.delete.faq', $faq->idFAQ]))}}
                            {{Form::token()}}
                            {{Form::submit('Elimina', ['id' => 'eliminaButton'])}}
                            {{Form::close()}}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
    </table> 
    @if(count($faqs) == 0)
        @include('layout/error', ['tipoErrore' => 4])
    @endif
    <div class="btn-add-section">
        <a href="{{route('admin.create.faq')}}" >Aggiungi faq <i class="fa fa-circle-plus"></i></a>
    </div>
    <div class="pagination-admin">
        @include('pagination.paginator', ['paginator' => $faqs])
    </div>
</div>
@endsection