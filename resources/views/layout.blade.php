<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title') | {{ $site_name }}</title>

    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">

    <!-- Fonts -->
    <link href='https://fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>

</head>
<body>

<header>
</header>
<main>
</main>
<footer>
    <div class="container">
        <div class="smallprint u-m">
            <span>Copyright &copy; {{ date('Y') }} {{ $site_name }}. All rights reserved.</span>
        </div>
    </div>
</footer>

@if (config('app.env') == 'production' && config('site.ua'))
@include('partials.google_analytics')
@endif

</body>
</html>
