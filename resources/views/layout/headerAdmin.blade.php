<header class="header-admin">
    <div class="logo">
        <img src="{{ asset('images/logo_footer.png') }}" alt="logo"></img>
    </div>
    <div class="btn-admin">
        <a href="{{route('home')}}" class="btn-preview-site">Preview sito</a>
        <a href="" class="btn-logout-admin" title="Esci dal sito" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">Logout
        <i class="fa-sharp fa-solid fa-arrow-right-from-bracket" color="color:#0D1B2A"></i>
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            {{ csrf_field() }}
        </form>
    </div>
</header> 
