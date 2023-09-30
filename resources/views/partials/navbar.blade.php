@php
    $navLinks = ['characters', 'comics', 'movies', 'tv', 'games', 'collectibles', 'videos', 'fans', 'news', 'shop'];
@endphp

<div class="upper-bar">
        <span>DC POWER VISA</span>
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
</header>
<div class="jumbotron"></div>
<div id="current-series">
    <span class="btn-big">current series</span>
</div>