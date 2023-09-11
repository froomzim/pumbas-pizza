@extends('coming-soon.base')

@section('title', 'Contact')

@section('main-content')
    <main class="main-content">
        <div class="container shrinked">
            <h1 class="section-title">Have Questions? <span>Contact Us!</span></h1>

            <div id="form-messages"></div>
            <section class="entry-content">
                <p>
                    Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium,
                    totam rem aperiam, eaque ipsa quae ab illo inventore veritatis et quasi architecto beatae vitae
                    dicta sunt explicabo.
                </p>
            </section>
            <section class="row contact-section">

                <form id="contact-form" action="#" method="POST" class="contact-form">
                    @csrf
                    <div class="col-sm-6">
                        <div class="control">
                            <input id="name" type="text" name="name" placeholder="Enter Your Name" required>
                            <i class="fa fa-user"></i>
                        </div>
                        <div class="control">
                            <input id="email" type="email" name="email" placeholder="Enter Your Email" required>
                            <i class="fa fa-envelope"></i>
                        </div>
                        <div class="control">
                            <input id="website" type="url" name="website" placeholder="Enter Your Website">
                            <i class="fa fa-link"></i>
                        </div>
                    </div>
                    <div class="col-sm-6">
                        <div class="control">
                            <textarea id="message" name="message" placeholder="Enter Your Message" required></textarea>
                            <i class="fa fa-pencil"></i>
                        </div>
                        <div class="right-aligned">
                            <input type="submit" value="Send Message">
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </main>
@endsection

@section('additional-scripts')
    <script>
        $(document).ready(function() {
            $('#contact-form').on('submit', function(e) {
                e.preventDefault();

                $('#form-messages').html('');

                var name = $('#name').val();
                var email = $('#email').val();
                var website = $('#website').val();
                var message = $('#message').val();

                if (name === '' || email === '' || message === '') {
                    $('#form-messages').html(
                        '<div class="alert alert-danger"> All fields are required. </div>');
                    return;
                }

                $.ajax({
                    url: '{{ route('contact.store') }}',
                    method: 'POST',
                    data: {
                        name: name,
                        email: email,
                        website: website,
                        message: message,
                        _token: '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        Swal.fire({
                            title: 'Success!',
                            text: 'Your message has been sent.',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });
                        $('#contact-form')[0].reset();
                    },
                    error: function(xhr) {
                        Swal.fire({
                            title: 'Error!',
                            text: 'Something went wrong.',
                            icon: 'error',
                            confirmButtonText: 'OK'
                        });

                    }
                });
            });
        });
    </script>
@endsection
