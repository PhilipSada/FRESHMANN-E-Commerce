<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>FRESHMANN</title>
        <meta name="description" content="E-commerce Website">
        {{-- <meta name="robots" content="follow,index,max-snippet:-1,max-video-preview:-1,max-image-preview:large"> --}}
        <meta name="image_src" content="https://freshmann.net/images/preview.png">
        <meta name="image_url" content="https://freshmann.net/images/preview.png">
        <meta property="og:locale" content="en_US">
        <meta property="og:type" content="website">
        <meta property="og:title" content="FRESHMANN">
        <meta property="og:image" content="https://freshmann.net/images/preview.png">            
        <meta property="og:image:type" content="image/png">        
        <meta property="og:image:width" content="1200">        
        <meta property="og:image:height" content="630">        
        <meta property="og:description" content="E-commerce Website">
        <meta property="og:url" content="https://freshmann.net/">
        <meta property="og:site_name" content="FRESHMANN">
        <meta name="twitter:card" content="summary_large_image">
        <meta name="twitter:title" content="FRESHMANN">
        <meta name="twitter:description" content="E-commerce Website">
           <!-- CSRF Token -->
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
           
        <!-- Styles -->
        <link rel="stylesheet" href="/css/app.css">
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
      
        
    </head>
    <body>
        {{-- @include('includes.navbar') --}}
        @yield('content')

        <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
        <script src="https://js.stripe.com/v3/"></script>
        <script src="/js/app.js"></script>  
    </body>
</html>
