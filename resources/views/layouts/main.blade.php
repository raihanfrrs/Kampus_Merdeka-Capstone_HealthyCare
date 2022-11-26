<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/bootstrap-5.2.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/sweetalert2/css/sweetalert2.min.css">
    <script type="text/javascript" src="{{ asset('/') }}assets/vendor/sweetalert2/js/sweetalert2.min.js"></script>

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/card.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/navbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/form.css">
</head>
<body>

    @auth
        @if (isset(auth()->user()->level))
            @if (auth()->user()->level === 'administrator')
                @include('partials.administrator.navbar')

                @include('partials.administrator.sidebar')
            @elseif (auth()->user()->level === 'patient')
                @include('partials.patient.navbar')
            @endif
        @endif
    @else
        @include('partials.patient.navbar')
    @endauth

    <main>
        <section>
            @include('partials.flash')
            <div class="row">
                @yield('section')
            </div>
        </section>
    </main>

    @auth
        @if (isset(auth()->user()->level))
            @if (auth()->user()->level === 'administrator')
                @include('partials.administrator.footer')
            @elseif (auth()->user()->level === 'patient')
                @include('partials.patient.footer')
            @endif
        @endif
    @else
        @include('partials.patient.footer')
    @endauth

    <!-- Vendor JS Files -->
    <script type="text/javascript" src="{{ asset('/') }}assets/vendor/bootstrap-5.2.2/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/vendor/fontawesome-free-6.2.0/js/fontawesome.min.js"></script>

    <!-- Template Main JS File -->
    <script type="text/javascript" src="{{ asset('/') }}assets/js/script.js"></script>
</body>
</html>