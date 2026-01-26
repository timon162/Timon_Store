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

    <link rel="stylesheet" href="{{ asset('css/admins/partials/header_admin_view.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/admins/partials/detail_title_headers/detail_title_women_fashion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/partials/detail_title_headers/detail_title_men_fashion.css') }}">
    <link rel="stylesheet"
        href="{{ asset('css/admins/partials/detail_title_headers/detail_title_album_fashion.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/partials/footer_admin_view.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/contents/home_content.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/contents/hot_product.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/contents/category_style.css') }}">
    <link rel="stylesheet" href="{{ asset('css/admins/admin_master_view.css') }}">
</head>

<body>
    <header class="header-admin-view d-flex align-items-center justify-content-center px-3">
        @include('admins.partials.header')
    </header>
    <div class="content-admin-view">
        @yield('main-content-admin-view')
    </div>
    <div class="line-center-content-footer d-flex w-100 justify-content-center align-items-center p-4 gap-3">
        <span></span>
        <h3>TIMON STORE</h3>
        <span></span>
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
