<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Phone Village</title>
    {{ View::make('layout/style') }}
</head>

{{-- <body class="bg-light">
    <div class="container">
        {{ View::make('layout/header') }}
        @yield('content')
        {{View::make('layout/footer')}}
    </div>
    {{ View::make('layout/script') }}
</body> --}}



<body data-sidebar="dark" data-layout-mode="light" style="background-color: #F7ECDE">

    <!-- <body data-layout="horizontal" data-topbar="dark"> -->

    <!-- Begin page -->
    <div id="layout-wrapper">

        {{ View::make('layout/header') }}
        @yield('content')
        {{-- {{View::make('layout/footer')}} --}}






        {{ View::make('layout/script') }}
</body>

</html>
