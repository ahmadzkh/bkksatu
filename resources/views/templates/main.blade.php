<!doctype html>
<html lang="en">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

        <!-- BOXICON -->
        <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>

        <!-- Font Google -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Display:wght@400;500;600;700;800;900&display=swap"
            rel="stylesheet">

        <!-- css -->
        <link rel="stylesheet" href="{{asset ('/assets/css/landingpage.css')}}">
        <link rel="stylesheet" href="{{asset ('/assets/css/style.css')}}">

        <!-- owl carousel -->
        <link rel="stylesheet" href="{{asset ('/assets/owlcarousel/dist/assets/owl.carousel.min.css')}}">
        <link rel="stylesheet" href="{{asset ('/assets/owlcarousel/dist/assets/owl.theme.default.min.css')}}">

        <link rel="shortcut icon" href="{{asset ('/assets/img/bkk-icon.png')}}" type="image/x-icon">

        <title>@yield('title')</title>

        @yield('css')
    </head>
    <body>

        @yield('container')

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        @yield('script')
    </body>

    </html>
