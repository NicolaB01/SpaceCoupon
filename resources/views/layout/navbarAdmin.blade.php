<div class="navbar-home-admin">
    <div class="links-btn-admin">
        @if(session()->get('pagina') == 'aziende')
            <a href="{{route('admin.aziende')}}" class="active" >Aziende</a>
            <a href="{{route('admin.staff')}}" class="">Staff</a>
            <a href="{{route('admin.utenti')}}" class="">Utenti</a>
            <a href="{{route('admin.stats')}}" class="">Statistiche</a>
            <a href="{{route('admin.faq')}}" class="">FAQ</a>
        @elseif(session()->get('pagina') == 'staff')
            <a href="{{route('admin.aziende')}}" class="" >Aziende</a>
            <a href="{{route('admin.staff')}}" class="active">Staff</a>
            <a href="{{route('admin.utenti')}}" class="">Utenti</a>
            <a href="{{route('admin.stats')}}" class="">Statistiche</a>
            <a href="{{route('admin.faq')}}" class="">FAQ</a>
        @elseif(session()->get('pagina') == 'utenti')
            <a href="{{route('admin.aziende')}}" class="" >Aziende</a>
            <a href="{{route('admin.staff')}}" class="">Staff</a>
            <a href="{{route('admin.utenti')}}" class="active">Utenti</a>
            <a href="{{route('admin.stats')}}" class="">Statistiche</a>
            <a href="{{route('admin.faq')}}" class="">FAQ</a>
        @elseif(session()->get('pagina') == 'statistiche')
            <a href="{{route('admin.aziende')}}" class="" >Aziende</a>
            <a href="{{route('admin.staff')}}" class="">Staff</a>
            <a href="{{route('admin.utenti')}}" class="">Utenti</a>
            <a href="{{route('admin.stats')}}" class="active">Statistiche</a>
            <a href="{{route('admin.faq')}}" class="">FAQ</a>
        @elseif(session()->get('pagina') == 'faq')
            <a href="{{route('admin.aziende')}}" class="" >Aziende</a>
            <a href="{{route('admin.staff')}}" class="">Staff</a>
            <a href="{{route('admin.utenti')}}" class="">Utenti</a>
            <a href="{{route('admin.stats')}}" class="">Statistiche</a>
            <a href="{{route('admin.faq')}}" class="active">FAQ</a>
        @endif
    </div>
</div>