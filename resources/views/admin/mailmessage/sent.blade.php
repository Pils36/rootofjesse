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
    <title>Inbox({{ count($data['messageinbox']) }}) | Root Of Jesse Admin</title>
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
                                                    <li>
                                                        <a class="nk-ibx-menu-item" href="{{ route('messaging') }}">
                                                            <em class="icon ni ni-inbox"></em>
                                                            <span class="nk-ibx-menu-text">Inbox</span>
                                                            <span class="badge badge-pill badge-primary">{{ count($data['messageinbox']) }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="active">
                                                        <a class="nk-ibx-menu-item" href="{{ route('sent mails') }}">
                                                            <em class="icon ni ni-send"></em>
                                                            <span class="nk-ibx-menu-text">Sent</span>
                                                            <span class="badge badge-pill badge-success">{{ count($data['messagesent']) }}</span>
                                                        </a>
                                                    </li>
                                                    <li class="disp-0">
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-edit"></em>
                                                            <span class="nk-ibx-menu-text">Draft</span>
                                                            <span class="badge badge-pill badge-light">12</span>
                                                        </a>
                                                    </li>
                                                    <li class="disp-0">
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-star"></em>
                                                            <span class="nk-ibx-menu-text">Favourite</span>
                                                        </a>
                                                    </li>
                                                    
                                                    <li class="disp-0">
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-report"></em>
                                                            <span class="nk-ibx-menu-text">Spam</span>
                                                        </a>
                                                    </li>
                                                    <li class="disp-0">
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-trash"></em>
                                                            <span class="nk-ibx-menu-text">Trash</span>
                                                            <span class="badge badge-pill badge-danger badge-dim">8</span>
                                                        </a>
                                                    </li>
                                                    <li class="disp-0"> 
                                                        <a class="nk-ibx-menu-item" href="javascript:void(0)">
                                                            <em class="icon ni ni-emails"></em>
                                                            <span class="nk-ibx-menu-text">All Mails</span>
                                                        </a>
                                                    </li>
                                                </ul>
                                                {{-- <div class="nk-ibx-nav-head">
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
                                                </ul> --}}
                                                <div class="nk-ibx-nav-head">
                                                    <h6 class="title">Team Members</h6>
                                                    <a class="link" href="javascript:void(0)"><em class="icon ni ni-plus-c"></em></a>
                                                </div>
                                                <ul class="nk-ibx-contact">

                                                    @if (count($data['teamMembers']) > 0)
                                                        @foreach ($data['teamMembers'] as $teammember)
                                                                <li>
                                                                    <a href="javascript:void(0)">
                                                                        <div class="user-card">
                                                                            <div class="user-avatar">{{ strtoupper(Str::substr($teammember->name, 0, 2)) }}</div>
                                                                            <div class="user-info">
                                                                                <span class="lead-text" title="{{ $teammember->title.' '.$teammember->name }}">{{ (strlen($teammember->title.' '.$teammember->name) < 15) ? $teammember->title.' '.$teammember->name : substr($teammember->title.' '.$teammember->name, 0, 15)."..." }}
                                                                                </span>
                                                                                <span class="sub-text" title="{{ $teammember->email }}">{{ (strlen($teammember->email) < 20) ? $teammember->email : substr($teammember->email, 0, 20)."..." }}
                                                                                </span>
                                                                                
                                                                            </div>
                                                                        </div>
                                                                    </a>
                                                                    <div class="dropdown">
                                                                        <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                        <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                            <ul class="link-list-opt no-bdr">
                                                                                <li><a href="{{ route('view team', $teammember->id) }}"><span>View Profile</span></a></li>
                                                                                @if ($teammember->id != Auth::user()->id)
                                                                                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#compose-mail"><span>Send Email</span></a></li>
                                                                                @endif
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </li>
                                                        @endforeach
                                                    @else

                                                    <li>
                                                        <a href="javascript:void(0)">
                                                            <div class="user-card">
                                                                <div class="user-avatar">NR</div>
                                                                <div class="user-info">
                                                                    <span class="lead-text">No Record</span>
                                                                </div>
                                                            </div>
                                                        </a>
                                                        <div class="dropdown">
                                                            <a href="javascript:void(0)" class="dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-xs dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    
                                                                    <li><a href="javascript:void(0)" data-toggle="modal" data-target="#compose-mail"><span>Send Email</span></a></li>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                        
                                                    @endif

                                                </ul>
                                                <div class="nk-ibx-status disp-0                                                     ">
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
                                                        
                                                        <li class="d-none d-sm-block"><a href="javascript:void(0)" class="btn btn-icon btn-trigger"><em class="icon ni ni-trash"></em></a></li>
                                                        <li>
                                                            <div class="dropdown">
                                                                <a href="javascript:void(0)" class="dropdown-toggle btn btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-v"></em></a>
                                                                <div class="dropdown-menu">
                                                                    <ul class="link-list-opt no-bdr">
                                                                        
                                                                        <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                </div>
                                                <div>
                                                    <ul class="nk-ibx-head-tools g-1">
                                                        
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


                                                @if (count($data['messagesent']) > 0)
                                                    @foreach ($data['messagesent'] as $messageSent)

                                                    

                                                        <div class="nk-ibx-item">
                                                        <a href="javascript:void(0)" class="nk-ibx-link" onclick="showMessage('{{ $messageSent->id }}')"></a>
                                                            <input type="hidden" name="current_index" id="current_index{{ $messageSent->id }}" value="{{ $messageSent->id }}">
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
                                                                        {{ strtoupper(Str::substr($messageSent->name, 0, 2)) }}
                                                                    </div>
                                                                    <div class="user-name">
                                                                        <div class="lead-text">{{ (strlen($messageSent->name) < 20) ? $messageSent->name : substr($messageSent->name, 0, 20)."..." }}</div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                                <div class="nk-ibx-context-group">
                                                                    <div class="nk-ibx-context">
                                                                        <span class="nk-ibx-context-text">
                                                                            <span class="heading">{{ (strlen($messageSent->subject) < 40) ? $messageSent->subject : substr($messageSent->subject, 0, 40)."..." }}</span></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                            </div>
                                                            <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                                <div class="sub-text"><span class="heading">{{ date('h:i A', strtotime($messageSent->created_at)) }} <br> <small>{{ date('d/M/Y', strtotime($messageSent->created_at)) }}</small></span> </div>
                                                            </div>
                                                            <div class="nk-ibx-item-elem nk-ibx-item-tools">
                                                                <div class="ibx-actions">
                                                                    <ul class="ibx-actions-hidden gx-1">
                                                                        
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
                                                                                        
                                                                                        <li><a class="dropdown-item" href="javascript:void(0)"><em class="icon ni ni-trash"></em><span>Delete</span></a></li>
                                                                                        
                                                                                    </ul>
                                                                                </div>
                                                                            </div>
                                                                        </li>
                                                                    </ul>
                                                                </div>
                                                            </div>
                                                        </div><!-- .nk-ibx-item -->
                                                    @endforeach
                                                @else


                                                <div class="nk-ibx-item">
                                                    {{-- <a href="javascript:void(0)" class="nk-ibx-link"></a> --}}
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
                                                                ...
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-fluid">
                                                        <div class="nk-ibx-context-group">
                                                            <div class="nk-ibx-context">
                                                                <span class="nk-ibx-context-text">
                                                                    <span class="heading">No sent message</span>
                                                                </span>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-attach">
                                                    </div>
                                                    <div class="nk-ibx-item-elem nk-ibx-item-time">
                                                        <div class="sub-text">{{ date('h:i A') }}</div>
                                                    </div>
                                                    
                                                </div><!-- .nk-ibx-item -->
                                                    
                                                @endif



                                            </div><!-- .nk-ibx-list -->

                                                

                                            <div class="nk-ibx-view">


                                                <div class="nk-ibx-head">
                                                    <div class="nk-ibx-head-actions">
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            <li class="ml-n2"><a href="javascript:void(0)" class="btn btn-icon btn-trigger nk-ibx-hide"><em class="icon ni ni-arrow-left"></em></a></li>
                                                            
                                                            <li><a href="javascript:void(0)" class="btn btn-icon btn-trigger btn-tooltip" title="Delete"><em class="icon ni ni-trash"></em></a></li>
                                                            
                                                            
                                                        </ul>
                                                    </div>
                                                    <div class="nk-ibx-head-actions">
                                                        <ul class="nk-ibx-head-tools g-1">
                                                            
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
                                                    
                                                    <div class="nk-ibx-reply-group">
                                                        <div class="nk-ibx-reply-item nk-reply-item">
                                                            <div class="nk-reply-body nk-ibx-reply-body">
                                                                <div class="nk-reply-entry entry" id="messagecontent">
                                                                </div>


                                                                <div class="attach-files" id="messagefile">
                                                                   
                                                                </div>

                                                                
                                                            </div>
                                                        </div>
                                                        <!-- .nk-reply-item -->
                                                    </div>
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

                    <form action="{{ route('compose mail') }}" method="POST" enctype="multipart/form-data">
                        @csrf
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
                                            <input type="hidden" name="name" value="{{ Auth::user()->name }}">
                                            <input type="hidden" name="sender" value="{{ Auth::user()->email }}">
                                            <input name="receiver" type="text" class="input-mail tagify" placeholder="Recipient" data-whitelist="info@rootofjessephc.com, support@rootofjessephc.com, contact@rootofjessephc.com" required>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="nk-reply-form-editor">
                                <div class="nk-reply-form-field">
                                    <input type="text" name="subject" class="form-control form-control-simple" placeholder="Subject"  required>
                                </div>
                                <div class="nk-reply-form-field">
                                    <textarea name="message" id="summernote" class="form-control form-control-simple no-resize ex-large" placeholder="Compose message"></textarea>
                                </div>

                                <div class="nk-reply-form-field">
                                    <input type="file" name="file" id="file" class="form-control">

                                </div>
                            </div><!-- .nk-reply-form-editor -->
                            <div class="nk-reply-form-tools">
                                <ul class="nk-reply-form-actions g-1">
                                    <li class="mr-2">
                                        <button class="btn btn-primary" type="submit">Send</button>
                                    </li>
                                    
                                    <li>
                                        <a class="btn btn-icon btn-sm" data-toggle="tooltip" data-placement="top" title="Upload Attachment" href="javascript:void(0)" onclick="$('#file').click()"><em class="icon ni ni-clip-v"></em></a>
                                    </li>
                                    
                                </ul>
                            </div><!-- .nk-reply-form-tools -->
                        </div><!-- .modal-body -->

                    </form>


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

    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#summernote').summernote({
                placeholder: 'Compose message',
                tabsize: 2,
                height: 200
            });
        });


        function showMessage(id){
            $("#messagecontent").html("");
            $("#messagefile").html("");
            var current_index = $('#current_index'+id).val();
            var route = "{{ route('openmessage') }}";
            var formData = new FormData();
            formData.append("id", current_index);

            
                    setHeaders();
                    jQuery.ajax({
                    url: route,
                    method: 'post',
                    data: formData,
                    cache: false,
                    processData: false,
                    contentType: false,
                    dataType: 'JSON',
                    success: function(result){

                        if(result.message == "success"){
                            var res = result.data;

                            $("#messagecontent").html(res.message);

                            if (res.file != null) {

                                var filelink = "/rootjesse/"+res.file;

                                $("#messagefile").html("<ul class='attach-list'><li class='attach-item'><a class='download' href='"+filelink+"'><em class='icon ni ni-img'></em><span>"+res.file+"</span></a></li></ul>");
                            }


                        }
                        else{
                            Swal.fire("Oops", "Cannot fetch this message", "error");
                        }
                    },
                    error: function(err) {

                        Swal.fire("Oops", err.responseJSON.message, "error");
                    }

                    });

        }

        //Set CSRF HEADERS
        function setHeaders(){

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                }
                });
            
        }

    </script>

    @include('includes.message')
    @include('includes.alert')

</body>

</html>