<!DOCTYPE html>
<html lang="en">
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
    <link rel="stylesheet" href="{{ asset('ext/assets/css/style-email.css') }}">
    <style>
        .disp-0{
            display: none !important;
        }
    </style>
</head>
<body>
        <div class="nk-content-wrap">
            <div class="content-page wide-md m-auto">
                
                <div class="nk-block">
                    <div class="card card-bordered">
                        <div class="card-inner">
                            <h4 class="title text-soft mb-4 overline-title">The Root Of Jesse PHC - The chosen genereations</h4>
                            <table class="email-wraper">
                                <tr>
                                    <td class="py-5">
                                        <table class="email-header">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center pb-4">
                                                        <a href="#">
                                                            
                                                            <img class="email-logo" src="https://res.cloudinary.com/pilstech/image/upload/v1624067471/Rccg_logo_c2s2wg.png" alt="logo" style="width: 30px;">
                                                            <img class="email-logo" src="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" alt="logo" style="width: 30px;">
                                                        </a>
                                                        <p class="email-title">The Root Of Jesse PHC.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="email-body">
                                            <tbody>
                                                <tr>
                                                    <td class="p-3 p-sm-5">
                                                        {!! $maildata->message !!}
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <table class="email-footer">
                                            <tbody>
                                                <tr>
                                                    <td class="text-center pt-4">
                                                        <p class="email-copyright-text">Copyright © {{ date('Y') }} The Root of Jesse. All rights reserved.</p>
                                                        <ul class="email-social">
                                                            <li><a href="#"><img src="{{ asset('ext/images/socials/facebook.png') }}" alt=""></a></li>
                                                            <li><a href="#"><img src="{{ asset('ext/images/socials/twitter.png') }}" alt=""></a></li>
                                                            <li><a href="#"><img src="{{ asset('ext/images/socials/youtube.png') }}" alt=""></a></li>
                                                            
                                                        </ul>
                                                        <p class="fs-12px pt-4">This email was sent to you as a registered member of <a href="{{ route('home') }}">The Root of Jesse PHC</a>.</p>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                </div><!-- .nk-block -->
            </div><!-- .content-page -->
        </div>
</body>
</html>