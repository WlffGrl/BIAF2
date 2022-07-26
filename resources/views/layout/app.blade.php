<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>{{config('app.name', 'BIAFF')}}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">

    <!-- My CSS -->
    <link rel="stylesheet" href="style.css" />

    <style>
        body {
            font-family: 'Roboto';
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    @include('inc.nav')
    <!-- End Navbar -->


    <!-- Jumbotron -->
    <section id="jumbotron" class="jumbotron text-center text-light p-5 image0">
        <h1 class="display-4">BIAF2022</h1>
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis quis turpis sollicitudin
            malesuada. Donec vel ex eu tortor.</p>
    </section>
    <!-- End Jumbotron -->

    <!-- Content -->
    <section id="content">
        <div class="container p-5">
            @yield('content')
        </div>

    </section>
    <!-- End Content -->

    <!-- Footer -->
    <footer class="bg-primary md-4 p-5 text-light text-center">
        <img src="img/logo2020.png" class="rounded mx-auto d-block" alt="BIAF">
        <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed a felis quis turpis sollicitudin
            malesuada. Donec vel ex eu tortor.</p>
    </footer>
    <!-- End Footer -->
</body>

</html>