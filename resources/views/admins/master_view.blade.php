<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link href='https://cdn.boxicons.com/3.0.7/fonts/basic/boxicons.min.css' rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <title>Document</title>

    <link rel="stylesheet" href="{{ asset('css/admins/partials/header-admin-view.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/admins/partials/detail_title_headers/detail_title_women_fashion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/partials/detail_title_headers/detail_title_men_fashion.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/admins/partials/detail_title_headers/detail_title_album_fashion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/contents/home_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/contents/hot_product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/admin-master-view.css') }}">
</head>

<body>
    <header class="header-admin-view d-flex align-items-center justify-content-center px-3">
        @include('admins.partials.header')
    </header>
    <div class="content-admin-view">
        @yield('main-content-admin-view')
    </div>
    <footer class="footer-admin-view">
        @include('admins.partials.footer')
    </footer>
</body>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous">
</script>

<script src="{{ asset('js/admins/contents/home_content.js') }}"></script>

</html>
