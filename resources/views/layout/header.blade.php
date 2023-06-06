<header>
    <div class="navbar">
        <div class="logo"><img src="{{ asset('images/logo.png') }}" alt="logo"></img></div>
        <ul class="links">
            @if(session()->get('pagina') == 'home')
                <li><a href="{{route('home')}}" class="active">Home</a></li>
                <li><a href="{{route('catalogo')}}" class="">Promozioni</a></li>
                <li><a href="{{route('aziende')}}" class="">Aziende</a></li>
                <li><a href="{{route('about')}}" class="">Chi siamo</a></li>
                <li><a href="{{route('faq')}}" class="">Faq</a></li>
            @elseif(session()->get('pagina') == 'promozioni')
                <li><a href="{{route('home')}}" class="">Home</a></li>
                <li><a href="{{route('catalogo')}}" class="active">Promozioni</a></li>
                <li><a href="{{route('aziende')}}" class="">Aziende</a></li>
                <li><a href="{{route('about')}}" class="">Chi siamo</a></li>
                <li><a href="{{route('faq')}}" class="">Faq</a></li>
            @elseif(session()->get('pagina') == 'aziende')
                <li><a href="{{route('home')}}" class="">Home</a></li>
                <li><a href="{{route('catalogo')}}" class="">Promozioni</a></li>
                <li><a href="{{route('aziende')}}" class="active">Aziende</a></li>
                <li><a href="{{route('about')}}" class="">Chi siamo</a></li>
                <li><a href="{{route('faq')}}" class="">Faq</a></li>
            @elseif(session()->get('pagina') == 'who')
                <li><a href="{{route('home')}}" class="">Home</a></li>
                <li><a href="{{route('catalogo')}}" class="">Promozioni</a></li>
                <li><a href="{{route('aziende')}}" class="">Aziende</a></li>
                <li><a href="{{route('about')}}" class="active">Chi siamo</a></li>
                <li><a href="{{route('faq')}}" class="">Faq</a></li>
            @elseif(session()->get('pagina') == 'faq')
                <li><a href="{{route('home')}}" class="">Home</a></li>
                <li><a href="{{route('catalogo')}}" class="">Promozioni</a></li>
                <li><a href="{{route('aziende')}}" class="">Aziende</a></li>
                <li><a href="{{route('about')}}" class="">Chi siamo</a></li>
                <li><a href="{{route('faq')}}" class="active">Faq</a></li>
            @else
                <li><a href="{{route('home')}}" class="">Home</a></li>
                <li><a href="{{route('catalogo')}}" class="">Promozioni</a></li>
                <li><a href="{{route('aziende')}}" class="">Aziende</a></li>
                <li><a href="{{route('about')}}" class="">Chi siamo</a></li>
                <li><a href="{{route('faq')}}" class="">Faq</a></li>
            @endif
        </ul>
        @guest
            <a href="{{route('login')}}" class="btn-login">Login  <i class="fa-sharp fa-solid fa-user-astronaut" style ="color:#E0E1DD; margin-left:10px;"></i></a> 
        @endguest
        @can('isUser')
            <a href="{{route('profilo')}}" class="btn-login">{{auth()->user()->username}} <i class="fa-sharp fa-solid fa-user-astronaut" style ="color:#E0E1DD margin-left:10px;"></i></a> 
        @endcan
        @can('isStaff')
            <a href="{{route('profilo.staff')}}" class="btn-login">{{auth()->user()->username}} 
            <i class="fa-solid fa-user-pen" style ="color:#E0E1DD; margin-left:10px;"></i></a> 
        @endcan
        @can('isAdmin')
            <a href="{{route('admin.aziende')}}" class="btn-login"> Gestionale
            <i class="fa fa-user-gear" style ="color:#E0E1DD; margin-left:10px;"></i></a> 
        @endcan
    </div>
</header>