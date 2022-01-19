<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    @include('layouts.super-admin.header-links')
    @yield('header-extra-links')
</head>
<body>
    <div class="page-wrapper">
            @include('layouts.super-admin.sidebar')
        <div class="page">
            @include('layouts.super-admin.topbar')
            <div class="page-content container-fluid">
                @yield('content')
            </div>
        </div>
    </div>
    @include('layouts.super-admin.footer-links')
    @yield('footer-extra-links')
</body>
</html>