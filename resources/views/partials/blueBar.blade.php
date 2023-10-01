@php
    $iconsImg = [
        [
            'name' => 'digital comics',
            'imgName' => 'buy-comics-digital-comics.png',
        ],
        [
            'name' => 'dc merchandise',
            'imgName' => 'buy-comics-merchandise.png',
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


<div class="my-section-blue">
    @foreach ($iconsImg as $icon)
        <div class="my-icons-item">
            <div class="my-icon-container">
                <img alt="icon" src="{{ asset('images/' . $icon['imgName']) }}">
            </div>
            <div class="my-icon-desc"> {{ $icon['name'] }} </div>
        </div>
    @endforeach
</div>
