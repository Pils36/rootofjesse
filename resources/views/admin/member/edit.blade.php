@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">Members</h4>
                            <div class="nk-block-des">
                                <p>Update church members, assign a follow up team</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('members list') }}" class="btn btn-round btn-danger"><span>All Members</span><em class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Fill up the information below</h5>
                    </div>
                    <form action="{{ route('edit new members', $data['member']->id) }}" class="gy-3" method="POST" enctype="multipart/form-data">
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
                                            <option value="Bro" {{ ($data['member']->title == "Bro") ? "selected" : "" }}>Bro</option>
                                            <option value="Elder" {{ ($data['member']->title == "Elder") ? "selected" : "" }}>Elder</option>
                                            <option value="Mr" {{ ($data['member']->title == "Mr") ? "selected" : "" }}>Mr</option>
                                            <option value="Mrs" {{ ($data['member']->title == "Mrs") ? "selected" : "" }}>Mrs</option>
                                            <option value="Pastor" {{ ($data['member']->title == "Pastor") ? "selected" : "" }}>Pastor</option>
                                            <option value="Sis" {{ ($data['member']->title == "Sis") ? "selected" : "" }}>Sis</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Full Name</label>
                                    <span class="form-note">Enter your member fullname.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="name" value="{{ $data['member']->name }}" required>
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
                                        <input type="email" name="email" class="form-control" id="email" value="{{ $data['member']->email }}" required>
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
                                        <input type="telephone" name="telephone" class="form-control" id="telephone" value="{{ $data['member']->telephone }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Address</label>
                                    <span class="form-note">Please provide members home address.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="address" class="form-control" id="address" value="{{ $data['member']->address }}" required>
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
                                        <select name="day" id="day" class="form-control">
                                            <option value="">Select Day</option>
                                            @for ($i = 1; $i <= 31; $i++)
                                                <option value="{{ $i }}" {{ ($data['member']->day == $i) ? "selected" : "" }}>{{ $i }}</option>
                                            @endfor
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <select name="month" id="month" class="form-control">
                                            <option value="">Select Month</option>
                                            @for ($i = 1; $i <= 12; $i++)
                                                <option value="{{ $i }}" {{ ($data['member']->month == $i) ? "selected" : "" }}>{{ $i }}</option>
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
                                        <input type="text" name="who_invited_you" class="form-control" id="who_invited_you" value="{{ $data['member']->who_invited_you }}">
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
                                            <option value="Visitor" {{ ($data['member']->status == "Visitor") ? "selected" : "" }}>Visitor</option>
                                            <option value="Existing member" {{ ($data['member']->status == "Existing member") ? "selected" : "" }}>Existing member</option>
                                            <option value="First timer" {{ ($data['member']->status == "First timer") ? "selected" : "" }}>First timer</option>
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
                                        <textarea name="prayer_request" id="prayer_request" cols="30" rows="10" class="form-control">{{ $data['member']->prayer_request }}</textarea>
                                    </div>
                                </div>
                            </div>
                        </div>



                        <div class="row g-3 align-center">
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
                                            @if (count($data['team']) > 0)
                                            <option value="">Select Staff</option>

                                                @foreach ($data['team'] as $teams)
                                                    <option value="{{ $teams->id }}">{{ $teams->name }}</option>
                                                @endforeach
                                            @endif
                                            
                                        </select>
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
