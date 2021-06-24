@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block nk-block-lg">
            <div class="nk-block-head">
                <div class="nk-block-head-content">
                    <div class="row">
                        <div class="col-md-9">
                            <h4 class="title nk-block-title">All Message and Sermons</h4>
                            <div class="nk-block-des">
                                <p>View, Edit and Delete Sermons</p>
                            </div>
                        </div>
                        <div class="col-md-3">
                            <a href="{{ route('upload message') }}" class="btn btn-round btn-danger"><em class="icon ni ni-chevron-left"></em><span>Go Back</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card card-bordered">
                <div class="card-inner">
                    <div class="row">
                        @if (count($data['messages']) > 0)

                        @foreach ($data['messages'] as $item)

                            <div class="col-lg-4">
                                <div class="card card-bordered">
                                    <img src="{{ $item->album_art }}" class="card-img-top" alt="{{ $item->title }}">
                                    <div class="card-inner">
                                        @if ($item->publish == "on")
                                            <span class="badge badge-pill badge-info">published</span>
                                        @else
                                            <span class="badge badge-pill badge-danger">unpublished</span>
                                        @endif
                                        <h5 class="card-title mt-1">{{ $item->title }}</h5>

                                        <p class="card-text">{{ (strlen($item->description) < 100) ? $item->description : substr($item->description, 0, 100)."..." }}</p>

                                        
                                        

                                        <div class="row">
                                            <div class="col-md-7">
                                                <a href="javascript:void()" class="btn btn-primary"><em class="icon ni ni-forward-alt-fill"></em> Play</a>
                                            </div>
                                            <div class="col-md-5">
                                                <div class="dropright">
                                                    <a class="btn btn-danger dropdown-toggle" href="#" type="button" data-toggle="dropdown">More <em class="icon ni ni-more-v"></em></a>
                                                    <div class="dropdown-menu">
                                                    <ul class="link-list-opt">
                                                        <li><a href="javascript:void()"><span>Edit</span></a></li>
                                                        <li><a href="javascript:void()"><span>Delete</span></a></li>
                                                    </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        

                                        

                                        
                                    </div>
                                </div>
                            </div>
                            
                        @endforeach
                            
                        @else
                            <div class="col-lg-12">
                            <div class="card text-white bg-secondary">
                                <div class="card-header">No new Message</div>
                                <div class="card-inner">
                                    <h5 class="card-title">You have not uploaded any message.</h5>
                                    <p class="card-text"><a href="{{ route('upload message') }}" class="btn btn-primary">Click here to upload message </a></p>
                                </div>
                            </div>
                        </div>


                        


                        @endif

                        {{-- Pagination --}}

                        

                    </div>
                </div>
            </div><!-- card -->
            <br>

            <nav>

                
                <ul class="pagination">
                    <li class="page-item" aria-current="page">{{ $data['messages']->links() }}</li>
                </ul>
            </nav>

        </div><!-- .nk-block -->
    </div>





@endsection
