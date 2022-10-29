<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Our Sunday service is designed to speak to you, right where you are. With a friendly atmosphere, contemporary worship, live WORD and multimedia we seek to express relevant and meaningful truth to all who attend.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Login | The Root of Jesse</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('ext/assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('ext/assets/css/theme.css?ver=2.4.0') }}">
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-xs">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" srcset="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" srcset="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                            <div class="card-inner card-inner-lg">
                                <div class="nk-block-head">
                                    <div class="nk-block-head-content">
                                        <h4 class="nk-block-title">Sign-In</h4>
                                        <div class="nk-block-des">
                                            <p>Access the Administrative panel using your email and password.</p>
                                        </div>
                                    </div>
                                </div>
                                <form action="{{ route('login') }}" method="POST">
                                    @csrf

                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="default-01">Email Address</label>
                                        </div>
                                        <input type="text" name="email" class="form-control form-control-lg" id="default-01" placeholder="Enter your email address Address">
                                    </div>
                                    <div class="form-group">
                                        <div class="form-label-group">
                                            <label class="form-label" for="password">Password</label>
                                            <a class="link link-primary link-sm" href="#">Forgot Code?</a>
                                        </div>
                                        <div class="form-control-wrap">
                                            <a href="#" class="form-icon form-icon-right passcode-switch" data-target="password">
                                                <em class="passcode-icon icon-show icon ni ni-eye"></em>
                                                <em class="passcode-icon icon-hide icon ni ni-eye-off"></em>
                                            </a>
                                            <input type="password" name="password" class="form-control form-control-lg" id="password" placeholder="Enter your passcode">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button class="btn btn-lg btn-primary btn-block">Sign in</button>
                                    </div>
                                </form>

                            </div>
                        </div>
                    </div>

                </div>
                <!-- wrap @e -->
            </div>
            <!-- content @e -->
        </div>
        <!-- main @e -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->

    <script src="{{ asset('ext/assets/js/bundle.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('ext/assets/js/scripts.js?ver=2.4.0') }}"></script>

    @include('includes.message')
</html>
