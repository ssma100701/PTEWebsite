<!DOCTYPE html>
<html lang="en">
<head>
    @include('layouts.header')

</head>
<body>
        @include('layouts.navbar')

    <main class="container" role="main">
        @yield('content')
    </main>
    @include('layouts.footer-scripts')
    @include('layouts.footer')
</body>
</html>
