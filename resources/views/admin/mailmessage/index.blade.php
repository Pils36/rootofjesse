<!DOCTYPE html>
<html lang="zxx" class="js">

<head>
    <base href="../">
    <meta charset="utf-8">
    <meta name="author" content="Softnio">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description"
        content="Our Sunday service is designed to speak to you, right where you are. With a friendly atmosphere, contemporary worship,
live WORD and multimedia we seek to express relevant and meaningful truth to all who attend.">

    <!-- Fav Icon  -->
    <link rel="shortcut icon" href="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png">
    <!-- Page Title  -->
    <title>Inbox(8) | Root Of Jesse Admin</title>
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

<body class="nk-body bg-white npc-default apps-only {{ (Auth::user()->mode == "dark") ? "dark-mode" : "" }}">
    <div class="nk-app-root">
        <!-- main @s -->
        <div class="nk-main ">
            <!-- wrap @s -->
            <div class="nk-wrap ">
                <div class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="{{ route('dasboard') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" srcset="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png 2x" alt="logo">
                                    <img class="logo-dark logo-img" src="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png" srcset="https://res.cloudinary.com/pilstech/image/upload/v1624069172/rootofjesse_pkyfwt.png 2x" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-menu">
                                <ul class="nk-menu nk-menu-main">
                                    <li class="nk-menu-item">
                                        <a href="{{ route('dasboard') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Dashboard</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{ route('uploaded sermons') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Messages & Sermon</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{ route('members list') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">All Members</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{ route('team member') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Manage Team</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{ route('messaging') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">In-App Messaging</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    <li class="nk-menu-item">
                                        <a href="{{ route('settings') }}" class="nk-menu-link">
                                            <span class="nk-menu-text">Account Setting</span>
                                        </a>
                                    </li><!-- .nk-menu-item -->
                                    
                                </ul><!-- .nk-menu -->
                            </div><!-- .nk-header-menu -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown notification-dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle nk-quick-nav-icon mr-lg-n1" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                {{--  <a href="javascript:void(0)">Mark All as Read</a>  --}}
                                            </div>
                                            <div class="dropdown-body">
                                                <div class="nk-notification">

                                                    @if (count($data['notification']) > 0)
                                                        @foreach ($data['notification'] as $notification)
                                                            <div class="nk-notification-item dropdown-inner">
                                                                    <div class="nk-notification-icon">
                                                                        <em class="icon icon-circle bg-success-dim ni ni-curve-down-left"></em>
                                                                    </div>
                                                                    <div class="nk-notification-content">
                                                                        <div class="nk-notification-text">{{ $notification->activities }}</div>
                                                                        <div class="nk-notification-time">{{ $notification->created_at->diffForHumans() }}</div>
                                                                    </div>
                                                                </div>
                                                        @endforeach
                                                    @else
                                                        <div class="nk-notification-item dropdown-inner">
                                                            <div class="nk-notification-icon">
                                                                <em class="icon icon-circle bg-warning-dim ni ni-curve-down-right"></em>
                                                            </div>
                                                            <div class="nk-notification-content">
                                                                <div class="nk-notification-text">No New Notification</span></div>
                                                                <div class="nk-notification-time">1 sec ago</div>
                                                            </div>
                                                        </div>
                                                    @endif
                                                    
                                                    
                                                </div><!-- .nk-notification -->
                                            </div><!-- .nk-dropdown-body -->
                                            <div class="dropdown-foot center disp-0">
                                                <a href="javascript:void(0)">View All</a>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="dropdown user-dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown">
                                            <div class="user-toggle">
                                                <div class="user-avatar sm">
                                                    <em class="icon ni ni-user-alt"></em>
                                                </div>
                                                <div class="user-name dropdown-indicator d-none d-sm-block">{{ Auth::user()->name }}</div>
                                            </div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-md dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-inner user-card-wrap bg-lighter d-none d-md-block">
                                                <div class="user-card">
                                                    <div class="user-avatar">
                                                        <span>{{ strtoupper(Str::substr(Auth::user()->name, 0, 2)) }}</span>
                                                    </div>
                                                    <div class="user-info">
                                                        <span class="lead-text">{{ Auth::user()->name }}</span>
                                                        <span class="sub-text">{{ Auth::user()->email }}</span>
                                                    </div>
                                                    <div class="user-action">
                                                        <a class="btn btn-icon mr-n2" href="{{ route('settings') }}"><em class="icon ni ni-setting"></em></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li><a href="{{ route('profile') }}"><em class="icon ni ni-user-alt"></em><span>View Profile</span></a></li>
                                                    <li><a href="{{ route('settings') }}"><em class="icon ni ni-setting-alt"></em><span>Account Setting</span></a></li>
                                                    <li><a href="{{ route('activity') }}"><em class="icon ni ni-activity-alt"></em><span>Login Activity</span></a></li>
                                                    <li>
                                                        <form action="{{ route('change theme') }}" method="post" class="disp-0" id="changeTheme">@csrf <input type="hidden" name="user_id" value="{{ Auth::user()->id }}"></form>
                                                        
                                                        <a class="dark-switch" href="javascript:void(0)" onclick="$('#changeTheme').submit()"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="dropdown-inner">
                                                <ul class="link-list">
                                                    <li>
                                                        <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><em class="icon ni ni-signout"></em><span>Sign out</span></a>
                                                    </li>

                                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                        @csrf
                                                    </form>
                                                </ul>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="d-lg-none">
                                        <a href="javascript:void(0)" class="toggle nk-quick-nav-icon mr-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                    </li>
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
                <!-- main header @e -->
                <!-- content @s -->
                <div class="nk-content ">
                    <div class="container wide-xl">
                        <div class="nk-content-inner">
                            <div class="nk-aside" data-content="sideNav" data-toggle-overlay="true" data-toggle-screen="lg" data-toggle-body="true">
                                <div class="nk-sidebar-menu" data-simplebar>
                                    <ul class="nk-menu nk-menu-main">
                                        <li class="nk-menu-item">
                                            <a href="{{ route('dasboard') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-dashboard"></em></span>
                                                <span class="nk-menu-text">Dashboard</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('uploaded sermons') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-file-text"></em></span>
                                                <span class="nk-menu-text">Messages & Sermons</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('members list') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-report-profit"></em></span>
                                                <span class="nk-menu-text">All Members</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('team member') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-users"></em></span>
                                                <span class="nk-menu-text">Manage Team</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('messaging') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-emails"></em></span>
                                                <span class="nk-menu-text">In-App Messaging</span>
                                            </a>
                                        </li>
                                        <li class="nk-menu-item">
                                            <a href="{{ route('settings') }}" class="nk-menu-link">
                                                <span class="nk-menu-icon"><em class="icon ni ni-account-setting"></em></span>
                                                <span class="nk-menu-text">Account Setting</span>
                                            </a>
                                        </li>
                                        
                                    </ul><!-- .nk-menu -->
                                </div><!-- .nk-sidebar-menu -->
                                <div class="nk-aside-close">
                                    <a href="javascript:void(0)" class="toggle" data-target="sideNav"><em class="icon ni ni-cross"></em></a>
                                </div><!-- .nk-aside-close -->
                            </div><!-- .nk-aside -->
                            <div class="nk-content-body">
                                <div class="nk-content-wrap">
                                    <div class="nk-block-head nk-block-head-md">
                                        <div class="nk-block-between">
                                            <div class="nk-block-head-content">
                                                <h3 class="nk-block-title page-title">ROJ Mail</h3>
                                            </div><!-- .nk-block-head-content -->
                                            <div class="nk-block-head-content">
                                                <a href="{{ route('dasboard') }}" class="back-to"><em class="icon ni ni-arrow-left"></em><span><span class="d-none d-sm-inline-block">Back to</span> Dashboard</span></a>
                                            </div><!-- .nk-block-head-content -->
                                        </div><!-- .nk-block-between -->
                                    </div><!-- .nk-block-head -->
                                    <div class="nk-ibx">
                                        <div class="nk-ibx-aside" data-content="inbox-aside" data-toggle-overlay="true" data-toggle-screen="lg">
                                            <div class="nk-ibx-head">
                                                <a href="javascript:void(0)" class="btn btn-primary" data-toggle="modal" data-target="#compose-mail"><em class="icon ni ni-plus"></em> <span>Compose</span></a>
                                            </div>
                                            <div class="nk-ibx-nav" data-simplebar>
                                                <ul class="nk-ibx-menu">
                                                    <li class="active">
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-inbox"></em>
                                                            <span class="nk-ibx-menu-text">Inbox</span>
                                                            <span class="badge badge-pill badge-primary">8</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-edit"></em>
                                                            <span class="nk-ibx-menu-text">Draft</span>
                                                            <span class="badge badge-pill badge-light">12</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-star"></em>
                                                            <span class="nk-ibx-menu-text">Favourite</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-send"></em>
                                                            <span class="nk-ibx-menu-text">Sent</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-report"></em>
                                                            <span class="nk-ibx-menu-text">Spam</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-trash"></em>
                                                            <span class="nk-ibx-menu-text">Trash</span>
                                                            <span class="badge badge-pill badge-danger badge-dim">8</span>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-emails"></em>
                                                            <span class="nk-ibx-menu-text">All Mails</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                <div class="nk-ibx-nav-head">
                                                    <h6 class="title">Label</h6>
                                                    <a class="link" href="javascript:void(0)"><em class="icon ni ni-plus-c"></em></a>
                                                </div>
                                                <ul class="nk-ibx-label">
                                                    <li>
                                                        <a href="javascript:void(0)"><span class="nk-ibx-label-dot dot dot-xl dot-label bg-primary"></span><span class="nk-ibx-label-text">Business</span></a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>Edit Label</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Remove Label</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Label Color</span></a></li>
                                                                    <li class="divider"></li>
                                                                </ul>
                                                                <ul class="link-check">
                                                                    <li><a href="javascript:void(0)">Show if unread</a></li>
                                                                    <li class="active"><a href="javascript:void(0)">Show</a></li>
                                                                    <li><a href="javascript:void(0)">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)"><span class="nk-ibx-label-dot dot dot-xl dot-label bg-danger"></span><span class="nk-ibx-label-text">Personal</span></a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>Edit Label</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Remove Label</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Label Color</span></a></li>
                                                                    <li class="divider"></li>
                                                                </ul>
                                                                <ul class="link-check">
                                                                    <li><a href="javascript:void(0)">If unread</a></li>
                                                                    <li class="active"><a href="javascript:void(0)">Show</a></li>
                                                                    <li><a href="javascript:void(0)">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)"><span class="nk-ibx-label-dot dot dot-xl dot-label bg-success"></span><span class="nk-ibx-label-text">Social</span></a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-sm dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>Edit Label</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Remove Label</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Label Color</span></a></li>
                                                                    <li class="divider"></li>
                                                                </ul>
                                                                <ul class="link-check">
                                                                    <li><a href="javascript:void(0)">Show if unread</a></li>
                                                                    <li class="active"><a href="javascript:void(0)">Show</a></li>
                                                                    <li><a href="javascript:void(0)">Hide</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="nk-ibx-nav-head">
                                                    <h6 class="title">Contact</h6>
                                                    <a class="link" href="javascript:void(0)"><em class="icon ni ni-plus-c"></em></a>
                                                </div>
                                                <ul class="nk-ibx-contact">
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="user-card">
                                                                <div class="user-avatar"><img src="./images/avatar/a-sm.jpg" alt=""></div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">Abu Bin Ishtiyak</span>
                                                                    <span class="sub-text">CEO of Softnio</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>View Profile</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Send Email</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Start Chat</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="user-card">
                                                                <div class="user-avatar"><img src="./images/avatar/b-sm.jpg" alt=""></div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">Dora Schmidt</span>
                                                                    <span class="sub-text">VP Product Imagelab</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>View Profile</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Send Email</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Start Chat</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="user-card">
                                                                <div class="user-avatar"><img src="./images/avatar/c-sm.jpg" alt=""></div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">Jessica Fowler</span>
                                                                    <span class="sub-text">Developer at Softnio</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>View Profile</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Send Email</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Start Chat</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="user-card">
                                                                <div class="user-avatar"><img src="./images/avatar/d-sm.jpg" alt=""></div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">Eula Flowers</span>
                                                                    <span class="sub-text">Co-Founder of Vitzo</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="javascript:void(0)"><span>View Profile</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Send Email</span></a></li>
                                                                    <li><a href="javascript:void(0)"><span>Start Chat</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                                <div class="nk-ibx-status">
                                                    <div class="nk-ibx-status-info">
                                                        <em class="icon ni ni-hard-drive"></em>
                                                        <span><strong>6 GB</strong> (5%) of 100GB used</span>
                                                    </div>
                                                    <div class="progress progress-md bg-light">
                                                        <div class="progress-bar" data-progress="5"></div>
                                                    </div>
                                                </div><!-- .nk-ibx-status -->
                                            </div>
                                        </div><!-- .nk-ibx-aside -->
                                        <div class="nk-ibx-body bg-white">
                                            <div class="nk-ibx-head">
                                                <div class="nk-ibx-head-actions">
                                                    <div class="nk-ibx-head-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionAll">
                                                            <label class="custom-control-label" for="conversionAll"></label>
                                                        </div>
                                                    </div>
                                                    <ul class="nk-ibx-head-tools g-1">
                                                        <li><a href="javascript:void(0)" class="btn btn-icon btn-trigger"><em class="icon ni ni-undo"></em></a></li>
                                                        <li class="d-none d-sm-block"><a href="javascript:void(0)" class="btn btn-icon btn-trigger"><em class="icon ni ni-archived"></em></a></li>
                                                        <li class="d-none d-sm-block"><a href="javascript:void(0)" class="btn btn-icon btn-trigger"><em class="icon ni ni-trash"></em></a></li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                <div class="dropdown-menu">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>Move to</span></a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                        <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="nk-ibx-head-tools g-1">
                                                        <li><a href="javascript:void(0)" class="btn btn-trigger btn-icon btn-tooltip" title="Prev Page"><em class="icon ni ni-arrow-left"></em></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-trigger btn-icon btn-tooltip" title="Next Page"><em class="icon ni ni-arrow-right"></em></a></li>
                                                        <li><a href="javascript:void(0)" class="btn btn-trigger btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                        <li class="mr-n1 d-lg-none"><a href="javascript:void(0)" class="btn btn-trigger btn-icon toggle" data-target="inbox-aside"><em class="icon ni ni-menu-alt-r"></em></a></li>
                                                    </ul>
                                                </div>
                                                <div class="search-wrap" data-search="search">
                                                    <div class="search-content">
                                                        <a href="javascript:void(0)" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                        <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                        <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                    </div>
                                                </div><!-- .search-wrap -->
                                            </div><!-- .nk-ibx-head -->
                                            <div class="nk-ibx-list" data-simplebar>
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem01">
                                                            <label class="custom-control-label" for="conversionItem01"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Abu Bin Ishtiyak</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Can we help you set up email forwording?</span> We’ve noticed you haven’t set up email forward </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:00 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item is-unread">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem02">
                                                            <label class="custom-control-label" for="conversionItem02"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a class="active" href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Ricardo Salazar</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context-badges"><span class="badge badge-primary">Feedback</span></div>
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Can we help you set up email forwording?</span> We’ve noticed you haven’t set up email forward </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                        <a class="link link-light">
                                                            <em class="icon ni ni-clip-h"></em>
                                                        </a>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:00 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item is-unread">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <span>LH</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Larry Hughes</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Individual Modal and Alert Design.</span> Please use the attached file for modal. </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a class="active" href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/c-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Laura Matthews</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context-badges"><span class="badge badge-success">Social</span></div>
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Laravel Developer - Interview List</span> https://docs.google.com/document/d/12oOKEs4qjMlUiHXNVjHJBK </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a class="active" href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/d-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Tammy Wilson</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">TokenWiz - New Page</span> here are the 2 screens I would to implement with TokenWiz </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item is-unread">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a class="active" href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-azure">
                                                                <span>SP</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Sara Phillips</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">TokenLite Promo Assets</span> Please check out attached. </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                        <a class="link link-light">
                                                            <em class="icon ni ni-clip-h"></em>
                                                        </a>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-indigo">
                                                                <span>MA</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Mildred Arnold</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Token Page Content.</span> Please check included links for content. </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-success">
                                                                <img src="./images/avatar/a-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Abu Bin Ishtiyak</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context-badges"><span class="badge badge-danger">Personal</span></div>
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Feedback about licenses and support policy</span> Two important aspects of the marketplace are its licenses, which govern the use of your items by customers </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a class="active" href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/d-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Tammy Wilson</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context-badges"><span class="badge badge-info">Team</span></div>
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Thanks for completing our survey</span> Since you've already completed our survey we wanted to give you the opportunity to win as well </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/b-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Ricardo Salazar</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Registration Confirmation for Envato Worldwide</span> The event organizer has provided the following information </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                        <a class="link link-light">
                                                            <em class="icon ni ni-clip-h"></em>
                                                        </a>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-pink">
                                                                <span>CL</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Catherine Larson</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Bring personality to your design work.</span> As designers, how we tell our stories is key. We must be unique, genuine, and use language with purpose to get meaningful results in our design work. </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                        <a class="link link-light">
                                                            <em class="icon ni ni-clip-h"></em>
                                                        </a>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-azure">
                                                                <span>SP</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Sara Phillips</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Unique design portfolio examples.</span> Prepare to be blown away with our favourite unique design portfolio examples built </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <img src="./images/avatar/c-sm.jpg" alt="">
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Laura Matthews</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context-badges"><span class="badge badge-danger">Personal</span></div>
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Credit Card Verification Incomplete.</span> Your recently submitted credit card verification has NOT been completed. We found the following errors in your submission. </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-gray">
                                                                <span>MG</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Maria Grant</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Introducing npm’s security insights API.</span> Something I think is very important to supply chain security is to have the right information available to make decisions about risk </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar bg-dark">
                                                                <span>TN</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Timothy Nichols</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Do your table designs pass The Lunch Test</span> This email goes out to everyone who designs data-heavy applications. Lists and tables aren’t exactly the sexiest part of design, but in my own personal experience </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                                <div class="nk-ibx-item">
                                                    <a href="javascript:void(0)" class="nk-ibx-link"></a>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-check">
                                                        <div class="custom-control custom-control-sm custom-checkbox">
                                                            <input type="checkbox" class="custom-control-input nk-dt-item-check" id="conversionItem03">
                                                            <label class="custom-control-label" for="conversionItem03"></label>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-star">
                                                        <div class="asterisk"><a href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-user">
                                                        <div class="user-card">
                                                            <div class="user-avatar">
                                                                <span>JL</span>
                                                            </div>
                                                            <div class="user-name">
                                                                <div class="lead-text">Jenkins Lori</div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">Can I get email alerts.</span> If you subscribe to email notifications, you will receive an email alert </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">10:30 AM</div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                        <div class="ibx-actions">
                                                            <ul class="ibx-actions-hidden gx-1">
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Archive"><em class="icon ni ni-archived"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="ibx-actions-visible gx-2">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-eye"></em><span>View</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-archived"></em><span>Archive</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                </div><!-- .nk-ibx-item -->
                                            </div><!-- .nk-ibx-list -->
                                            <div class="nk-ibx-view">
                                                <div class="nk-ibx-head">
                                                    <div class="nk-ibx-head-actions">
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            <li class="ml-n2"><a href="javascript:void(0)" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                                            <li><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Archive"><em class="icon ni ni-archived"></em></a></li>
                                                            <li class="d-none d-sm-block"><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Mark as Spam"><em class="icon ni ni-report"></em></a></li>
                                                            <li><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                                            <li><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Label"><em class="icon ni ni-label"></em></a></li>
                                                            <li>
                                                                <div class="dropdown">
                                                                    <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                    <div class="dropdown-menu">
                                                                        <ul class="link-list-opt no-bdr">
                                                                            <li><a class="dropdown-item" href="javascript:void(0)"><span>Mark as unread</span></a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0)"></em><span>Mark as not important</span></a></li>
                                                                            <li><a class="dropdown-item" href="javascript:void(0)"></em><span>Archive this message</span></a></li>
                                                                        </ul>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-ibx-head-actions">
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            <li class="d-none d-sm-block"><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Prev"><em class="icon ni ni-chevron-left"></em></a></li>
                                                            <li class="d-none d-sm-block"><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Next"><em class="icon ni ni-chevron-right"></em></a></li>
                                                            <li class="mr-n1 mr-lg-0"><a href="javascript:void(0)" class="btn btn-icon btn-trigger search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a></li>
                                                        </ul>
                                                    </div>
                                                    <div class="search-wrap" data-search="search">
                                                        <div class="search-content">
                                                            <a href="javascript:void(0)" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                            <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or message">
                                                            <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                                        </div>
                                                    </div><!-- .search-wrap -->
                                                </div><!-- .nk-ibx-head -->
                                                <div class="nk-ibx-reply nk-reply" data-simplebar>
                                                    <div class="nk-ibx-reply-head">
                                                        <div>
                                                            <h4 class="title">Introducing New Dashboard</h4>
                                                            <ul class="nk-ibx-tags g-1">
                                                                <li class="btn-group is-tags">
                                                                    <a class="btn btn-xs btn-primary btn-dim" href="javascript:void(0)">Business</a>
                                                                    <a class="btn btn-xs btn-icon btn-primary btn-dim" href="javascript:void(0)"><em class="icon ni ni-cross"></em></a>
                                                                </li>
                                                                <li class="btn-group is-tags">
                                                                    <a class="btn btn-xs btn-danger btn-dim" href="javascript:void(0)">Management</a>
                                                                    <a class="btn btn-xs btn-icon btn-danger btn-dim" href="javascript:void(0)"><em class="icon ni ni-cross"></em></a>
                                                                </li>
                                                                <li class="btn-group is-tags">
                                                                    <a class="btn btn-xs btn-info btn-dim" href="javascript:void(0)">Team</a>
                                                                    <a class="btn btn-xs btn-icon btn-info btn-dim" href="javascript:void(0)"><em class="icon ni ni-cross"></em></a>
                                                                </li>
                                                            </ul>
                                                        </div>
                                                        <ul class="d-flex g-1">
                                                            <li class="d-none d-sm-block">
                                                                <a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Print"><em class="icon ni ni-printer"></em></a>
                                                            </li>
                                                            <li class="mr-n1">
                                                                <div class="asterisk"><a class="btn btn-trigger btn-icon btn-tooltip" href="javascript:void(0)"><em class="asterisk-off icon ni ni-star"></em><em class="asterisk-on icon ni ni-star-fill"></em></a></div>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    <div class="nk-ibx-reply-group">
                                                        <div class="nk-ibx-reply-item nk-reply-item">
                                                            <div class="nk-reply-header nk-ibx-reply-header is-collapsed">
                                                                <div class="nk-reply-desc">
                                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="nk-reply-info">
                                                                        <div class="nk-reply-author lead-text">Abu Bin Ishtiyak <span class="date d-sm-none">14 Jan, 2020</span></div>
                                                                        <div class="dropdown nk-reply-msg-info">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle sub-text dropdown-indicator" data-toggle="dropdown">to Mildred</a>
                                                                            <div class="dropdown-menu dropdown-menu-md">
                                                                                <ul class="nk-reply-msg-meta">
                                                                                    <li><span class="label">from:</span> <span class="info"><a href="javascript:void(0)">info@softnio.com</a></span></li>
                                                                                    <li><span class="label">to:</span> <span class="info"><a href="javascript:void(0)">team@softnio.com</a></span></li>
                                                                                    <li><span class="label">bcc:</span> <span class="info"><a href="javascript:void(0)">team@softnio.com</a></span></li>
                                                                                    <li><span class="label">mailed-by:</span> <span class="info"><a href="javascript:void(0)">softnio.com</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nk-reply-msg-excerpt">I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-reply-tools g-1">
                                                                    <li class="attach-msg"><em class="icon ni ni-clip-h"></em></li>
                                                                    <li class="date-msg"><span class="date">14 Jan, 2020</span></li>
                                                                    <li class="replyto-msg"><a href="javascript:void(0)" class="btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                                    <li class="more-actions">
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-forward-arrow-fill"></em><span>Forward</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-report-fill"></em><span>Report Spam</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                                <div class="nk-reply-entry entry">
                                                                    <p>Hello team,</p>
                                                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                                                    <p>Thank you <br> Ishityak</p>
                                                                </div>
                                                                <div class="attach-files">
                                                                    <ul class="attach-list">
                                                                        <li class="attach-item">
                                                                            <a class="download" href="javascript:void(0)"><em class="icon ni ni-img"></em><span>error-show-On-order.jpg</span></a>
                                                                        </li>
                                                                        <li class="attach-item">
                                                                            <a class="download" href="javascript:void(0)"><em class="icon ni ni-img"></em><span>full-page-error.jpg</span></a>
                                                                        </li>
                                                                    </ul>
                                                                    <div class="attach-foot">
                                                                        <span class="attach-info">2 files attached</span>
                                                                        <a class="attach-download link" href="javascript:void(0)"><em class="icon ni ni-download"></em><span>Download All</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .nk-reply-item -->
                                                        <div class="nk-ibx-reply-item nk-reply-item">
                                                            <div class="nk-reply-header nk-ibx-reply-header">
                                                                <div class="nk-reply-desc">
                                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                                        <img src="./images/avatar/c-sm.jpg" alt="">
                                                                    </div>
                                                                    <div class="nk-reply-info">
                                                                        <div class="nk-reply-author lead-text">Mildred Delgado <span class="date d-sm-none">18 Jan, 2020</span></div>
                                                                        <div class="dropdown nk-reply-msg-info">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle sub-text dropdown-indicator" data-toggle="dropdown">to Me</a>
                                                                            <div class="dropdown-menu dropdown-menu-md">
                                                                                <ul class="nk-reply-msg-meta">
                                                                                    <li><span class="label">from:</span> <span class="info"><a href="javascript:void(0)">info@softnio.com</a></span></li>
                                                                                    <li><span class="label">to:</span> <span class="info"><a href="javascript:void(0)">team@softnio.com</a></span></li>
                                                                                    <li><span class="label">bcc:</span> <span class="info"><a href="javascript:void(0)">team@softnio.com</a></span></li>
                                                                                    <li><span class="label">mailed-by:</span> <span class="info"><a href="javascript:void(0)">softnio.com</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nk-reply-msg-excerpt">It would be great if you send me itiam ut neque in magna porttitor...</div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-reply-tools g-1">
                                                                    <li class="date-msg"><span class="date">14 Jan, 2020</span></li>
                                                                    <li class="replyto-msg"><a href="javascript:void(0)" class="btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                                    <li class="more-actions">
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-forward-arrow-fill"></em><span>Forward</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-report-fill"></em><span>Report Spam</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                                <div class="nk-reply-entry entry">
                                                                    <p>Hello team,</p>
                                                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                                                    <p>Thank you <br> Ishityak</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <!-- .nk-reply-item -->
                                                        <div class="nk-ibx-reply-item nk-reply-item">
                                                            <div class="nk-reply-header nk-ibx-reply-header is-opened">
                                                                <div class="nk-reply-desc">
                                                                    <div class="nk-reply-avatar user-avatar bg-blue">
                                                                        <span>AB</span>
                                                                    </div>
                                                                    <div class="nk-reply-info">
                                                                        <div class="nk-reply-author lead-text">Abu Bin Ishtiyak <span class="date d-sm-none">20 Jan, 2020</span></div>
                                                                        <div class="dropdown nk-reply-msg-info">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle sub-text dropdown-indicator" data-toggle="dropdown">to Mildred</a>
                                                                            <div class="dropdown-menu dropdown-menu-md">
                                                                                <ul class="nk-reply-msg-meta">
                                                                                    <li><span class="label">from:</span> <span class="info"><a href="javascript:void(0)">info@softnio.com</a></span></li>
                                                                                    <li><span class="label">to:</span> <span class="info"><a href="javascript:void(0)">team@softnio.com</a></span></li>
                                                                                    <li><span class="label">bcc:</span> <span class="info"><a href="javascript:void(0)">team@softnio.com</a></span></li>
                                                                                    <li><span class="label">mailed-by:</span> <span class="info"><a href="javascript:void(0)">softnio.com</a></span></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                        <div class="nk-reply-msg-excerpt">It would be great if you send me itiam ut neque in magna porttitor...</div>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-reply-tools g-1">
                                                                    <li class="date-msg"><span class="date">14 Jan, 2020</span></li>
                                                                    <li class="replyto-msg"><a href="javascript:void(0)" class="btn btn-trigger btn-icon btn-tooltip" title="Reply"><em class="icon ni ni-curve-up-left"></em></a></li>
                                                                    <li class="more-actions">
                                                                        <div class="dropdown">
                                                                            <a href="javascript:void(0)" class="dropdown-toggle btn btn-trigger btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                                <ul class="link-list-opt no-bdr">
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-reply-fill"></em><span>Reply to</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-forward-arrow-fill"></em><span>Forward</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash-fill"></em><span>Delete this</span></a></li>
                                                                                    <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-report-fill"></em><span>Report Spam</span></a></li>
                                                                                </ul>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                </ul>
                                                            </div>
                                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                                <div class="nk-reply-entry entry">
                                                                    <p>Hello team,</p>
                                                                    <p>I am facing problem as i can not select currency on buy order page. Can you guys let me know what i am doing doing wrong? Please check attached files.</p>
                                                                    <p>Thank you <br> Ishityak</p>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-reply-item -->
                                                    </div>
                                                    <div class="nk-ibx-reply-form nk-reply-form">
                                                        <div class="nk-reply-form-header">
                                                            <div class="nk-reply-form-group">
                                                                <div class="nk-reply-form-dropdown">
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-sm btn-trigger btn-icon" data-toggle="dropdown" href="javascript:void(0)"><em class="icon ni ni-curve-up-left"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-md">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-reply-fill"></em> <span>Reply to Abu Bin Ishtiyak</span></a></li>
                                                                                <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-forward-arrow-fill"></em> <span>Forword</span></a></li>
                                                                                <li class="divider"></li>
                                                                                <li><a href="javascript:void(0)"><em class="icon ni ni-edit-fill"></em> <span>Edit Subject</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="nk-reply-form-title d-sm-none">Reply</div>
                                                                <div class="nk-reply-form-input-group">
                                                                    <div class="nk-reply-form-input nk-reply-form-input-to">
                                                                        <label class="label">To</label>
                                                                        <input type="text" value="info@softnio.com" class="input-mail tagify" placeholder="" data-whitelist="team@softnio.com, help@softnio.com, contact@softnio.com">
                                                                    </div>
                                                                    <div class="nk-reply-form-input nk-reply-form-input-cc" data-content="mail-cc">
                                                                        <label class="label">Cc</label>
                                                                        <input type="text" class="input-mail tagify">
                                                                        <a href="javascript:void(0)" class="toggle-opt" data-target="mail-cc"><em class="icon ni ni-cross"></em></a>
                                                                    </div>
                                                                    <div class="nk-reply-form-input nk-reply-form-input-bcc" data-content="mail-bcc">
                                                                        <label class="label">Bcc</label>
                                                                        <input type="text" class="input-mail tagify">
                                                                        <a href="javascript:void(0)" class="toggle-opt" data-target="mail-bcc"><em class="icon ni ni-cross"></em></a>
                                                                    </div>
                                                                </div>
                                                                <ul class="nk-reply-form-nav">
                                                                    <li><a tabindex="-1" class="toggle-opt" data-target="mail-cc" href="javascript:void(0)">CC</a></li>
                                                                    <li><a tabindex="-1" class="toggle-opt" data-target="mail-bcc" href="javascript:void(0)">BCC</a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                        <div class="nk-reply-form-editor">
                                                            <div class="nk-reply-form-field">
                                                                <textarea class="form-control form-control-simple no-resize" placeholder="Hello"></textarea>
                                                            </div>
                                                        </div><!-- .nk-reply-form-editor -->
                                                        <div class="nk-reply-form-tools">
                                                            <ul class="nk-reply-form-actions g-1">
                                                                <li class="mr-2"><button class="btn btn-primary" type="submit">Send</button></li>
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="javascript:void(0)"><em class="icon ni ni-hash"></em></a>
                                                                        <div class="dropdown-menu">
                                                                            <ul class="link-list-opt no-bdr link-list-template">
                                                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                                                <li><a href="javascript:void(0)"><span>Thank you message</span></a></li>
                                                                                <li><a href="javascript:void(0)"><span>Your issues solved</span></a></li>
                                                                                <li><a href="javascript:void(0)"><span>Thank you message</span></a></li>
                                                                                <li class="divider">
                                                                                <li><a href="javascript:void(0)"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                                                <li><a href="javascript:void(0)"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="javascript:void(0)"><em class="icon ni ni-clip-v"></em></a>
                                                                </li>
                                                                <li>
                                                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="javascript:void(0)"><em class="icon ni ni-img"></em></a>
                                                                </li>
                                                            </ul>
                                                            <ul class="nk-reply-form-actions g-1">
                                                                <li>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle btn-trigger btn btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="javascript:void(0)"><span>Another Option</span></a></li>
                                                                                <li><a href="javascript:void(0)"><span>More Option</span></a></li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                                <li>
                                                                    <a href="javascript:void(0)" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
                                                                </li>
                                                            </ul>
                                                        </div><!-- .nk-reply-form-tools -->
                                                    </div><!-- .nk-reply-form -->
                                                </div><!-- .nk-reply -->
                                            </div>
                                        </div><!-- .nk-ibx-body -->
                                    </div><!-- .nk-ibx -->
                                </div>
                                <!-- footer @s -->
                                <div class="nk-footer">
                                    <div class="container wide-xl">
                                        <div class="nk-footer-wrap g-2">
                                            <div class="nk-footer-copyright"> &copy; {{ date('Y') }} Root Of Jesse.
                                            </div>
                                            <div class="nk-footer-links">
                                                <ul class="nav nav-sm">
                                                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Terms</a></li>
                                                    <li class="nav-item"><a class="nav-link" href="javascript:void(0)">Privacy</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- footer @e -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- content @e -->
            </div>
            <!-- wrap @e -->
        </div>
        <!-- main @e -->
        <!-- @@ Compose Mail Modal @e -->
        <div class="modal fade" tabindex="-1" role="dialog" id="compose-mail">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h6 class="modal-title">Compose Message</h6>
                        <a href="javascript:void(0)" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                    </div>
                    <div class="modal-body p-0">
                        <div class="nk-reply-form-header">
                            <div class="nk-reply-form-group">
                                <div class="nk-reply-form-input-group">
                                    <div class="nk-reply-form-input nk-reply-form-input-to">
                                        <label class="label">To</label>
                                        <input type="text" class="input-mail tagify" placeholder="Recipient" data-whitelist="team@softnio.com, help@softnio.com, contact@softnio.com">
                                    </div>
                                    <div class="nk-reply-form-input nk-reply-form-input-cc" data-content="mail-cc">
                                        <label class="label">Cc</label>
                                        <input type="text" class="input-mail tagify">
                                        <a href="javascript:void(0)" class="toggle-opt" data-target="mail-cc"><em class="icon ni ni-cross"></em></a>
                                    </div>
                                    <div class="nk-reply-form-input nk-reply-form-input-bcc" data-content="mail-bcc">
                                        <label class="label">Bcc</label>
                                        <input type="text" class="input-mail tagify">
                                        <a href="javascript:void(0)" class="toggle-opt" data-target="mail-bcc"><em class="icon ni ni-cross"></em></a>
                                    </div>
                                </div>
                                <ul class="nk-reply-form-nav">
                                    <li><a tabindex="-1" class="toggle-opt" data-target="mail-cc" href="javascript:void(0)">CC</a></li>
                                    <li><a tabindex="-1" class="toggle-opt" data-target="mail-bcc" href="javascript:void(0)">BCC</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="nk-reply-form-editor">
                            <div class="nk-reply-form-field">
                                <input type="text" class="form-control form-control-simple" placeholder="Subject">
                            </div>
                            <div class="nk-reply-form-field">
                                <textarea class="form-control form-control-simple no-resize ex-large" placeholder="Hello"></textarea>
                            </div>
                        </div><!-- .nk-reply-form-editor -->
                        <div class="nk-reply-form-tools">
                            <ul class="nk-reply-form-actions g-1">
                                <li class="mr-2"><button class="btn btn-primary" type="submit">Send</button></li>
                                <li>
                                    <div class="dropdown">
                                        <a class="btn btn-icon btn-sm btn-tooltip" data-toggle="dropdown" title="Templates" href="javascript:void(0)"><em class="icon ni ni-hash"></em></a>
                                        <div class="dropdown-menu">
                                            <ul class="link-list-opt no-bdr link-list-template">
                                                <li class="opt-head"><span>Quick Insert</span></li>
                                                <li><a href="javascript:void(0)"><span>Thank you message</span></a></li>
                                                <li><a href="javascript:void(0)"><span>Your issues solved</span></a></li>
                                                <li><a href="javascript:void(0)"><span>Thank you message</span></a></li>
                                                <li class="divider">
                                                <li><a href="javascript:void(0)"><em class="icon ni ni-file-plus"></em><span>Save as Template</span></a></li>
                                                <li><a href="javascript:void(0)"><em class="icon ni ni-notes-alt"></em><span>Manage Template</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="javascript:void(0)"><em class="icon ni ni-clip-v"></em></a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Insert Emoji" href="javascript:void(0)"><em class="icon ni ni-happy"></em></a>
                                </li>
                                <li class="d-none d-sm-block">
                                    <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Images" href="javascript:void(0)"><em class="icon ni ni-img"></em></a>
                                </li>
                            </ul>
                            <ul class="nk-reply-form-actions g-1">
                                <li>
                                    <div class="dropdown">
                                        <a href="javascript:void(0)" class="dropdown-toggle btn-trigger btn btn-icon" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="javascript:void(0)"><span>Another Option</span></a></li>
                                                <li><a href="javascript:void(0)"><span>More Option</span></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </li>
                                <li>
                                    <a href="javascript:void(0)" class="btn-trigger btn btn-icon mr-n2"><em class="icon ni ni-trash"></em></a>
                                </li>
                            </ul>
                        </div><!-- .nk-reply-form-tools -->
                    </div><!-- .modal-body -->
                </div><!-- .modal-content -->
            </div><!-- .modla-dialog -->
        </div><!-- .modal -->
    </div>
    <!-- app-root @e -->
    <!-- JavaScript -->
    <script src="{{ asset('ext/assets/js/bundle.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('ext/assets/js/scripts.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('ext/assets/js/apps/inbox.js?ver=2.4.0') }}"></script>
    <script src="{{ asset('ext/assets/js/libs/tagify.js?ver=2.4.0') }}"></script>
</body>

</html>