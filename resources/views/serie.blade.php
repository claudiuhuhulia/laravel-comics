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
            <p>{{ $serie['description'] }}</p>
        </div>
        <div class="adv">
            <img src="{{ Vite::asset('resources/images/adv.jpg') }}" alt="">
        </div>

    </div>
    <div class="bgc">
        <div class="container info">
            <div class="talent">
                <h2>Talent</h2>
                <div class="single-info blue">
                    <h5>Art By:</h5>
                    <p>{{ $artists }}</p>
                </div>
                <div class="single-info last blue">
                    <h5>Written by:</h5>
                    <p>{{ $writers }}</p>

                </div>
            </div>
            <div class="specs">
                <h2>Specs</h2>
                <div class="single-info blue">
                    <h5>Series:</h5>
                    <p>{{ $serie['series'] }}</p>
                </div>
                <div class="single-info">
                    <h5>U.S. Price:</h5>
                    <p>{{ $serie['price'] }}</p>
                </div>
                <div class="single-info last">
                    <h5>On Sale Date</h5>
                    <p>{{ $serie['sale_date'] }}</p>
                </div>
            </div>

        </div>
    </div>
@endsection
