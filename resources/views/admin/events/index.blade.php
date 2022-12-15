@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">ROJ Event all round</h4>
                            <div class="nk-block-des">
                                <p>You can upload upcoming and past events</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('uploaded events') }}" class="btn btn-round btn-danger"><span>All Events</span><em class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Fill up the information below</h5>
                    </div>
                    <form action="{{ route('publish event') }}" class="gy-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="event-name"><span class="text-danger font-weight-bold">*</span> Name</label>
                                    <span class="form-note">Specify the name of the event</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="name" class="form-control" id="event-name" placeholder="Doing Exploit" required>
                                        <input type="hidden" name="post_id" value="{{ time() }}" id="post_id">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Location</label>
                                    <span class="form-note">Where is the event happening</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="location" class="form-control" id="event-location" placeholder="ROJ, Portharcourt Nigeria" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Date</label>
                                    <span class="form-note">When is the event happening</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="event_date" class="form-control" id="event-date" placeholder="December 18th - 24th, 2022" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label">Link (Optional)</label>
                                    <span class="form-note">Provide a link for registration</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="link" class="form-control" id="event-link" placeholder="https://docs.google.com" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span>Image</label>
                                    <span class="form-note">Represent the event with a catching image</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="image" class="custom-file-input" id="customFile" required>
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Description</label>
                                    <span class="form-note">Write an short note about event</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-sm" name="description" id="cf-default-textarea" placeholder="Short note about sermon" required></textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="event-off">Publish Event</label>
                                    <span class="form-note">Enable to make event published.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="status" id="event-off">
                                        <label class="custom-control-label" for="event-off">Publish</label>
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
                    </form>
                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </div>





@endsection
