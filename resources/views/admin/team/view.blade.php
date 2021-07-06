@extends('layouts.dashboard')

<?php use \App\Http\Controllers\Members; ?>

@section('content')
        <div class="nk-content-body">
            <div class="nk-content-wrap">
                <div class="nk-block-head">
                    <div class="nk-block-head-content">
                        <h3 class="nk-block-title page-title">My Profile</h3>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting.</p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <div class="nk-block">
                    <div class="card card-bordered">
                        <ul class="nav nav-tabs nav-tabs-mb-icon nav-tabs-card">
                            <li class="nav-item">
                                <a class="nav-link active" href="javascipt:void(0)"><em class="icon ni ni-user-fill-c"></em><span>Personal</span></a>
                            </li>
                        </ul><!-- .nav-tabs -->
                        <div class="card-inner card-inner-lg">
                            <div class="nk-block-head">
                                <div class="nk-block-head-content">
                                    <h4 class="nk-block-title">Personal Information</h4>
                                    <div class="nk-block-des">
                                        <p>Basic info, like your name and address etc.</p>
                                    </div>
                                </div>
                            </div><!-- .nk-block-head -->

                            @if (isset($data['team']))
                                <div class="nk-block">
                                <div class="nk-data data-list data-list-s2">
                                    <div class="data-head">
                                        <h6 class="overline-title">Basics</h6>
                                    </div>
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Full Name</span>
                                            <span class="data-value">{{ $data['team']->title.' '.$data['team']->name }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                    
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Email</span>
                                            <span class="data-value">{{ $data['team']->email }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                    </div><!-- data-item -->
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                        <div class="data-col">
                                            <span class="data-label">Phone Number</span>
                                            <span class="data-value text-soft">{{ $data['team']->telephone }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                    
                                    <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                        <div class="data-col">
                                            <span class="data-label">Role</span>
                                            <span class="data-value">{{ $data['team']->role }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->
                                </div><!-- data-list -->
                                <div class="nk-data data-list data-list-s2">
                                    <div class="data-head">
                                        <h6 class="overline-title">Preferences</h6>
                                    </div>
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Date Added</span>
                                            <span class="data-value">{{ $data['team']->created_at->diffForHumans() }}</span>
                                        </div>
                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                    </div><!-- data-item -->

                                    @if ($allmembers = \App\Members::where('assigned_staff', $data['team']->name)->count())@endif
                                    
                                    <div class="data-item">
                                        <div class="data-col">
                                            <span class="data-label">Assigned Staff</span>
                                            <span class="data-value">{{ $allmembers }}</span>
                                        </div>
                                        @if ($allmembers > 0)
                                            <div class="data-col data-col-end"><a href="#" data-toggle="modal" data-target="#profile-language" class="link link-primary">View members</a></div>
                                        @endif
                                    </div><!-- data-item -->
                                </div><!-- data-list -->
                            </div><!-- .nk-block -->
                            @else
                                <h4 class="nk-block-title text-center">Record Not Found</h4>
                            @endif

                        </div><!-- .card-inner -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>
        </div>
@endsection