@extends('layout.master')
@section('title', 'Home')

@push('style')
    <link rel="stylesheet" href="{{ asset('libs/swiper/swiper.css') }}">
@endpush

@section('content')

    @if ($banners)
        <section class="bannerMain">
            <div class="swiper SwiperBanner">
                <div class="swiper-wrapper">
                    @foreach ($banners as $banner)
                        @if ($banner->link)
                            <a href="{{ $banner->link }}" class="swiper-slide"
                                {{ $banner->abrir_nova_janela == 1 ? 'target=_blank' : '' }}>
                                <picture>
                                    @if ($banner->image)
                                        <source media="(min-width:600px)" srcset="{{ asset('storage/' . $banner->image) }}">
                                    @endif
                                    @if ($banner->image_mobile)
                                        <img src="{{ asset('storage/' . $banner->image_mobile) }}"
                                            alt="{{ $banner->title }}">
                                    @else
                                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}">
                                    @endif

                                </picture>
                            </a>
                        @else
                            <div class="swiper-slide">
                                <picture>
                                    @if ($banner->image)
                                        <source media="(min-width:600px)" srcset="{{ asset('storage/' . $banner->image) }}">
                                    @endif
                                    @if ($banner->image_mobile)
                                        <img src="{{ asset('storage/' . $banner->image_mobile) }}"
                                            alt="{{ $banner->title }}">
                                    @else
                                        <img src="{{ asset('storage/' . $banner->image) }}" alt="{{ $banner->title }}">
                                    @endif
                                </picture>
                            </div>
                        @endif
                    @endforeach
                </div>
                <div class="swiper-pagination"></div>
            </div><!-- swiper -->
        </section><!-- bannerMain -->
    @endif

    <section class="home">
        asdasd
    </section>
@endsection

@push('script')
    <script src="{{ asset('libs/swiper/swiper.js') }}"></script>

    <script>
        // BANNER
        var swiperBanner = new Swiper(".SwiperBanner", {
            slidesPerView: 1,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            loop: true,
            autoplay: {
                delay: 5000,
            },
        });
    </script>
@endpush
