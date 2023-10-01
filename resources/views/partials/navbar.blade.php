@php
    $navLinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<div class="upper-bar">
        <span>DC POWER&#8480; VISA&reg;</span>
        <span>ADDICTIONAL DC SITES &#9660;</span>
</div>
<header>
    <div class="logo-container">
        <img class="img-logo" alt="dc logo" src="{{ asset('images/dc-logo.png') }}">
    </div>
    <ul class="nav-link">
        @foreach ($navLinks as $link)
            @if ($link === 'comics')
                <li class="link-list-item active-link">
                    <a class="link" href="#"> {{ $link }} </a>
                </li>
            @elseif ($loop->last)
                <li class="link-list-item">
                    <a class="link" href="#"> {{ $link }} </a>
                    <span class="caret-down">&#9660;</span>
                </li>
            @else
                <li class="link-list-item">
                    <a class="link" href="#"> {{ $link }} </a>
                </li>
            @endif
        @endforeach

    </ul>
    <div class="input-group">
        <input type="search" id="site-search" name="q" / placeholder="Search">
        <button><i class="fa-solid fa-magnifying-glass fa-lg"></i></button>
    </div>
</header>
<div class="jumbotron"></div>