@extends('coming-soon.base')
@section('title') Coming Soon @endsection
@section('main-content')
<main class="main-content">
    <div class="container shrinked">
        <h1 class="section-title center-aligned">We are preparing something new. <br> <span>Stay tuned!</span></h1>

        <div class="counter-wrap" data-date-target="Dec 31, 2023 10:00:00">
            <div class="counter days">
                <div class="number">00</div>
                <div class="caption">Days</div>
            </div> <!-- .counter -->
            <div class="counter hours">
                <div class="number">00</div>
                <div class="caption">Hours</div>
            </div> <!-- .counter -->
            <div class="counter minutes">
                <div class="number">00</div>
                <div class="caption">Minutes</div>
            </div> <!-- .counter -->
            <div class="counter seconds">
                <div class="number">00</div>
                <div class="caption">Seconds</div>
            </div> <!-- .counter -->
        </div> <!-- .counter-wrap -->

    </div>	<!-- .container -->
</main>
@endsection

@section('footer')
<form action="#" class="subscribe-form">
    <input type="text" placeholder="Enter your email to join our newsletter">
    <i class="fa fa-envelope"></i>
    <input type="submit" value="Subscribe!">
</form>
@endsection
