@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">Pastor's Message and Sermons</h4>
                            <div class="nk-block-des">
                                <p>You can upload messages from the preachers here and will be visible to users all over the world</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('uploaded sermons') }}" class="btn btn-round btn-danger"><span>All Sermons</span><em class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Fill up the information below</h5>
                    </div>
                    <form action="{{ route('publish message') }}" class="gy-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="sermon-title"><span class="text-danger font-weight-bold">*</span> Title</label>
                                    <span class="form-note">Specify the title of the sermon</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="title" class="form-control" id="sermon-title" value="{{ $data['messages']->title }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Minister</label>
                                    <span class="form-note">Specify the preacher of the sermon.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="text" name="minister" class="form-control" id="sermon-minister" value="{{ $data['messages']->minister }}" required>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Album Art</label>
                                    <span class="form-note">Upload the sermon cover picture.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            <input type="file" name="album_art" class="custom-file-input" id="customFile">
                                            <label class="custom-file-label" for="customFile">Choose file</label>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>


                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Message Category</label>
                                    <span class="form-note">Group message in series.</span>
                                </div>
                            </div>

                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="custom-file">
                                            {{--  <select name="category" id="category" required class="form-control">
                                                <option value="">Select Category</option>
                                                <option value="Manifest" {{ ($data['messages']->category == "Manifest") ? "selected" : "" }}>Manifest</option>
                                                <option value="Relationship" {{ ($data['messages']->category == "Relationship") ? "selected" : "" }}>Relationship</option>
                                                <option value="Mount Up On Wings" {{ ($data['messages']->category == "Mount Up On Wings") ? "selected" : "" }}>Mount Up On Wings</option>
                                            </select>  --}}

                                            <select name="category" id="category" required class="form-control">
                                                @if (count($data['messagesCategory']) > 0)
                                                    <option value="">Select Category</option>
                                                    @foreach ($data['messagesCategory'] as $categories)
                                                        <option value="{{ $categories->name }}" {{ ($categories->name == $data['messages']->category) ? "selected" : "" }}>{{ $categories->name }}</option>
                                                    @endforeach
                                                    
                                                @else
                                                    <option value="">No category created yet</option>
                                                    
                                                @endif
                                            </select>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        
                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Upload Sermon</label>
                                    <span class="form-note">Select sermon from file manager and upload</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <input type="hidden" name="post_id" value="{{ $data['messages']->post_id }}" id="post_id">
                                        <div class="upload-zone" data-max-files="1">
                                            <div class="dz-message" data-dz-message>
                                                <span class="dz-message-text">Drag and drop file</span>
                                                <span class="dz-message-or">or</span>
                                                <button type="button" class="btn btn-primary">SELECT</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label"><span class="text-danger font-weight-bold">*</span> Description</label>
                                    <span class="form-note">Write an short note about sermon</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <textarea class="form-control form-control-sm" name="description" id="cf-default-textarea" placeholder="Short note about sermon" required>{{ $data['messages']->description }}</textarea>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="row g-3 align-center">
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-label" for="site-off">Publish Sermon</label>
                                    <span class="form-note">Enable to make sermon published.</span>
                                </div>
                            </div>
                            <div class="col-lg-7">
                                <div class="form-group">
                                    <div class="custom-control custom-switch">
                                        <input type="checkbox" class="custom-control-input" name="publish" id="site-off" {{ ($data['messages']->publish) == "on" ? "checked" : "" }}>
                                        <label class="custom-control-label" for="site-off">Publish</label>
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
