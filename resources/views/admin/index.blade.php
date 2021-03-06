
@extends('layouts.dashboard')

@section('content')
    

    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-lg">
            @if (session('success'))

            <div class="example-alert">
                <div class="alert alert-success alert-icon alert-dismissible">
                    <em class="icon ni ni-check-circle"></em> <strong>{{ session("success") }}</strong> <button class="close" data-dismiss="alert"></button>
                </div>
            </div>

            @endif

            <div class="nk-block-between-md g-4">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Welcome, {{ Auth::user()->name }}</h2>
                    <div class="nk-block-des">
                        <p>Welcome to your dashboard. Manage your platform and other activities.</p>
                    </div>
                </div>
            </div>
        </div><!-- .nk-block-head -->
        <div class="nk-block">
            <div class="row g-gs">
                <div class="col-md-6">
                    <div class="card card-bordered card-full">
                        <div class="nk-wg1">
                            <div class="nk-wg1-block">
                                <div class="nk-wg1-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                        <rect x="5" y="7" width="60" height="56" rx="7" ry="7" fill="#e3e7fe"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <rect x="25" y="27" width="60" height="56" rx="7" ry="7" fill="#e3e7fe"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <rect x="15" y="17" width="60" height="56" rx="7" ry="7" fill="#fff"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <line x1="15" y1="29" x2="75" y2="29" fill="none" stroke="#6576ff"
                                            stroke-miterlimit="10" stroke-width="2" />
                                        <circle cx="53" cy="23" r="2" fill="#c4cefe" />
                                        <circle cx="60" cy="23" r="2" fill="#c4cefe" />
                                        <circle cx="67" cy="23" r="2" fill="#c4cefe" />
                                        <rect x="22" y="39" width="20" height="20" rx="2" ry="2" fill="none"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <circle cx="32" cy="45.81" r="2" fill="none" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <path d="M29,54.31a3,3,0,0,1,6,0" fill="none" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="49" y1="40" x2="69" y2="40" fill="none" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="49" y1="51" x2="69" y2="51" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="49" y1="57" x2="59" y2="57" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="64" y1="57" x2="66" y2="57" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="49" y1="46" x2="59" y2="46" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="64" y1="46" x2="66" y2="46" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </div>
                                <div class="nk-wg1-text">
                                    <h5 class="title">Personal Info</h5>
                                    <p>See your profile data and manage your Account to
                                        choose what is saved in our system.</p>
                                </div>
                            </div>
                            <div class="nk-wg1-action">
                                <a href="{{ route('profile') }}" class="link"><span>Manage Your Account</span>
                                    <em class="icon ni ni-chevron-right"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="card card-bordered card-full">
                        <div class="nk-wg1">
                            <div class="nk-wg1-block">
                                <div class="nk-wg1-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                        <path
                                            d="M26,70.78V24.5a7,7,0,0,1,7-7H69a9,9,0,0,1,9,9v49a7,7,0,0,1-7,7H16.55S25.72,78.89,26,70.78Z"
                                            fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <path
                                            d="M7,30.5H26a0,0,0,0,1,0,0V73.9a8.6,8.6,0,0,1-8.6,8.6H13.6A8.6,8.6,0,0,1,5,73.9V32.5a2,2,0,0,1,2-2Z"
                                            fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <circle cx="71.5" cy="21" r="13.5" fill="#fff" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <rect x="34" y="33.5" width="16" height="8" rx="1" ry="1" fill="#c4cefe" />
                                        <line x1="35" y1="46.5" x2="67" y2="46.5" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="53.5" x2="67" y2="53.5" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="59.5" x2="67" y2="59.5" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="64.5" x2="67" y2="64.5" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="71.5" x2="51" y2="71.5" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <path
                                            d="M75.24,23.79a5.2,5.2,0,0,1-6.42,2.57,5.78,5.78,0,0,1-3.26-7.25,5.25,5.25,0,0,1,6.8-3.47,5.35,5.35,0,0,1,2,1.34l2.75,2.75"
                                            fill="none" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <polyline points="77.75 16.61 77.75 20.61 73.75 20.61" fill="none"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" /></svg>
                                </div>
                                <div class="nk-wg1-text">
                                    <h5 class="title">Message and Sermons</h5>
                                    <p>You have full control to manage the sermons and messages uploaded.</p>
                                </div>
                            </div>
                            <div class="nk-wg1-action">
                                <a href="{{ route('upload message') }}" class="link"><span>Get Started</span> <em class="icon ni ni-chevron-right"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="card card-bordered card-full">
                        <div class="nk-wg1">
                            <div class="nk-wg1-block">
                                <div class="nk-wg1-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                        <path
                                            d="M68.14,80.86,30.21,72.69a5.93,5.93,0,0,1-4.57-7l12.26-56A6,6,0,0,1,45,5.14l28.18,6.07L85.5,29.51,75.24,76.33A6,6,0,0,1,68.14,80.86Z"
                                            fill="#eff1ff" stroke="#6576ff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <polyline points="73 12.18 69.83 26.66 85.37 30.08" fill="#eff1ff"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <path
                                            d="M66.26,71.15,29.05,82.46a6,6,0,0,1-7.46-4L4.76,23.15a6,6,0,0,1,4-7.47l27.64-8.4L56.16,17.39,70.24,63.68A6,6,0,0,1,66.26,71.15Z"
                                            fill="#e3e7fe" stroke="#6576ff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <polyline points="36.7 8.22 41.05 22.53 56.33 17.96" fill="#e3e7fe"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <path
                                            d="M68,85H29a6,6,0,0,1-6-6V21a6,6,0,0,1,6-6H58L74,30.47V79A6,6,0,0,1,68,85Z"
                                            fill="#fff" stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <polyline points="58 16 58 31 74 31.07" fill="#fff" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="45" y1="41" x2="61" y2="41" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="48" x2="61" y2="48" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="55" x2="61" y2="55" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="63" x2="61" y2="63" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <line x1="35" y1="69" x2="51" y2="69" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" /><text
                                            transform="translate(34.54 43.18) scale(0.99 1)" font-size="9.31"
                                            fill="#6576ff" font-family="Nunito-Black, Nunito Black">$</text></svg>
                                </div>
                                <div class="nk-wg1-text">
                                    <h5 class="title">Members Record</h5>
                                    <p>You can automatically upload an excel sheet in the provided format.</p>
                                </div>
                            </div>
                            <div class="nk-wg1-action">
                                <a href="{{ route('members list') }}" class="link"><span>View Members</span> <em
                                        class="icon ni ni-chevron-right"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
                <div class="col-md-6">
                    <div class="card card-bordered card-full">
                        <div class="nk-wg1">
                            <div class="nk-wg1-block">
                                <div class="nk-wg1-img">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 90 90">
                                        <path
                                            d="M40.74,5.16l38.67,9.23a6,6,0,0,1,4.43,7.22L70.08,80a6,6,0,0,1-7.17,4.46L24.23,75.22A6,6,0,0,1,19.81,68L33.56,9.62A6,6,0,0,1,40.74,5.16Z"
                                            fill="#eff1ff" stroke="#6576ff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <path
                                            d="M50.59,6.5,11.18,11.73a6,6,0,0,0-5.13,6.73L13.85,78a6,6,0,0,0,6.69,5.16l39.4-5.23a6,6,0,0,0,5.14-6.73l-7.8-59.49A6,6,0,0,0,50.59,6.5Z"
                                            fill="#eff1ff" stroke="#6576ff" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" />
                                        <rect x="15" y="15" width="54" height="70" rx="6" ry="6" fill="#fff"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <line x1="42" y1="77" x2="58" y2="77" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <circle cx="38" cy="77" r="0.5" fill="#c4cefe" stroke="#c4cefe"
                                            stroke-miterlimit="10" />
                                        <line x1="42" y1="72" x2="58" y2="72" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <circle cx="38" cy="72" r="0.5" fill="#c4cefe" stroke="#c4cefe"
                                            stroke-miterlimit="10" />
                                        <line x1="42" y1="66" x2="58" y2="66" fill="none" stroke="#c4cefe"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <circle cx="38" cy="66" r="0.5" fill="#c4cefe" stroke="#c4cefe"
                                            stroke-miterlimit="10" />
                                        <path d="M46,40l-15-.3V40A15,15,0,1,0,46,25h-.36Z" fill="#e3e7fe"
                                            stroke="#6576ff" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2" />
                                        <path d="M42,22A14,14,0,0,0,28,36H42V22" fill="#e3e7fe" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <polyline points="33.47 30.07 28.87 23 23 23" fill="none" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                        <polyline points="25 56 35 56 40.14 49" fill="none" stroke="#6576ff"
                                            stroke-linecap="round" stroke-linejoin="round" stroke-width="2" />
                                    </svg>
                                </div>
                                <div class="nk-wg1-text">
                                    <h5 class="title">Manage Team</h5>
                                    <p>Create and Assign tasks to your team, and receive their responses.</p>
                                </div>
                            </div>
                            <div class="nk-wg1-action">
                                <a href="{{ route('team member') }}" class="link"><span>Manage
                                        Team</span> <em class="icon ni ni-chevron-right"></em></a>
                            </div>
                        </div>
                    </div>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .nk-block -->


        @if (Auth::user()->role == "Super Admin")

        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-inner card-inner-md">
                    <div class="card-title-group">
                        <h6 class="card-title">New Members</h6>
                        <div class="card-action">
                            <a href="{{ route('members list') }}" class="link link-sm">See All <em
                                    class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
                <table class="table table-tranx">
                    <thead>
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">#</span></th>
                            <th class="tb-tnx-info">
                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                    <span>Full Name</span>
                                </span>
                                <span class="tb-tnx-date d-md-inline-block d-none">
                                    <span class="d-md-none">Date</span>
                                    <span class="d-none d-md-block">
                                        <span>Email</span>
                                        <span>Phone Number</span>
                                    </span>
                                </span>
                            </th>
                            <th class="tb-tnx-amount">
                                <span class="tb-tnx-total">Invited By</span>
                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                            </th>
                    </thead>
                    <tbody>

                        @if (count($data['members']) > 0)

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($data['members'] as $members)
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="javascript:void(0)"><span>{{ $i++ }}</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">{{ (strlen($members->name) < 15) ? $members->name : substr($members->name, 0, 15)."..." }}</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">{{ (strlen($members->email) < 15) ? $members->email : substr($members->email, 0, 15)."..." }}</span>
                                            <span class="date">{{ $members->telephone }}</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount">
                                        <div class="tb-tnx-total">

                                            <span class="date">{{ (strlen($members->who_invited_you) < 10) ? $members->who_invited_you : substr($members->who_invited_you, 0, 10)."..." }}</span>
                                            
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-success"><span @if($members->status == "Visitor") class="tb-status text-info" @elseif($members->status == "Existing member") class="tb-status text-success" @else class="tb-status text-danger" @endif >{{ $members->status }}</span></span>
                                        </div>
                                    </td>
                                </tr><!-- .tb-tnx-item -->
                            @endforeach
                        @else

                                <tr class="tb-tnx-item">
                                    <td colspan="6" align="center">No record</td>
                                </tr><!-- .tb-tnx-item -->
                            
                        @endif

                        
                        
                        
                    </tbody>
                </table>
            </div><!-- .card -->
        </div><!-- .nk-block -->
            
        @else

        <div class="nk-block">
            <div class="card card-bordered">
                <div class="card-inner card-inner-md">
                    <div class="card-title-group">
                        <h6 class="card-title">Assigned Members</h6>
                        <div class="card-action">
                            <a href="{{ route('members list') }}" class="link link-sm">See All <em
                                    class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
                <table class="table table-tranx">
                    <thead>
                        <tr class="tb-tnx-head">
                            <th class="tb-tnx-id"><span class="">#</span></th>
                            <th class="tb-tnx-info">
                                <span class="tb-tnx-desc d-none d-sm-inline-block">
                                    <span>Full Name</span>
                                </span>
                                <span class="tb-tnx-date d-md-inline-block d-none">
                                    <span class="d-md-none">Date</span>
                                    <span class="d-none d-md-block">
                                        <span>Email</span>
                                        <span>Phone Number</span>
                                    </span>
                                </span>
                            </th>
                            <th class="tb-tnx-amount">
                                <span class="tb-tnx-total">Invited By</span>
                                <span class="tb-tnx-status d-none d-md-inline-block">Status</span>
                            </th>
                    </thead>
                    <tbody>

                        @if (count($data['assignedmembers']) > 0)

                            @php
                                $i = 1;
                            @endphp

                            @foreach ($data['assignedmembers'] as $membersDetail)
                                <tr class="tb-tnx-item">
                                    <td class="tb-tnx-id">
                                        <a href="javascript:void(0)"><span>{{ $i++ }}</span></a>
                                    </td>
                                    <td class="tb-tnx-info">
                                        <div class="tb-tnx-desc">
                                            <span class="title">{{ (strlen($membersDetail->name) < 15) ? $membersDetail->name : substr($membersDetail->name, 0, 15)."..." }}</span>
                                        </div>
                                        <div class="tb-tnx-date">
                                            <span class="date">{{ (strlen($membersDetail->email) < 15) ? $membersDetail->email : substr($membersDetail->email, 0, 15)."..." }}</span>
                                            <span class="date">{{ $membersDetail->telephone }}</span>
                                        </div>
                                    </td>
                                    <td class="tb-tnx-amount">
                                        <div class="tb-tnx-total">

                                            <span class="date">{{ (strlen($membersDetail->who_invited_you) < 10) ? $membersDetail->who_invited_you : substr($membersDetail->who_invited_you, 0, 10)."..." }}</span>
                                            
                                        </div>
                                        <div class="tb-tnx-status">
                                            <span class="badge badge-dot badge-success"><span @if($membersDetail->status == "Visitor") class="tb-status text-info" @elseif($membersDetail->status == "Existing member") class="tb-status text-success" @else class="tb-status text-danger" @endif >{{ $membersDetail->status }}</span></span>
                                        </div>
                                    </td>
                                </tr><!-- .tb-tnx-item -->
                            @endforeach
                        @else

                                <tr class="tb-tnx-item">
                                    <td colspan="6" align="center">No record</td>
                                </tr><!-- .tb-tnx-item -->
                            
                        @endif

                        
                        
                        
                    </tbody>
                </table>
            </div><!-- .card -->
        </div><!-- .nk-block -->
            
        @endif
        
        
        


    </div>


   @endsection

