@extends('coming-soon.base')
@section('title') Contact @endsection
@section('main-content')
<main class="main-content">
    <div class="container shrinked">
        <h1 class="section-title">Have questions? <span>Contact us!</span></h1>

        <div class="entry-content">
            <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo.</p>
        </div>

        <div class="row contact-section">
            <form action="" class="contact-form">
                <div class="col-sm-6">
                    <div class="control">
                        <input type="text" placeholder="Name...">
                        <i class="fa fa-user"></i>
                    </div>
                    <div class="control">
                        <input type="text" placeholder="Email...">
                        <i class="fa fa-envelope"></i>
                    </div>
                    <div class="control">
                        <input type="text" placeholder="Website...">
                        <i class="fa fa-link"></i>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="control">
                        <textarea placeholder="Message..."></textarea>
                        <i class="fa fa-pencil"></i>
                    </div>

                    <div class="right-aligned">
                        <input type="submit" value="Send Message">
                    </div>
                </div>
            </form>
        </div>

    </div>	<!-- .container -->
</main> <!-- .main-content -->
@endsection

