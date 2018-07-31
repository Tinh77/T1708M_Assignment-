<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="Pig Seller" href="{{{ asset('favicon.ico') }}}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css"
          integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
    <script src="{{asset('js/app.js')}}"></script>

    <title></title>
</head>
<body>
<nav class="navbar navbar-light bg-light">
    <div class="col-md-3">
        <a href="" class="navbar-brand float-left"></a>
        <div class="text-muted mt-4">Trang web bán sản phẩm</div>
    </div>
    <div class="col-md-7 form-group">
        <form class="form-inline">
            <input class="form-control mr-sm-2 w-75" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
    </div>
    <div class="col-md-2">
        <a href="" class="float-left mr-2"><i class="fab fa-adn fa-2x"></i></a>
        <div class="mt-1">
            tinhgiang9898
            (<a href="#">Logout</a>)
        </div>

    </div>
</nav>
<div class="container-fluid row mt-3">
    <div class="col-md-3">
        <div class="nav flex-column nav-pills" role="tablist">
            <a class="nav-link active" href="/admin" role="tab"><i class="fas fa-home mr-2"></i>Home</a>
            <a class="nav-link" href="/admin/category/"><i class="fas fa-piggy-bank mr-2"></i>List Category</a>
            <a class="nav-link" href="/admin/product/"><i class="fas fa-clipboard-list mr-2"></i>List Product</a>
        </div>
    </div>
    <div class="col-md-9">
        @section('main-content')
        @show
    </div>
</div>
<footer class="container-fluid mt-3 mb-3">
    <p class="text-center">Aptech FPT T1708M</p>
</footer>
</body>
</html>