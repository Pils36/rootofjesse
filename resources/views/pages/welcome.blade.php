<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../../../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="A powerful and conceptual apps base dashboard template that especially build for developers and programmers.">
    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="./images/favicon.png">
    <!-- Page Title  -->
    <title>Welcome | The Root of Jesse</title>
    <!-- StyleSheets  -->
    <link rel="stylesheet" href="{{ asset('ext/assets/css/dashlite.css?ver=2.4.0') }}">
    <link id="skin-default" rel="stylesheet" href="{{ asset('ext/assets/css/theme.css?ver=2.4.0') }}">
    <style>
        .disp-0{
            display: none !important;
        }
    </style>
</head>

<body class="nk-body bg-white npc-general pg-auth">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap nk-wrap-nosidebar">
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="nk-block nk-block-middle nk-auth-body  wide-md">
                        <div class="brand-logo pb-4 text-center">
                            <a href="html/index.html" class="logo-link">
                                <img class="logo-light logo-img logo-img-lg" src="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" srcset="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" alt="logo">
                                <img class="logo-dark logo-img logo-img-lg" src="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" srcset="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" alt="logo-dark">
                            </a>
                        </div>
                        <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Kindly fill our membership form, we would contact you sonnest.</h5>
                    </div>
                    <form action="{{ route('create new members') }}" class="gy-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="sermon-title"><span class="text-danger font-weight-bold">*</span> Title</label>
                                    <span class="form-note">Please select your title</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="title" id="title" required class="form-control">
                                            <option value="">Select Title</option>
                                            <option value="Bro">Bro</option>
                                            <option value="Elder">Elder</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Pastor">Pastor</option>
                                            <option value="Sis">Sis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Full Name</label>
                                    <span class="form-note">Enter your fullname.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Samuel Mathew" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Email</label>
                                    <span class="form-note">Please provide a valid email address.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Telephone</label>
                                    <span class="form-note">Please provide phone number.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="telephone" name="telephone" class="form-control" id="telephone" placeholder="08012345678" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Address</label>
                                    <span class="form-note">Please provide your home address.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Opposite YKC Fueling Station, Woji PHC" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Date Of Birth</label>
                                    <span class="form-note">We'll like to know your birthday.</span>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="day" id="day" required class="form-control">
                                            <option value="">Select Day</option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="month" id="month" required class="form-control">
                                            <option value="">Select Month</option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}">{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Worshiping for first time?</label>
                                    <span class="form-note">Are you worshiping with us for the first time.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="worship_first_time" id="worship_first_time" required class="form-control">
                                            <option value="">Select Option</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Who Invited You</label>
                                    <span class="form-note">Provide who invited you to church.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="who_invited_you" class="form-control" id="who_invited_you" placeholder="Edidiong Gabriel">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Current Status</label>
                                    <span class="form-note">Select members current status</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="status" id="status" required class="form-control">
                                            <option value="">Select Status</option>
                                            <option value="Visitor">Visitor</option>
                                            <option value="Existing member">Existing member</option>
                                            <option value="First timer">First timer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Prayer Request</label>
                                    <span class="form-note">Please send your prayer request.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <textarea name="prayer_request" id="prayer_request" cols="30" rows="10" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--  <div class="row g-3 align-center specify_state disp-0">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Specify Status</label>
                                    <span class="form-note">Please specify their current status</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="specify_status" class="form-control" id="specify_status" placeholder="Passing by">
                                    </div>
                                </div>
                            </div>
                        </div>  --}}



                        <div class="row g-3 align-center disp-0">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="role"><span class="text-danger font-weight-bold">*</span> Assign Staff</label>
                                    <span class="form-note">Assign a staff for the purpose of follow up</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="assigned_staff" id="assigned_staff" required class="form-control">
                                            <option value="NULL" selected>Select Staff</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Submit and Save</button>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div><!-- card -->
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