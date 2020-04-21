<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/jquery-ui.css') }}">
    <link rel="stylesheet" href="{{ asset('css/slick.css') }}">
{{--    <link rel="stylesheet" href="{{ asset('css/slick-theme.css') }}">--}}
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    @include('header_and_footer.header')

    @include('filter')

    @include('news.news')

    @include('about-company')

    @include('header_and_footer.footer')

    @include('popup-feedback')

    <script src="{{ asset('js/jquery.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/slick.min.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</body>
</html>
