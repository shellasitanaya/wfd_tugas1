@extends('layout')

@section('style')
   <style>

        :root {
            --orange: #f4a64e;
            --black: #3e4242;
            --white: #ffffff;
            --bg: #fffcef;
            --blue: #7eacb5;
            --red: #c96868;
            --yellow: #fadfa1;
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-color: var(--bg);
            font-family: 'Winkle', sans-serif;
            color: var(--black);
        }

        .cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 32px;
            margin: 64px 5vw;
            padding: 0;
            list-style: none;
        }

        .card {
            background: var(--white);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            text-align: center;
            transition: transform 0.3s ease-in-out;
        }

        .card:hover {
            transform: translateY(-5px);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card__content {
            padding: 24px;
            font-family: 'Handy', cursive;
        }

        .card__title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 8px;
        }

        .card__price {
            font-size: 22px;
            font-weight: bold;
            color: var(--orange);
            margin-bottom: 16px;
        }

        .card__btn {
            display: inline-block;
            padding: 12px 24px;
            font-size: 18px;
            background-color: var(--blue);
            color: var(--white);
            border: none;
            border-radius: 20px;
            text-decoration: none;
            font-weight: bold;
            transition: background-color 0.3s;
        }

        .card__btn:hover {
            background-color: var(--red);
        }

        #catalogue{
            padding-top: 120px; 
        }

       
    </style>
@endsection

@section('content')
    @include('components.navbar')

        <section id="catalogue" class="p-8">
            <h2 class="text-5xl font-bold text-center mb-8 mt-3" style="color: var(--red);">Our Sweet Selections</h2>
            <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-6">
                <li style="background-color: var(--white);" class="rounded-lg shadow-lg overflow-hidden text-center transform transition duration-300 hover:-translate-y-2">
                    <img src="{{ asset('img/cakee.png') }}" alt="Product 1" class="w-full h-64 object-cover">
                    <div class="p-4 ">
                        <h3 class="card__title">Heavenly Strawberry Cake</h3>
                        <p class="card__price">Rp150,000</p>
                        <a href="#" class="card__btn">Add to Cart</a>
                    </div>
                </li>
                <li style="background-color: var(--white);" class="rounded-lg shadow-lg overflow-hidden text-center transform transition duration-300 hover:-translate-y-2">
                    <img src="{{ asset('img/pie.png') }}" alt="Product 2" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="card__title">Golden Caramel Pie</h3>
                        <p class="card__price">Rp200,000</p>
                        <a href="#" class="card__btn">Add to Cart</a>
                    </div>
                </li>
                <li style="background-color: var(--white);" class="rounded-lg shadow-lg overflow-hidden text-center transform transition duration-300 hover:-translate-y-2">
                    <img src="{{ asset('img/cakes.png') }}" alt="Product 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="card__title">Berry Bliss Cake</h3>
                        <p class="card__price">Rp450,000</p>
                        <a href="#" class="card__btn">Add to Cart</a>
                    </div>
                </li>

                <li style="background-color: var(--white);" class="rounded-lg shadow-lg overflow-hidden text-center transform transition duration-300 hover:-translate-y-2">
                    <img src="{{ asset('img/aesthetic.png') }}" alt="Product 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="card__title">Aesthetic Delight Cake</h3</h3>
                        <p class="card__price">Rp250,000</p>
                        <a href="#" class="card__btn">Add to Cart</a>
                    </div>
                </li>

                <li style="background-color: var(--white);" class="rounded-lg shadow-lg overflow-hidden text-center transform transition duration-300 hover:-translate-y-2">
                    <img src="{{ asset('img/macaroon.png') }}" alt="Product 3" class="w-full h-64 object-cover">
                    <div class="p-4">
                        <h3 class="card__title">Macaroon</h3>
                        <p class="card__price">Rp50,000</p>
                        <a href="#" class="card__btn">Add to Cart</a>
                    </div>
                </li>
            </ul>
        </section>

    @include('components.footer')
@endsection
