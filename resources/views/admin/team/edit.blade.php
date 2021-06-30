@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">Team Members</h4>
                            <div class="nk-block-des">
                                <p>Update Team Member or change their role</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('team member') }}" class="btn btn-round btn-danger"><span>Team Members</span><em class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Fill up the information below</h5>
                    </div>
                    <form action="{{ route('create new team') }}" class="gy-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="sermon-title"><span class="text-danger font-weight-bold">*</span> Title</label>
                                    <span class="form-note">Specify the title associated to this member</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="title" id="title" required class="form-control">
                                            <option value="">Select Title</option>
                                            <option value="Bro" {{ ($data['team']->title == "Bro") ? "selected" : "" }}>Bro</option>
                                            <option value="Elder" {{ ($data['team']->title == "Elder") ? "selected" : "" }}>Elder</option>
                                            <option value="Mr" {{ ($data['team']->title == "Mr") ? "selected" : "" }}>Mr</option>
                                            <option value="Mrs" {{ ($data['team']->title == "Mrs") ? "selected" : "" }}>Mrs</option>
                                            <option value="Pastor" {{ ($data['team']->title == "Pastor") ? "selected" : "" }}>Pastor</option>
                                            <option value="Sis" {{ ($data['team']->title == "Sis") ? "selected" : "" }}>Sis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Fullname</label>
                                    <span class="form-note">Enter your member fullname.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $data['team']->name }}" required>
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
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $data['team']->email }}" required>
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
                                        <input type="telephone" name="telephone" class="form-control" id="telephone" value="{{ $data['team']->telephone }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="role"><span class="text-danger font-weight-bold">*</span> Role</label>
                                    <span class="form-note">Specify the role for member to play</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="role" id="role" required class="form-control">
                                            <option value="">Select Title</option>
                                            <option value="Staff" {{ ($data['team']->role == "Staff") ? "selected" : "" }}>Staff</option>
                                            <option value="Admin" {{ ($data['team']->role == "Admin") ? "selected" : "" }}>Admin</option>
                                            <option value="Volunteer" {{ ($data['team']->role == "Volunteer") ? "selected" : "" }}>Volunteer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Password</label>
                                    <span class="form-note">This password is auto-generated</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="password" class="form-control" id="password" value="{{ $data['team']->reveal_password }}" readonly>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Update and Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </div>





@endsection
