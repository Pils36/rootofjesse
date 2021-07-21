@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">Message Category</h4>
                            <div class="nk-block-des">
                                <p>Create message categories here</p>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <a href="{{ route('message categories') }}" class="btn btn-round btn-danger"><span>Message Category</span><em class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Fill up the information below</h5>
                    </div>
                    <form action="{{ route('create new category') }}" class="gy-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row g-3 align-center">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Name</label>
                                    <span class="form-note">Enter your message series name.</span>
                                </div>
                            </div>
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="name" placeholder="Relationship" required>
                                    </div>
                                </div>
                            </div>
                        </div>

                        
                        <div class="row g-4">
                            <div class="col-lg-8 offset-lg-4">
                                <div class="form-group mt-2">
                                    <button type="submit" class="btn btn-lg btn-primary">Submit and Save</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </div>





@endsection
