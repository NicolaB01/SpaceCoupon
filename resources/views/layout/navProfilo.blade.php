<div class="nav-menu">
    <div class="links-btn">
        @can('isUser')
            @if(session()->get('pagina') == 'profilo')
                <a href="{{route('profilo')}}" class="link active" id="btn-profile">Profilo</a>
                <a href="{{route('profilo.coupons')}}" class="link" id="btn-coupons">I miei coupon</a>
            @elseif(session()->get('pagina') == 'coupon')
                <a href="{{route('profilo')}}" class="link" id="btn-profile">Profilo</a>
                <a href="{{route('profilo.coupons')}}" class="link active" id="btn-coupons">I miei coupon</a>
            @endif
        @endcan
        @can('isStaff')
            <a href="{{route('profilo.staff')}}" class="link active" id="btn-profile">Profilo</a>
        @endcan
        <a href="" class="logout-link" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
        <i class="fa-sharp fa-solid fa-arrow-right-from-bracket" color="color:#0D1B2A"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</div>

