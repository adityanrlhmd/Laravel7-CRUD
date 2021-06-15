<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    @include('include.home.style')
    <title>Healthy Paws</title>
</head>
@include('include.home.css')

<body>
    @include('include.home.header')

    <main>
        @yield('content')

        @include('include.home.footer')
    </main>


    @include('include.home.script')
</body>

</html>
