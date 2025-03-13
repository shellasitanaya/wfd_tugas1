@extends('layout')

@section('style')
    <style>
        #about-us {
            background-image: url("{{ asset('img/bg (3).png') }}");
            background-size: cover;
            margin-top: 80px;

        }

        .title-about {
            font-family: 'Winkle', sans-serif;
            color: var(--blue);

        }

        .text-about {
            font-family: 'Handy', sans-serif;
            color: var(--black);

        }
    </style>
@endsection

@section('content')
    @include('components.navbar')

    <section id="about-us" class="flex flex-col md:flex-row items-center min-h-screen">
        <!-- Left Side: Text Content -->
        <div class="w-full md:w-1/2 p-8 md:p-16 text-center md:text-left">
            <h2 class="title-about text-6xl font-bold flex justify-center">About Us!</h2>
            <p class="text-about mt-4 text-xl flex justify-center text-center leading-relaxed max-w-2xl mx-auto">
                Welcome to our bakery, where every treat is made with love and the finest ingredients.  
                From freshly baked pastries to indulgent cakes, we bring joy to every bite.  
                We’re here to make your day a little more delicious!
            </p>
        </div>

        <!-- Right Side: Full Half-Screen Image -->
        <div class="w-full md:w-1/2 h-80 md:h-screen">
            <img src="{{ asset('img/bg-about.png') }}" alt="About Us Image" class="w-full h-full object-cover">
        </div>
    </section>

    @include('components.footer')


@endsection
