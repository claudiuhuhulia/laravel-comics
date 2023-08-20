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


    <!-- footer  -->
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
                        <li><a href="#"> Shop DC </a></li>
                        <li><a href="#"> Shop DC Collectibles </a></li>
                    </ul>
                </div>

                <div class="dcnav">
                    <h1>DC</h1>
                    <ul>
                        <li><a href="#"> Term Of Use </a></li>
                        <li><a href="#"> Privacy policy(New) </a></li>
                        <li><a href="#"> Ad Choises </a></li>
                        <li><a href="#"> Advertising </a></li>
                        <li><a href="#"> Jobs </a></li>
                        <li><a href="#"> Talent Workshop </a></li>
                        <li><a href="#"> CPSC Certificates </a></li>
                        <li><a href="#"> Ratings </a></li>
                        <li><a href="#"> Shop Help </a></li>
                        <li><a href="#"> Contact Us </a></li>

                    </ul>
                </div>
                <div class="shopnav">
                    <h1>SITES</h1>
                    <ul>
                        <li><a href="#"> DC </a></li>
                        <li><a href="#"> MAD Magazine </a></li>
                        <li><a href="#"> DC Kids </a></li>
                        <li><a href="#"> DC Universe </a></li>
                        <li><a href="#"> DC Power Visa </a></li>

                    </ul>
                </div>
            </nav>

            <div class="bgc-right"></div>
        </section>
        <div class="footer-user">
            <div class="footer-flex container">
                <div class="signup-btn">
                    <h3>SIGN UP NOW!</h3>
                </div>
                <div class="followus">
                    <h3> FOLLOW US </h3>
                    <img src="{{ Vite::asset('resources/images/footer-facebook.png') }}" alt="fb">
                    <img src="{{ Vite::asset('resources/images/footer-periscope.png') }}" alt="pr">
                    <img src="{{ Vite::asset('resources/images/footer-pinterest.png') }}" alt="pi">
                    <img src="{{ Vite::asset('resources/images/footer-twitter.png') }}" alt="tw">
                    <img src="{{ Vite::asset('resources/images/footer-youtube.png') }}" alt="yt">

                </div>
            </div>
        </div>
    </footer>
</body>

</html>
