@extends('layout')


@section('style')
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />

    <style>
        *,
        *::before,
        *::after {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            list-style-type: none;
            text-decoration: none;
        }



        html {
            font-size: 62.5%;
            scroll-behavior: smooth;

        }

        @media (min-width: 1440px) {
            html {
                zoom: 1.5;
            }
        }

        @media (min-width: 2560px) {
            html {
                zoom: 1.7;
            }
        }

        @media (min-width: 3860px) {
            html {
                zoom: 2.5;
            }
        }

        ::-webkit-scrollbar {
            width: 0.5rem;
        }

        ::-webkit-scrollbar-thumb {
            border-radius: 1rem;
            background: var(--blue);
            transition: all 0.5s ease-in-out;
        }

        ::-webkit-scrollbar-thumb:hover {
            background: #222224;
        }

        ::-webkit-scrollbar-track {
            background: #f9f9f9;
        }

        .container {
            max-width: 124rem;
            padding: 0 1rem;
            margin: 0 auto;
        }

        .text-center {
            text-align: center;
        }

        .section-heading {
            font-size: 3rem;
            color: var(--orange);
            padding: 2rem 0;
        }

        #tranding {
            padding: 4rem 0;
        }

        @media (max-width:1440px) {
            #tranding {
                padding: 7rem 0;
            }
        }

        #tranding .tranding-slider {
            height: 52rem;
            padding: 2rem 0;
            position: relative;
        }

        @media (max-width:500px) {
            #tranding .tranding-slider {
                height: 45rem;
            }
        }

        .tranding-slide {
            width: 37rem;
            height: 42rem;
            position: relative;
        }

        @media (max-width:500px) {
            .tranding-slide {
                width: 28rem !important;
                height: 36rem !important;
            }

            .tranding-slide .tranding-slide-img img {
                width: 28rem !important;
                height: 36rem !important;
            }
        }

        .tranding-slide .tranding-slide-img img {
            width: 37rem;
            height: 42rem;
            border-radius: 2rem;
            object-fit: cover;
        }

        .tranding-slide .tranding-slide-content {
            position: absolute;
            left: 0;
            top: 0;
            right: 0;
            bottom: 0;
        }

        .tranding-slide-content .food-price {
            position: absolute;
            top: 2rem;
            right: 2rem;
            color: var(--white);
        }

        .tranding-slide-content .tranding-slide-content-bottom {
            position: absolute;
            bottom: 2rem;
            left: 2rem;
            color: var(--white);
        }

        .food-rating {
            padding-top: 1rem;
            display: flex;
            gap: 1rem;
        }

        .rating ion-icon {
            color: var(--orange);
        }

        .swiper-slide-shadow-left,
        .swiper-slide-shadow-right {
            display: none;
        }

        .tranding-slider-control {
            position: relative;
            bottom: 2rem;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .tranding-slider-control .swiper-button-next {
            left: 58% !important;
            transform: translateX(-58%) !important;
        }

        @media (max-width:990px) {
            .tranding-slider-control .swiper-button-next {
                left: 70% !important;
                transform: translateX(-70%) !important;
            }
        }

        @media (max-width:450px) {
            .tranding-slider-control .swiper-button-next {
                left: 80% !important;
                transform: translateX(-80%) !important;
            }
        }

        @media (max-width:990px) {
            .tranding-slider-control .swiper-button-prev {
                left: 30% !important;
                transform: translateX(-30%) !important;
            }
        }

        @media (max-width:450px) {
            .tranding-slider-control .swiper-button-prev {
                left: 20% !important;
                transform: translateX(-20%) !important;
            }
        }

        .tranding-slider-control .slider-arrow {
            background: var(--white);
            width: 3.5rem;
            height: 3.5rem;
            border-radius: 50%;
            left: 42%;
            transform: translateX(-42%);
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .slider-arrow ion-icon {
            font-size: 2rem;
            color: #222224;
        }

        .tranding-slider-control .slider-arrow::after {
            content: '';
        }

        .tranding-slider-control .swiper-pagination {
            position: relative;
            width: 15rem;
            bottom: 1rem;
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet {
            filter: drop-shadow(0px 8px 24px rgba(18, 28, 53, 0.1));
        }

        .tranding-slider-control .swiper-pagination .swiper-pagination-bullet-active {
            background: var(--red);
        }

        .new-arrivals {
            font-family: 'Winkle', sans-serif;
            font-size: 50px;
            color: var(--red);
            text-transform: uppercase;
            position: relative;
            justify-content: center;
        }

        /* Curve the text */
        .new-arrivals::before {
            content: "New Arrivals";
            position: absolute;
            top: 20%;
            left: 50%;
            transform: translate(-50%, -50%) rotate(-5deg);
            /* Slight curve effect */
            opacity: 0.3;
            font-size: 50px;
            color: var(--blue);
        }

        /* landing */
        .landing {
            display: flex;
            align-items: center;
            justify-content: center;
            /* height: 100vh; */
            padding-top: 110px;
            background-color: var(--bg);
            background-image: url("{{ asset('img/bg (7).png') }}");
            background-size: cover;
            margin-top: 80px;
            margin-bottom: 25px;
        }

        /* Image Section */
        .image {
            flex: 1;
            display: flex;
            justify-content: center;
            /* margin-top: 25px; */
        }

        .image img {
            width: 100%;
            max-width: 500px;
            height: auto;
            border-radius: 8px;
            box-shadow: 5px 5px 15px rgba(0, 0, 0, 0.2);
        }

        /* Content Section */
        .content {
            flex: 1;
            max-width: 700px;
            /* padding: 0px 100px; */
        }

        .content h1 {
            font-size: 50px;
            color: #333;
            font-family: 'Winkle', sans-serif;
            line-height: 1.2;
            /* margin: 15px 0px; */
            max-width: 400px;


        }

        .content p {
            font-size: 20px;
            color: #666;
            font-family: 'Handy', sans-serif;
            line-height: 1.3;
            margin-bottom: 20px;
            max-width: 400px;
        }

        .shop-btn {
            display: inline-block;
            padding: 10px 45px;
            font-size: 20px;
            color: white;
            background: var(--blue);
            text-decoration: none;
            border-radius: 20px;
            font-family: 'Handy', sans-serif;

        }

        .shop-btn:hover {
            background: var(--red);
        }

        /* Responsive Design */
        @media (max-width: 1024px) {
            .landing {
                flex-direction: column;
                text-align: center;
                height: auto;
            }

            .image img {
                max-width: 400px;
            }

            .content {
                max-width: 90%;
                text-align: center;
            }
        }

        @media (max-width: 768px) {
            .landing {
                padding: 100px 0px;
            }

            .image img {
                max-width: 300px;
            }

            .content h1 {
                font-size: 40px;
            }

            .content p {
                font-size: 18px;
            }


        }
    </style>
@endsection

@section('content')
    @include('components.navbar')

    {{-- LANDING --}}
    <section class="landing">
        <div></div>
        <div class="image">
            <img src="{{ asset('img/crepes.png') }}" alt="Fashion Store">
        </div>
        <div class="content">
            <h1>Indulge in Sweet Perfection</h1>
            <p>From warm, buttery pastries to decadent cakes, every bite is crafted with love and the finest ingredients.  
                Treat yourself to a little sweetness today!</p>
            <a href="{{ route('catalogue') }}" class="shop-btn">Explore Our Menu</a>
        </div>
    </section>



    {{-- CARD  --}}
    <section id="tranding">
        <div class="container">
            <h3 class="new-arrivals text-center section-subheading leading-tight">New Arrivals</h3>
        </div>
        <div class="container">
            <div class="swiper tranding-slider">
                <div class="swiper-wrapper">
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/cake.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/cheese-cake.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                
                           
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/ice-cream.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                               
                               
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/tart.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/lemon.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                              
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/tiramisu.png') }}" alt="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                           
                            <div class="tranding-slide-content-bottom">
                              
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                    <!-- Slide-start -->
                    <div class="swiper-slide tranding-slide">
                        <div class="tranding-slide-img">
                            <img src="{{ asset('img/fruit.png') }}"="Tranding">
                        </div>
                        <div class="tranding-slide-content">
                            <div class="tranding-slide-content-bottom">
                                
                                
                            </div>
                        </div>
                    </div>
                    <!-- Slide-end -->
                </div>

                <div class="tranding-slider-control">
                    <div class="swiper-button-prev slider-arrow">
                        <ion-icon name="arrow-back-outline"></ion-icon>
                    </div>
                    <div class="swiper-button-next slider-arrow">
                        <ion-icon name="arrow-forward-outline"></ion-icon>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>

            </div>
        </div>
    </section>

    @include('components.footer')
@endsection

@section('script')
    <script>
        console.log("Swiper Initialized");
        var TrandingSlider = new Swiper('.tranding-slider', {
            effect: 'coverflow',
            grabCursor: true,
            centeredSlides: true,
            loop: true,
            slidesPerView: 'auto',
            coverflowEffect: {
                rotate: 0,
                stretch: 0,
                depth: 100,
                modifier: 2.5,
            },
            pagination: {
                el: '.swiper-pagination',
                clickable: true,
            },
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            }
        });
    </script>
@endsection
