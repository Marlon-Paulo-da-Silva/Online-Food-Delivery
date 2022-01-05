<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>

    <!--  font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">

    <!--Css Custom -->
    <link rel="stylesheet" href="{{ secure_asset('/') }}FrontEndSourceFile/css/style.css">
</head>
  <body>
    <!-- Header -->
    @include('FrontEnd.include.header')

    @yield('content')

    <!-- footer section  -->
    @include('FrontEnd.include.footer')

    <!-- scroll top button  -->
    <a href="#home" class="fas fa-angle-up" id="scroll-top"></a>

    <!-- loader  -->
    <div class="loader-container">
        <img src="{{ secure_asset('/') }}FrontEndSourceFile/images/loader.gif" alt="">
    </div>
        


        <!-- custom js file link -->
        <script src="{{ secure_asset('/') }}FrontEndSourceFile/js/script.js"></script>
  </body>
</html>