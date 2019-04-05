<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="">
        <meta name="author" content="">
        <link rel="icon" href="{{ asset('assets/img/basic/favicon.ico') }}" type="image/x-icon">
        <title>MTN Executive Breakfast Meeting | @yield('page_title')</title>
        <!-- CSS -->
        <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    </head>
    {{--body start--}}
    <body class="light">
        <div id="app">
            @if (session('status'))
                <div class="alert alert-error">
                    {{ session('status') }}
                </div>
            @endif
            {{--Content start--}}
            @yield('content')
            {{--Content End--}}
        </div>
    </body>
    {{--body end--}}
</html>