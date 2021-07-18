@extends('layouts.dashboard')


@section('content')
        <div class="nk-content-wrap">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="nk-block-head-sub"><a class="back-to" href="{{ route('profile') }}"><em class="icon ni ni-arrow-left"></em><span>My Profile</span></a></div>
                    <h2 class="nk-block-title fw-normal">Login Activity</h2>
                    <div class="nk-block-des">
                        <p>Here is your last 20 login activities log. <span class="text-soft"><em class="icon ni ni-info"></em></span></p>
                    </div>
                </div>
            </div><!-- .nk-block-head -->
            <div class="nk-block">
                <div class="nk-block-title-group mb-3">
                    <h6 class="nk-block-title title">Activity on your account</h6>
                    {{--  <a href="#" class="link link-danger">Clear log</a>  --}}
                </div>
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
@endsection