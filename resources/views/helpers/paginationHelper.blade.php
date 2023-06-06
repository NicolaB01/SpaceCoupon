@if($indice == $paginaCorrente)
    <a href="{{ $paginator->url($i) }}" class="link active">{{$i}}</a>
@else
    <a href="{{ $paginator->url($i) }}" class="link">{{$i}}</a>
@endif