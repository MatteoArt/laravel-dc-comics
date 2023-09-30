@php
$icons = ["footer-facebook.png","footer-twitter.png","footer-youtube.png",
"footer-pinterest.png","footer-periscope.png"];
    $dcComicsLinks = [
                "Dc comics",
                "Characters",
                "Comics" ,
                "Movies",
                "TV",
                "Games",
                "Videos",
                "News",
];
            $shopLinks = [
                "Shop",
                "Shop DC",
                "Shop DC Collectibles",
];
            $dcLinks = [
                "Dc",
                "Terms Of Use",
                "Privacy policy (New)",
                "Ad Choices",
                "Advertising",
                "Jobs",
                "Subscriptions",
                "Talent Workshops",
                "CPSC Certificates",
                "Ratings",
                "Shop Help",
                "Contact Us",
];
            $sitesLinks = [
                "Sites",
                "DC",
                "MAD Magazine",
                "DC Kids",
                "DC Universe",
                "DC Power Visa",
];
@endphp

<footer>
    <div class="wrapper">
        <section>
            <div class="container-menu-footer">
                <div class="container-ul">
                    <ul class="list-footer">
                        @foreach ($dcComicsLinks as $dcLink)
                            <li> {{ $dcLink }} </li>
                        @endforeach
                    </ul>
                    <ul class="list-footer">
                        @foreach ($shopLinks as $link)
                            <li> {{ $link }} </li>
                        @endforeach
                    </ul>
                </div>
                <ul class="list-footer">
                    @foreach ($dcLinks as $dcLink)
                        <li> {{ $dcLink }} </li>
                    @endforeach
                </ul>
                <ul class="list-footer">
                    @foreach ($sitesLinks as $siteLink)
                    <li> {{ $siteLink }} </li>
                    @endforeach
                </ul>
                <p class="paragraph">
                    All Site Content TM and © 2020 DC Entertainment, unless otherwise
                    <span class="par">noted here.</span><br> All rights reserved.
                    <span class="par">Cookies Settings</span>
                </p>
            </div>
            <img class="bg-logo-img" alt="dc-logo" src="{{ asset('images/dc-logo-bg.png') }}">
        </section>
    </div>
    <div id="foot">
        <div class="foot-container">
            <span class="btn-foot">sign-up now!</span>
            <div class="icons">
                <div id="follow">follow us</div>
                <ul class="list-icon">
                    @foreach ($icons as $icon)
                       <li>
                          <img src="{{asset('images/'.$icon)}}" alt="icon" class="img-icon">
                       </li> 
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
    <div id="dark-gray-bar"></div>
</footer>