@extends('layouts.dashboard')

<style>
    label{
            margin-bottom: 0px !important;
    }
</style>


@section('content')
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <h2 class="nk-block-title fw-normal">Account Setting</h2>
                    <div class="nk-block-des">
                        <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <ul class="nk-nav nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile') }}">Personal</a>
                </li>
                
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('activity') }}">Activities</a>
                </li>
            </ul><!-- nav-tabs -->
            <div class="nk-block">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h5 class="nk-block-title title">Security Settings</h5>
                        <div class="nk-block-des">
                            <p>These settings are helps you keep your account secure.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="card card-bordered">
                    <div class="card-inner-group">
                        <div class="card-inner disp-0">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>Save my Activity Logs</h6>
                                    <p>You can save your all activity logs including unusual activity detected.</p>
                                </div>
                                <div class="nk-block-actions">
                                    <ul class="align-center gx-3">
                                        <li class="order-md-last">
                                            <div class="custom-control custom-switch mr-n2">
                                                <input type="checkbox" class="custom-control-input" checked="" id="activity-log">
                                                <label class="custom-control-label" for="activity-log"></label>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-card-inner -->
                        <div class="card-inner">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>Change Password</h6>
                                    <p>Set a unique password to protect your account.</p>
                                </div>
                                <div class="nk-block-actions flex-shrink-sm-0">
                                    <ul class="align-center flex-wrap flex-sm-nowrap gx-3 gy-2">
                                        <li class="order-md-last">
                                            <a href="javascript:void(0)" class="btn btn-primary" onclick="$('#password_change').click()">Change Password</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div><!-- .nk-card-inner -->
                        <div class="card-inner disp-0">
                            <div class="between-center flex-wrap flex-md-nowrap g-3">
                                <div class="nk-block-text">
                                    <h6>2FA Authentication <span class="badge badge-success">Enabled</span></h6>
                                    <p>Secure your account with 2FA security. When it is activated you will need to enter not only your password, but also a special code using app. You can receive this code by in mobile app. </p>
                                </div>
                                <div class="nk-block-actions">
                                    <a href="#" class="btn btn-primary">Disable</a>
                                </div>
                            </div>
                        </div><!-- .nk-card-inner -->
                    </div><!-- .nk-card-inner-group -->
                </div><!-- .nk-card -->
                <div class="nk-block-head nk-block-head-sm">
                    <div class="nk-block-head-content">
                        <div class="nk-block-title-group">
                            <h6 class="nk-block-title title">Recent Activity</h6>
                            <a href="{{ route('activity') }}" class="link">See full log</a>
                        </div>
                        <div class="nk-block-des">
                            <p>This information about the last login activity on your account.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="card card-bordered">
                    <table class="table table-ulogs">
                        <thead class="thead-light">
                            <tr>
                                <th class="tb-col-os"><span class="overline-title">Browser <span class="d-sm-none">/ IP</span></span></th>
                                <th class="tb-col-ip"><span class="overline-title">IP</span></th>
                                <th class="tb-col-time"><span class="overline-title">Time</span></th>
                            </tr>
                        </thead>
                        <tbody>
                            @if (count($data['loginActivity']) > 0)
                                @foreach ($data['loginActivity'] as $loginactivity)
                                    <tr>
                                        <td class="tb-col-os">{{ strtoupper($loginactivity->browser) }}</td>
                                        <td class="tb-col-ip"><span class="sub-text">{{ $loginactivity->ip_address }}</span></td>
                                        <td class="tb-col-time"><span class="sub-text">{{ date('d-M-Y h:i A', strtotime($loginactivity->created_at)) }}</span></td>
                                    </tr>
                                @endforeach
                                
                            @else
                                <tr>
                                    <td class="tb-col-os" colspan="3" align="center">No Record</td>
                                </tr>
                            @endif
                        </tbody>
                    </table>
                </div><!-- .card -->
            </div><!-- .nk-block -->
        </div>



        {{--  Change Password Modal  --}}

        <button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#modalZoom" id="password_change">Modal Zoom</button>

            <div class="modal fade zoom" tabindex="-1" id="modalZoom">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Password Reset</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <h4>You are about to set a new password</h4>
                        </div>
                        <div class="modal-footer bg-light">
                            <form action="{{ route('update password') }}" method="post">
                                @csrf

                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label for="old_password"><b>Old Password</b></label>
                                                <input type="password" name="old_password" class="form-control" id="old_password" placeholder="Old Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label for="new_password"><b>New Password</b></label>
                                                <input type="password" name="new_password" class="form-control" id="new_password" placeholder="New Password" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-danger">Update Password</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection