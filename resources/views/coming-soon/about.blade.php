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

            <div class="team-section row">
                <div class="team">
                    <img src="dummy/team-1.jpg" alt="Martin Lorenz" class="team-image">
                    <h2 class="team-name">Martin Lorenz</h2>
                </div>
                <div class="team">
                    <img src="dummy/team-2.jpg" alt="Tina Montgomery" class="team-image">
                    <h2 class="team-name">Tina Montgomery</h2>
                </div>
                <div class="team">
                    <img src="dummy/team-3.jpg" alt="Peter Wang" class="team-image">
                    <h2 class="team-name">Peter Wang</h2>
                </div>
                <div class="team">
                    <img src="dummy/team-4.jpg" alt="Sarah Stone" class="team-image">
                    <h2 class="team-name">Sarah Stone</h2>
                </div>
            </div>

        </div> <!-- .container -->
    </main> <!-- .main-content -->
@endsection

