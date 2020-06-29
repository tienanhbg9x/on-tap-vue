<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token()}}">
        <title>Laravel</title>
        <script>window.Laravel = { csrfToken: '{{csrf_token()}}'}</script>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
        <!-- Latest compiled and minified CSS & JS -->
        <link rel="stylesheet" media="screen"
              href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <!-- Styles -->
    </head>
    <body>
        <div id="app">
{{--            <my-component></my-component>--}}
{{--            <conditional-rendering></conditional-rendering>--}}
                <user-dashboard></user-dashboard>
                <life-cycle></life-cycle>
        </div>



        <script src="{{asset('js/app.js')}}"></script>
    </body>
</html>
