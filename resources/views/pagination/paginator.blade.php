
<div class="pagination">
    @if($paginator->lastPage() != 1)
        @if($paginator->onFirstPage())
            <i class="fa-solid fa-angles-left"></i>
            <i class="fa-solid fa-angle-left"></i>
        @else
            <a href="{{ $paginator->url(1) }}" class="link-pagination"><i class="fa-solid fa-angles-left"></i></a>
            <a href="{{ $paginator->previousPageUrl() }}" class="link-pagination"><i class="fa-solid fa-angle-left"></i></a>
        @endif

        @if($paginator->lastPage() < 7)
            <div class="links">
            @for($i=1; $i<=$paginator->lastPage(); $i++)
                @include('helpers/paginationHelper', ['indice' => $i, 'paginaCorrente' => $paginator->currentPage()])
            @endfor
            </div>
        @else
            <div class="links">
            @if($paginator->currentPage() <= 3)
                @for($i=1; $i<=$paginator->currentPage()+1; $i++) 
                    @include('helpers/paginationHelper', ['indice' => $i, 'paginaCorrente' => $paginator->currentPage()])
                @endfor
                <a href="" class="link">...</a>
                <a href="{{ $paginator->url($paginator->lastPage()) }}" class="link">{{$paginator->lastPage()}}</a>
            @elseif ($paginator->currentPage() >= $paginator->lastPage()-2)
                <a href="{{ $paginator->url(1) }}" class="link">1</a>
                <a href="" class="link">...</a>
                @for($i=$paginator->currentPage()-1; $i<=$paginator->lastPage(); $i++) 
                    @include('helpers/paginationHelper', ['indice' => $i, 'paginaCorrente' => $paginator->currentPage()])
                @endfor
            @else
                <a href="{{ $paginator->url(1) }}" class="link">1</a>
                <a href="" class="link">...</a>
                @for($i=$paginator->currentPage()-1; $i<=$paginator->currentPage()+1; $i++) 
                    @include('helpers/paginationHelper', ['indice' => $i, 'paginaCorrente' => $paginator->currentPage()])
                @endfor
                <a href="" class="link">...</a>
                <a href="{{ $paginator->url($paginator->lastPage()) }}" class="link">{{$paginator->lastPage()}}</a>
            @endif 
            </div>               
        @endif

        @if($paginator->hasMorePages())
            <a href="{{ $paginator->nextPageUrl() }}" class="link-pagination"><i class="fa-solid fa-angle-right"></i></a>
            <a href="{{ $paginator->url($paginator->lastPage()) }}" class="link-pagination"><i class="fa-solid fa-angles-right"></i></a>
        @else
            <i class="fa-solid fa-angle-right"></i>
            <i class="fa-solid fa-angles-right"></i>
        @endif
    @endif
</div>
