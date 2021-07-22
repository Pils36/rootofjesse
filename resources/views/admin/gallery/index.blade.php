@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">Photo Gallery</h4>
                            <div class="nk-block-des">
                                <p>Memorable moments with ROOT OF JESSE</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('uploaded gallery') }}" class="btn btn-round btn-danger"><span>All Gallery</span><em class="icon ni ni-chevron-right"></em></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="card-head">
                        <h5 class="card-title">Drag and Drop files</h5>
                    </div>
                    <form action="{{ route('dropzonegallery') }}" class="gy-3" method="POST" enctype="multipart/form-data">
                        @csrf
                        
                        <div class="row g-3 align-center">
                            
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <div class="form-control-wrap">
                                        <div class="upload-zone" data-max-files="10">
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

                        {{-- <div class="row g-3">
                            <div class="col-lg-7 offset-lg-5">
                                <div class="form-group mt-2">
                                    <button type="button" class="btn btn-lg btn-primary" id="processBtn">Submit and Save</button>
                                </div>
                            </div>
                        </div> --}}

                        

                        
                        
                    </form> 

                    <br>

                    <div class="progress disp-0"></div>

                </div>
            </div><!-- card -->
        </div><!-- .nk-block -->
    </div>





@endsection
