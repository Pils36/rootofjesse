<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<!-- Mirrored from themedesigner.in/demo/Helping-Hands/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Thu, 17 Jun 2021 11:41:21 GMT -->

<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!--Fonts-->
    <link href='https://fonts.googleapis.com/css?family=Karla:400,400italic,700italic,700' rel='stylesheet'
        type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Lora:400,400italic,700,700italic' rel='stylesheet'
        type='text/css'>

    <!--Bootstrap-->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css">
    <!--Font Awesome-->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!--Owl Carousel-->
    <link rel="stylesheet" href="vendors/owl.carousel/owl.carousel.css">
    <!--Magnific Popup-->
    <link rel="stylesheet" href="vendors/magnific-popup/magnific-popup.css">

    <!--Theme Styles-->
    <link rel="stylesheet" href="css/style.min.css">
    <link rel="stylesheet" href="css/theme.min.css">
    <link rel="alternate stylesheet" title="yellow-theme" href="css/yellow-theme.min.css">
    <link rel="alternate stylesheet" title="blue-theme" href="css/blue-theme.min.css">
    <link rel="alternate stylesheet" title="red-theme" href="css/red-theme.min.css">
    <link rel="alternate stylesheet" title="purple-theme" href="css/purple-theme.min.css">
    <link rel="alternate stylesheet" title="orange-theme" href="css/orange-theme.min.css">

    <!--[if lt IE 9]>
        <link rel="stylesheet" href="vendors/rs-plugin/css/settings-ie8.css">
        <script src="js/html5shiv.min.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body>