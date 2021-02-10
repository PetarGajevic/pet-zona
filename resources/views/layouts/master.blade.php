<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Pet Zoona</title>


    <link
        href="https://fonts.googleapis.com/css2?family=Fira+Sans:ital,wght@0,100;0,200;0,300;0,400;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="/css/welcome.css" rel="stylesheet">
    <link href="/css/header.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        crossorigin="anonymous" />
    <script src="https://code.jquery.com/jquery-3.5.1.slim.js"
       crossorigin="anonymous"></script>


    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- Popper JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <!-- Styles -->


</head>
@include('layouts.admin_header')
@include('layouts.header')
<div class="div-main">
    @yield('content')
</div>
<script type="text/javascript">
    function onClick() {
        document.getElementById("about-section").style.display = "block";
        document.getElementById("slideshow-container").style.display = "none";
        document.getElementById("dog-section").style.display = "none";
        //  document.getElementById("navigation-left").style.position = "fixed";
    }

    function onClickDog() {
        document.getElementById("slideshow-container").style.display = "none";
        document.getElementById("about-section").style.display = "none";
        document.getElementById("dog-section").style.display = "flex";
        //   document.getElementById("navigation-left").style.position = "fixed";

    }

</script>

</body>

</html>
