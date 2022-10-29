<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Our Sunday service is designed to speak to you, right where you are. With a friendly atmosphere, contemporary worship,
live WORD and multimedia we seek to express relevant and meaningful truth to all who attend.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png">
    <!-- Page Title  -->
    <title>The Root of Jesse | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('ext/assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('ext/assets/css/theme.css?ver=2.4.0') }}">
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
    <style>
        .disp-0{
            display: none !important;
        }
    </style>
</head>

<body class="nk-body bg-white npc-subscription has-aside {{ (Auth::user()->mode == "dark") ? "dark-mode" : "" }}">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">

                @include('includes.admin.header')
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
