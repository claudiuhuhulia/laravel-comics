<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Comics</title>
    <link rel="icon" href="{{ Vite::asset('resources/images/favicon.ico') }}" type="image/png">

    {{-- importo gli assets --}}
    @vite('resources/js/app.js')
</head>

<body>
    <!-- header -->
    <header class="container">
        <figure>
            <img src="{{ Vite::asset('resources/images/dc-logo.png') }}" alt="logo">
        </figure>
        <nav>
            <ul>
                <li><a href="#"> Characters </a></li>
                <li><a href="#"> Comics </a></li>
                <li><a href="#"> Movies </a></li>
                <li><a href="#"> Tv </a></li>
                <li><a href="#"> Games </a></li>
                <li><a href="#"> Collectibles </a></li>
                <li><a href="#"> Videos </a></li>
                <li><a href="#"> Fans </a></li>
                <li><a href="#"> News </a></li>
                <li><a href="#"> Shop </a></li>
            </ul>
        </nav>
    </header>

    <!-- content section -->



    <footer class="bgc-footer">
        <!-- footer nav -->
        <section class="container footer-flex ">
            <nav>
                <div class="comicsnav">
                    <h1>DC COMICS</h1>
                    <ul>
                        <li><a href="#"> Characters </a></li>
                        <li><a href="#"> Comics </a></li>
                        <li><a href="#"> Movies </a></li>
                        <li><a href="#"> Tv </a></li>
                        <li><a href="#"> Games </a></li>
                        <li><a href="#"> Collectibles </a></li>
                        <li><a href="#"> Videos </a></li>
                        <li><a href="#"> Fans </a></li>
                        <li><a href="#"> News </a></li>
                        <li><a href="#"> Shop </a></li>

                    </ul>
                    <h1>SHOP</h1>
                    <ul>
                        {{--  <li v-for="item in shopItems">{{ item }}</li> --}}
                    </ul>
                </div>

                <div class="dcnav">
                    <h1>DC</h1>
                    <ul>
                        {{--  <li v-for="item in dcItems">{{ item }}</li> --}}
                    </ul>
                </div>
                <div class="shopnav">
                    <h1>SITES</h1>
                    <ul>
                        {{-- <li v-for="item in sitesItems">{{ item }}</li> --}}
                    </ul>
                </div>
            </nav>

            <div class="bgc-right"></div>
        </section>

    </footer>
</body>

</html>
