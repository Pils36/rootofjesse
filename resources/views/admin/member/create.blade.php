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
                                <p>Create church members, assign a follow up team</p>
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
                    <form action="{{ route('create new memebers') }}" class="gy-3" method="POST" enctype="multipart/form-data">
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
                                            <option value="Bro">Bro</option>
                                            <option value="Elder">Elder</option>
                                            <option value="Mr">Mr</option>
                                            <option value="Mrs">Mrs</option>
                                            <option value="Pastor">Pastor</option>
                                            <option value="Sis">Sis</option>
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
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Samuel Mathew" required>
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
                                        <input type="email" name="email" class="form-control" id="email" placeholder="example@gmail.com" required>
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
                                        <input type="telephone" name="telephone" class="form-control" id="telephone" placeholder="08012345678" required>
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
                                        <input type="text" name="address" class="form-control" id="address" placeholder="Opposite YKC Fueling Station, Woji PHC" required>
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
                                        <input type="text" name="who_invited_you" class="form-control" id="who_invited_you" placeholder="Edidiong Gabriel">
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
                                            <option value="Visitor">Visitor</option>
                                            <option value="Existing member">Existing member</option>
                                            <option value="First timer">First timer</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                        </div>


                        {{--  <div class="row g-3 align-center specify_state disp-0">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Specify Status</label>
                                    <span class="form-note">Please specify their current status</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="specify_status" class="form-control" id="specify_status" placeholder="Passing by">
                                    </div>
                                </div>
                            </div>
                        </div>  --}}



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
                                    <button type="submit" class="btn btn-lg btn-primary">Submit and Save</button>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    {{--  Upload by Excel  --}}
                                    <a href="javascript:void(0)"><em class="icon ni ni-file-xls" style="font-size: 40px;"></em> Click here to upload Excel sheet</a>
                                </div>
                            </div>
                        </div>

                    </form>
                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </div>





@endsection
