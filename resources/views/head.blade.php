<!doctype html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Demo FB</title>

        <!-- Estilos -->
        <link rel="stylesheet" href="{{ mix('css/app.css') }}">
        <link rel="stylesheet" href="{{ mix('css/roboto.css') }}">
        <link rel="stylesheet" href="{{ asset('css/components/datatables-net/datatables.min.css') }}">


    </head>
    <body>
        <!--Scripts-->
        @yield('content')
        @include('footer')
        <script src="{{ mix('js/app.js') }}"></script>
        <script src="{{ asset('js/components/datatables-net/datatables.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset('js/components/validator/jquery.validate.js') }}"></script>
        <script>
        $('.datatable-table').DataTable();
        </script>
        @yield('custom_js')
    </body>
</html>
