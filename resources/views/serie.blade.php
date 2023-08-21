@extends('layouts.main')

@section('main-content')
    <div class="section-header">

        <section class="container">

            <figure>
                <img src="{{ $serie['thumb'] }}" alt="serie">
            </figure>

        </section>
    </div>

    <div class="container serie-detail">
        <div class="text">
            <h1>{{ $serie['title'] }}</h1>
            <div class="price-btn">
                <div class="price">
                    <h4>U.S. Price: <p>{{ $serie['price'] }}</p>
                    </h4>
                    <h4>AVAILABLE</h4>
                </div>
                <div class="availability">
                    <p>Check availability </p>
                </div>
            </div>
        </div>
        <div class="adv"></div>


    </div>
@endsection
