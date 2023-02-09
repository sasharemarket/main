<!doctype html>
<html>

<head>
    @include('includes.head')
</head>

<body class="g-sidenav-show   bg-gray-100">
    <div class="min-height-300 bg-primary position-absolute w-100"></div>
    @include('includes.sidebar')

    <main class="main-content position-relative border-radius-lg ">
        @include('includes.header')
        @yield('content')
        @include('includes.footer')
        </div>
    </main>
    @include('includes.footer-script')
</body>

</html>
