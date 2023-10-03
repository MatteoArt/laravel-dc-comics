@php
    $iconsImg = [
        [
            'name' => 'digital comics',
            'imgName' => 'buy-comics-digital-comics.png',
        ],
        [
            'name' => 'subscription',
            'imgName' => 'buy-comics-subscriptions.png',
        ],
    
        [
            'name' => 'comic shop locator',
            'imgName' => 'buy-comics-shop-locator.png',
        ],
        [
            'name' => 'dc power visa',
            'imgName' => 'buy-dc-power-visa.svg',
        ],
    ];
@endphp


<div class="info-gray-div">
    <div class="comic-wrapper" style="padding: 30px;gap:20px">
        <div class="talent">
            <h2>Talent</h2>
            <div class="my-info">
                <span class="span-info" style="min-width: 80px;margin-right:10px">Art by:</span>
                <div style="color: #09A8DB">
                    {{ implode(', ', json_decode($comic->artists)) }}
                </div>
            </div>
            <div class="my-info">
                <span class="span-info" style="min-width: 80px;margin-right:10px">Written by:</span>
                <div style="color: #09A8DB">
                    {{ implode(', ', json_decode($comic->writers)) }}
                </div>
            </div>
        </div>
        <div class="specs">
            <h2>Specs</h2>
            <div class="my-info">
                <span class="span-info">Series: </span>
                <div style="text-transform: uppercase; color: #09A8DB"> {{ $comic->series }} </div>
            </div>
            <div class="my-info">
                <span class="span-info">U.S. Price: </span>
                <div> ${{ $comic->price }} </div>
            </div>
            <div class="my-info">
                <span class="span-info">On Sale Date: </span>
                <div> {{ $comic->sale_date }} </div>
            </div>
        </div>
    </div>
    <div class="div-wrapper-info">
        @foreach ($iconsImg as $img)
        <div class="my-icons-item">
            <div class="my-icon-container">
                <img alt="icon" src="{{ asset('images/' . $img['imgName']) }}">
            </div>
            <div class="my-icon-desc"> {{ $img['name'] }} </div>
        </div>
        @endforeach
    </div>
</div>
