<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png">
    <!-- Page Title  -->
    <title>The Root of Jesse | Dashboard</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('ext/assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('ext/assets/css/theme.css?ver=2.4.0') }}">
    <style>
        .disp-0{
            display: none !important;
        }
    </style>
</head>

<body class="nk-body bg-white npc-subscription has-aside ">
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