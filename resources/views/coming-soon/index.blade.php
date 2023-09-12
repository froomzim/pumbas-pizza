@extends('coming-soon.base')

@section('title', 'Coming Soon')

@section('main-content')
    <main class="main-content">
        <div class="container shrinked">
            <h1 class="section-title center-aligned">
                We're Preparing Something New. <br> <span>Stay Tuned!</span>
            </h1>

            <div class="counter-wrap hidden" data-date-target="Dec 31, 2023 10:00:00">
                <article class="counter days">
                    <div class="number">00</div>
                    <div class="caption">Days</div>
                </article> <!-- end .counter -->

                <article class="counter hours">
                    <div class="number">00</div>
                    <div class="caption">Hours</div>
                </article> <!-- end .counter -->

                <article class="counter minutes">
                    <div class="number">00</div>
                    <div class="caption">Minutes</div>
                </article> <!-- end .counter -->

                <article class="counter seconds">
                    <div class="number">00</div>
                    <div class="caption">Seconds</div>
                </article> <!-- end .counter -->
            </div> <!-- end .counter-wrap -->
        </div> <!-- end .container -->
    </main>
@endsection

@section('footer')
    <form action="{{ route('newsletter.store') }}" id="newsletter" method="POST" class="subscribe-form">
        @csrf
        <input type="email" name="email" placeholder="Enter Your Best Email" required>
        <i class="fa fa-envelope"></i>
        <input type="submit" value="Subscribe!">
    </form>
@endsection

@section('additional-scripts')
<script>
    $(document).ready(function() {
        $('#newsletter').submit(function(e) {
            e.preventDefault();
            var form = $(this);
            var url = form.attr('action');
            var method = form.attr('method');
            var data = form.serialize();
            $.ajax({
                url: url,
                method: method,
                data: data,
                success: function(response) {
                    Swal.fire({
                        icon: 'success',
                        title: 'Thank you!',
                        text: 'You have successfully subscribed to our newsletter.'
                        showConfirmButton: false,
                        timer: 2500
                    });
                    form.trigger('reset');
                },
                error: function(response) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Oops...',
                        text: response.responseJSON.message,
                    });
                }
            });
        });
    });

</script>
@endsection
