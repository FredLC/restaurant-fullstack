<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Restaurant App</title>
        <link rel="stylesheet" href="/css/app.css">
         <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
        <link href="https://fonts.googleapis.com/css?family=Rock+Salt&display=swap" rel="stylesheet">
    </head>
    <body>
        <section id="app-layout">
        @include('includes.side-menu')
        <div class="welcome-jumbotron">
          <h1>Try our new gourmet burgers!</h1>
          <p class="order-now"><a href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i> Order Now</a></p>
        </div>
      </section>
    @yield('content')
    </body>
</html>
