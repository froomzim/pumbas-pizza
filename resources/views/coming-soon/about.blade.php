@extends('coming-soon.base')
@section('title')
    About Us
@endsection
@section('main-content')
    <main class="main-content">
        <div class="container shrinked">
            <h1 class="section-title">Who we <span>really are?</span></h1>

            <div class="entry-content">
                <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam
                    rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt
                    explicabo.</p>

                <p>Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, sed quia consequuntur magni
                    dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia
                    dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi tempora incidunt.</p>
            </div>

            {{-- instagram carrousel --}}

            <div class="pizza-section row">
                <div class="pizza col-12">
                    <img src="images/pizza-1.jpg" alt="Martin Lorenz" class="pizza-image">
                    <h2 class="pizza-name">NDUJA</h2>
                </div>
                <div class="pizza col-12">
                    <img src="images/pizza-2.jpg" alt="Tina Montgomery" class="pizza-image">
                    <h2 class="pizza-name">MEATHEAD</h2>
                </div>
                <div class="pizza col-12">
                    <img src="images/pizza-3.jpg" alt="Peter Wang" class="pizza-image">
                    <h2 class="pizza-name">OG</h2>
                </div>
            </div>

        </div> <!-- .container -->
    </main> <!-- .main-content -->
@endsection

