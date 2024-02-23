<div class="sb-sidenav-menu-heading pb-2">Menu</div>
                           
<a class="nav-link collapsed @if (request()->route()->uri() == 'create_buku') active @endif" href="{{ url('/create_buku') }}">
<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
Input Buku Baru
</a>

<a class="nav-link collapsed @if (request()->route()->uri() == 'create_kg') active @endif" href="{{ url('/create_kg') }}">
<div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
Input Kategori Buku Baru
</a>


<a class="nav-link collapsed @if (request()->route()->uri() == 'index') active @endif" href="/index">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Lihat Buku
</a>

<a class="nav-link collapsed @if (request()->route()->uri() == 'kategori') active @endif" href="{{ url('/kategori') }}">
    <div class="sb-nav-link-icon"><i class="fas fa-book-open"></i></div>
    Lihat Data Kategori
</a>
</div>