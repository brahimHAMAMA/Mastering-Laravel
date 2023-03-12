<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Unknown Page')</title>
    <link rel="stylesheet" href="css/master.css">
</head>
<body>
    {{-- Start Navigation Bar --}}
    @include('layout.navbar')
    {{-- End Navigation Bar --}}

    @yield('content')

    {{-- Start SideBar --}}
    @include('layout.sidebar')
    {{-- End SideBar --}}

</body>
</html>
