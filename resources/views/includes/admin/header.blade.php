<div class="nk-header nk-header-fixed is-light">
                    <div class="container-lg wide-xl">
                        <div class="nk-header-wrap">
                            <div class="nk-header-brand">
                                <a href="{{ route('dasboard') }}" class="logo-link">
                                    <img class="logo-light logo-img" src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" srcset="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" alt="logo">
                                    <img class="logo-dark logo-img" src="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" srcset="https://res.cloudinary.com/the-root-of-jesse-phc/image/upload/v1667075047/site-image/roj_logo_ar2ior.png" alt="logo-dark">
                                </a>
                            </div><!-- .nk-header-brand -->
                            <div class="nk-header-tools">
                                <ul class="nk-quick-nav">
                                    <li class="dropdown user-dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
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

                                                        <a class="dark-switch" href="#" onclick="$('#changeTheme').submit()"><em class="icon ni ni-moon"></em><span>Dark Mode</span></a>
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
                                    <li class="dropdown notification-dropdown">
                                        <a href="#" class="dropdown-toggle nk-quick-nav-icon mr-lg-n1" data-toggle="dropdown">
                                            <div class="icon-status icon-status-info"><em class="icon ni ni-bell"></em></div>
                                        </a>
                                        <div class="dropdown-menu dropdown-menu-xl dropdown-menu-right dropdown-menu-s1">
                                            <div class="dropdown-head">
                                                <span class="sub-title nk-dropdown-title">Notifications</span>
                                                {{--  <a href="#">Mark All as Read</a>  --}}
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
                                                <a href="#">View All</a>
                                            </div>
                                        </div>
                                    </li><!-- .dropdown -->
                                    <li class="d-lg-none">
                                        <a href="#" class="toggle nk-quick-nav-icon mr-n1" data-target="sideNav"><em class="icon ni ni-menu"></em></a>
                                    </li>
                                </ul><!-- .nk-quick-nav -->
                            </div><!-- .nk-header-tools -->
                        </div><!-- .nk-header-wrap -->
                    </div><!-- .container-fliud -->
                </div>
