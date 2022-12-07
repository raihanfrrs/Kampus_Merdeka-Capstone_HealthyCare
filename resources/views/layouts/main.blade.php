<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HealthyCare</title>

    <!-- Google Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>

    <!-- Vendor CSS Files -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/materialdesignicons/materialdesignicons.min.css" />
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/sweetalert2/css/sweetalert2.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/vendor/datatables/css/simple-datatables.min.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/bootstrap.min.custom.css">
    <script type="text/javascript" src="{{ asset('/') }}assets/vendor/sweetalert2/js/sweetalert2.min.js"></script>

    <!-- Template Main CSS File -->
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/style.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/card.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/navbar.css">
    <link rel="stylesheet" href="{{ asset('/') }}assets/css/news.css">
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

    @auth
        @if (isset(auth()->user()->level))
            @if (auth()->user()->level === 'administrator')
                <div id="layoutSidenav_content">
                    <main>
                        <div class="container-fluid px-4">
                            @include('partials.flash')
                            
                            @include('partials.administrator.title-wrapper')

                            @yield('admin-section')
                        </div>
                    </main>
            @elseif (auth()->user()->level === 'patient')
                <main>
                    <section>
                        @include('partials.flash')
                        <div class="row">
                            @yield('section')
                        </div>
                    </section>
                </main>
            @endif
        @endif
    @else
        <main>
            <section>
                @include('partials.flash')
                <div class="row">
                    @yield('section')
                </div>
            </section>
        </main>
    @endauth

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
    <script type="text/javascript" src="{{ asset('/') }}assets/vendor/datatables/js/simple-datatables.min.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/vendor/fontawesome-free-6.2.0/js/fontawesome.min.js"></script>

    <!-- Template Main JS File -->
    <script type="text/javascript" src="{{ asset('/') }}assets/js/script.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/js/datatables-simple.js"></script>
    <script type="text/javascript" src="{{ asset('/') }}assets/js/pre-image.js"></script>
</body>
</html>