 @extends('layouts.main')


 @section('main-content')
     <main>

         <!-- content section -->
         <section class="series">
             <div class="series-title">
                 CURRENT SERIES
             </div>
             <div class="container">
                 <div class="card-container">
                     @foreach ($series as $serie)
                         <div class="card">
                             <figure>
                                 <img src="{{ $serie['thumb'] }}" alt="serie">
                             </figure>
                             <h3> {{ $serie['series'] }} </h3>
                         </div>
                     @endforeach

                 </div>

             </div>
             <div class="load-btn">LOAD MORE</div>
         </section>

     </main>
 @endsection
