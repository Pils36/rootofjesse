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
                        <div class="nk-block-head-sub"><span>Account Setting</span></div>
                        <h2 class="nk-block-title fw-normal">My Profile</h2>
                        <div class="nk-block-des">
                            <p>You have full control to manage your own account setting. <span class="text-primary"><em class="icon ni ni-info"></em></span></p>
                        </div>
                    </div>
                </div><!-- .nk-block-head -->
                <ul class="nk-nav nav nav-tabs">
                    <li class="nav-item">
                        <a class="nav-link" href="javascript:void()">Personal</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('settings') }}">Settings</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('activity') }}">Activities</a>
                    </li>
                </ul><!-- nav-tabs -->
                <div class="nk-block">
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Personal Information</h5>
                            <div class="nk-block-des">
                                <p>Basic info, like your name and address.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="card card-bordered">
                        <div class="nk-data data-list">
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Full Name</span>
                                    <span class="data-value">{{ Auth::user()->title.' '.Auth::user()->name }}</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Email</span>
                                    <span class="data-value">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                            </div><!-- .data-item -->
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Phone Number</span>
                                    <span class="data-value text-soft">{{ Auth::user()->telephone }}</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div><!-- .data-item -->
                            
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">Role</span>
                                    <span class="data-value">{{ strtoupper(Auth::user()->role) }}</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div><!-- .data-item -->
                            
                            <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                <div class="data-col">
                                    <span class="data-label">
                                        <a href="javascript:void(0)" class="btn btn-primary" onclick="$('#profile_update').click()">Edit Profile</a>
                                    </span>
                                    <span class="data-value">&nbsp;</span>
                                </div>
                                
                            </div><!-- .data-item -->
                        </div><!-- .nk-data -->



                        
                    </div><!-- .card -->


                    <!-- Another Section -->
                    <div class="nk-block-head">
                        <div class="nk-block-head-content">
                            <h5 class="nk-block-title">Personal Preferences</h5>
                            <div class="nk-block-des">
                                <p>Your personalized preference allows you best use.</p>
                            </div>
                        </div>
                    </div><!-- .nk-block-head -->
                    <div class="card card-bordered">
                        <div class="nk-data data-list">
                            <div class="data-item">
                                <div class="data-col">
                                    <span class="data-label">Language</span>
                                    <span class="data-value">English (United State)</span>
                                </div>
                                <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                            </div><!-- .data-item -->
                            
                        </div><!-- .nk-data -->
                    </div><!-- .card -->
                </div><!-- .nk-block -->
            </div>



            {{--  Update Profile Information  --}}
            <button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#modalZoom" id="profile_update">Modal Zoom</button>

            <div class="modal fade zoom" tabindex="-1" id="modalZoom">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Update Profile</h5>
                            <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                <em class="icon ni ni-cross"></em>
                            </a>
                        </div>
                        <div class="modal-body">
                            <h4>Update your name and phone number</h4>
                        </div>
                        <div class="modal-footer bg-light">
                            <form action="{{ route('update profile') }}" method="post">
                                @csrf

                                <input type="hidden" name="id" value="{{ Auth::user()->id }}">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label for="title"><b>Title</b></label>
                                                <select name="title" id="title" required class="form-control">
                                                    <option value="">Select Title</option>
                                                    <option value="Bro" {{ (Auth::user()->title == "Bro") ? "selected" : "" }}>Bro</option>
                                                    <option value="Elder" {{ (Auth::user()->title == "Elder") ? "selected" : "" }}>Elder</option>
                                                    <option value="Mr" {{ (Auth::user()->title == "Mr") ? "selected" : "" }}>Mr</option>
                                                    <option value="Mrs" {{ (Auth::user()->title == "Mrs") ? "selected" : "" }}>Mrs</option>
                                                    <option value="Pastor" {{ (Auth::user()->title == "Pastor") ? "selected" : "" }}>Pastor</option>
                                                    <option value="Sis" {{ (Auth::user()->title == "Sis") ? "selected" : "" }}>Sis</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label for="name"><b>Name</b></label>
                                                <input type="text" name="name" class="form-control" id="name" value="{{ Auth::user()->name }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <div class="form-control-wrap">
                                                <label for="telephone"><b>Phone Number</b></label>
                                                <input type="text" name="telephone" class="form-control" id="telephone" value="{{ Auth::user()->telephone }}" required>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 mt-3">
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-lg btn-danger">Update Profile</button>
                                        </div>
                                    </div>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

@endsection