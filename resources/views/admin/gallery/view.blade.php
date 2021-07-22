@extends('layouts.dashboard')

<?php use \App\Http\Controllers\Members; ?>

@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Gallery</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have total {{ count($data['pictures']) }} Gallery</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content {{ (Auth::user()->role != "Super Admin") ? "disp-0" : "" }}">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">
                                            {{-- <li><a href="#" class="btn btn-white btn-outline-light"><em class="icon ni ni-download-cloud"></em><span>Export</span></a></li> --}}
                                            <li class="nk-block-tools-opt">
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">
                                                            <li><a href="{{ route('create team member') }}"><span>Add Team</span></a></li>
                                                            <li><a href="{{ route('create members') }}"><span>Add Member</span></a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="card card-bordered card-stretch">
                            <div class="card-inner-group">
                                
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext disp-0">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">Name</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">View Photo</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                    
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->

                                        @if (count($data['pictures']) > 0)

                                        @foreach ($data['pictures'] as $photos)

                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" name="photoid[]" class="custom-control-input" id="photoid{{ $photos->id }}">
                                                    <label class="custom-control-label" for="photoid{{ $photos->id }}"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        <span>{{ strtoupper(Str::substr($photos->name, 0, 2)) }}</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{ $photos->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>
                                                    <a href="{{ $photos->imageUrl }}" target="_blank">View Photo</a>
                                                </span>
                                            </div>
                                            
                                            
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-2">
                                                    
                                                    
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="deleteData('photo_album', '{{ $photos->id }}')">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    
                                                                    <li><a href="javascript:void(0)" onclick="deleteData('photo_album', '{{ $photos->id }}')"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->



                                        

                                        <button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#modalZoom{{ $photos->id }}" id="photo_album{{ $photos->id }}">Modal Zoom</button>

                                        <div class="modal fade zoom" tabindex="-1" id="modalZoom{{ $photos->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{ $photos->name }}</h5>
                                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3>Are you sure you want to delete?</h3>
                                                        <p>You can click on the Yes please! button to delete.</p>
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <form action="{{ route('delete photo', $photos->id) }}" method="post">
                                                            @csrf

                                                            <button type="submit" class="btn btn-lg btn-danger">Yes please!</button>
                                                            <a href="javascript:void(0)" onclick="$('.close').click()" class="btn btn-light">Oh, I can't delete this</a>
                                                        </form>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        
                                            
                                        @endforeach
                                            
                                        @else

                                        
                                            
                                        @endif


                                    </div><!-- .nk-tb-list -->
                                </div><!-- .card-inner -->
                                <div class="card-inner">

                                    <ul class="pagination justify-content-center justify-content-md-start">
                                        <li class="page-item">
                                                {{ $data['pictures']->links() }}
                                        </li>
                                    </ul><!-- .pagination -->
                                </div><!-- .card-inner -->
                            </div><!-- .card-inner-group -->
                        </div><!-- .card -->
                    </div><!-- .nk-block -->
                </div>
            </div>
        </div>
    </div>
    <!-- content @e -->
@endsection