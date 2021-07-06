@extends('layouts.dashboard')

<?php use \App\Http\Controllers\User; ?>

@section('content')
    <!-- content @s -->
    <div class="nk-content ">
        <div class="container-fluid">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">All Members</h3>
                                <div class="nk-block-des text-soft">
                                    <p>You have a record of {{ count($data['member']) }} members</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
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
                                <div class="card-inner position-relative card-tools-toggle">
                                    <div class="card-title-group">
                                        <div class="card-tools">
                                            <div class="form-inline flex-nowrap gx-3">
                                                <div class="form-wrap w-150px">
                                                    <select class="form-select form-select-sm" data-search="off" data-placeholder="Bulk Action">
                                                        <option value="">Bulk Action</option>
                                                        <option value="delete">Delete Member</option>
                                                    </select>
                                                </div>
                                                <div class="btn-wrap">
                                                    <span class="d-none d-md-block"><button class="btn btn-dim btn-outline-light">Apply</button></span>
                                                    <span class="d-md-none"><button class="btn btn-dim btn-outline-light btn-icon disabled"><em class="icon ni ni-arrow-right"></em></button></span>
                                                </div>
                                            </div><!-- .form-inline -->
                                        </div><!-- .card-tools -->
                                        <div class="card-tools mr-n1">
                                            <ul class="btn-toolbar gx-1">
                                                <li>
                                                    <a href="#" class="btn btn-icon search-toggle toggle-search" data-target="search"><em class="icon ni ni-search"></em></a>
                                                </li><!-- li -->
                                                {{-- <li class="btn-toolbar-sep"></li><!-- li --> --}}
                                                <li>
                                                    <div class="toggle-wrap">
                                                        <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-menu-right"></em></a>
                                                        <div class="toggle-content" data-content="cardTools">
                                                            <ul class="btn-toolbar gx-1">
                                                                <li class="toggle-close">
                                                                    <a href="#" class="btn btn-icon btn-trigger toggle" data-target="cardTools"><em class="icon ni ni-arrow-left"></em></a>
                                                                </li><!-- li -->
                                                                
                                                                
                                                            </ul><!-- .btn-toolbar -->
                                                        </div><!-- .toggle-content -->
                                                    </div><!-- .toggle-wrap -->
                                                </li><!-- li -->
                                            </ul><!-- .btn-toolbar -->
                                        </div><!-- .card-tools -->
                                    </div><!-- .card-title-group -->
                                    <div class="card-search search-wrap" data-search="search">
                                        <div class="card-body">
                                            <div class="search-content">
                                                <a href="#" class="search-back btn btn-icon toggle-search" data-target="search"><em class="icon ni ni-arrow-left"></em></a>
                                                <input type="text" class="form-control border-transparent form-focus-none" placeholder="Search by user or email">
                                                <button class="search-submit btn btn-icon"><em class="icon ni ni-search"></em></button>
                                            </div>
                                        </div>
                                    </div><!-- .card-search -->
                                </div><!-- .card-inner -->
                                <div class="card-inner p-0">
                                    <div class="nk-tb-list nk-tb-ulist is-compact">
                                        <div class="nk-tb-item nk-tb-head">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext disp-0">
                                                    <input type="checkbox" class="custom-control-input" id="uid">
                                                    <label class="custom-control-label" for="uid"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col"><span class="sub-text">Full Name</span></div>
                                            <div class="nk-tb-col tb-col-sm"><span class="sub-text">Email</span></div>
                                            <div class="nk-tb-col tb-col-md"><span class="sub-text">Phone</span></div>
                                            <div class="nk-tb-col"><span class="sub-text">Status</span></div>
                                            <div class="nk-tb-col nk-tb-col-tools text-right">
                                                <div class="dropdown">
                                                    <a href="#" class="btn btn-xs btn-outline-light btn-icon dropdown-toggle" data-toggle="dropdown" data-offset="0,5"><em class="icon ni ni-plus"></em></a>
                                                    
                                                </div>
                                            </div>
                                        </div><!-- .nk-tb-item -->

                                        @if (count($data['member']) > 0)

                                        @foreach ($data['member'] as $members)

                                        <div class="nk-tb-item">
                                            <div class="nk-tb-col nk-tb-col-check">
                                                <div class="custom-control custom-control-sm custom-checkbox notext">
                                                    <input type="checkbox" name="memberid[]" class="custom-control-input" id="memberid{{ $members->id }}">
                                                    <label class="custom-control-label" for="memberid{{ $members->id }}"></label>
                                                </div>
                                            </div>
                                            <div class="nk-tb-col">
                                                <div class="user-card">
                                                    <div class="user-avatar xs bg-primary">
                                                        <span>{{ strtoupper(Str::substr($members->name, 0, 2)) }}</span>
                                                    </div>
                                                    <div class="user-name">
                                                        <span class="tb-lead">{{ $members->title.'. '.$members->name }}</span>
                                                    </div>
                                                </div>
                                            </div>
                                            
                                            <div class="nk-tb-col tb-col-sm">
                                                <span>{{ $members->email }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span>{{ $members->telephone }}</span>
                                            </div>
                                            <div class="nk-tb-col tb-col-md">
                                                <span @if($members->status == "Visitor") class="tb-status text-info" @elseif($members->status == "Existing member") class="tb-status text-success" @else class="tb-status text-danger" @endif >{{ $members->status }}</span>
                                            </div>
                                            
                                            
                                            <div class="nk-tb-col nk-tb-col-tools">
                                                <ul class="nk-tb-actions gx-2">
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Quick view" onclick="$('#quick_view{{ $members->id }}').click()">
                                                            <em class="icon ni ni-user-fill-c"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="#" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Send Email">
                                                            <em class="icon ni ni-mail-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="{{ route('edit church member', $members->id) }}" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Edit">
                                                            <em class="icon ni ni-edit-alt-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li class="nk-tb-action-hidden">
                                                        <a href="javascript:void(0)" class="btn btn-sm btn-icon btn-trigger" data-toggle="tooltip" data-placement="top" title="Delete" onclick="deleteData('church_member', '{{ $members->id }}')">
                                                            <em class="icon ni ni-user-cross-fill"></em>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <div class="drodown">
                                                            <a href="#" class="btn btn-sm btn-icon btn-trigger dropdown-toggle" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                            <div class="dropdown-menu dropdown-menu-right">
                                                                <ul class="link-list-opt no-bdr">
                                                                    <li><a href="{{ route('view member', $members->id) }}"><em class="icon ni ni-eye"></em><span>View details</span></a></li>
                                                                    <li><a href="#"><em class="icon ni ni-mail"></em><span>Send Email</span></a></li>
                                                                    <li><a href="{{ route('edit church member', $members->id) }}"><em class="icon ni ni-edit-alt"></em><span>Edit</span></a></li>
                                                                    <li><a href="javascript:void(0)" onclick="deleteData('church_member', '{{ $members->id }}')"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>
                                                                    
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div><!-- .nk-tb-item -->



                                        {{-- Quick View --}}

                                        <button type="button" class="btn btn-secondary disp-0" data-toggle="modal" data-target="#modalTabs{{ $members->id }}" id="quick_view{{ $members->id }}">Quick Profile View</button>

                                        <!-- Modal Tabs -->
                                        <div class="modal fade" tabindex="-1" role="dialog" id="modalTabs{{ $members->id }}">
                                            <div class="modal-dialog modal-lg" role="document">
                                                <div class="modal-content">
                                                    <a href="#" class="close" data-dismiss="modal"><em class="icon ni ni-cross-sm"></em></a>
                                                    <div class="modal-body modal-body-md">
                                                        <h4 class="title">{{ $members->title.' '.$members->name }}</h4>
                                                        <ul class="nk-nav nav nav-tabs">
                                                            <li class="nav-item">
                                                                <a class="nav-link active" data-toggle="tab" href="#tabItem1">Information</a>
                                                            </li>
                                                            <li class="nav-item">
                                                                <a class="nav-link" data-toggle="tab" href="#tabItem2">Other Informations</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabItem1">
                                                                <h6 class="title">Personal Information</h6>
                                                                <div class="nk-block">
                                                                    <div class="nk-data data-list data-list-s2">
                                                                        <div class="data-head">
                                                                            <h6 class="overline-title">Basics</h6>
                                                                        </div>
                                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Full Name</span>
                                                                                <span class="data-value">{{ $members->title.' '.$members->name }}</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                        </div><!-- data-item -->
                                                                        
                                                                        <div class="data-item">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Email</span>
                                                                                <span class="data-value">{{ $members->email }}</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span class="data-more disable"><em class="icon ni ni-lock-alt"></em></span></div>
                                                                        </div><!-- data-item -->
                                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Phone Number</span>
                                                                                <span class="data-value text-soft">{{ $members->telephone }}</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                        </div><!-- data-item -->
                                                                        
                                                                        <div class="data-item" data-toggle="modal" data-target="#profile-edit" data-tab-target="#address">
                                                                            <div class="data-col">
                                                                                <span class="data-label">Address</span>
                                                                                <span class="data-value">{{ $members->address }}</span>
                                                                            </div>
                                                                            <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                        </div><!-- data-item -->
                                                                    </div><!-- data-list -->
                                                                    
                                                                </div><!-- .nk-block -->
                                                            </div>
                                                            <div class="tab-pane" id="tabItem2">
                                                                <h6 class="title">Contact Information</h6>
                                                                <div class="nk-data data-list data-list-s2">
                                                                    <div class="data-head">
                                                                        <h6 class="overline-title">Preferences</h6>
                                                                    </div>
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Who Invited You</span>
                                                                            <span class="data-value">{{ $members->who_invited_you }}</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                    </div><!-- data-item -->
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Current Status</span>
                                                                            <span class="data-value">{{ $members->status }}</span>
                                                                        </div>
                                                                        <div class="data-col data-col-end"><span class="data-more"><em class="icon ni ni-forward-ios"></em></span></div>
                                                                    </div><!-- data-item -->
                                                                    <div class="data-item">
                                                                        <div class="data-col">
                                                                            <span class="data-label">Assigned Staff</span>
                                                                            <span class="data-value">{{ $members->assigned_staff }}</span>
                                                                        </div>
                                                                        @if ($allmembers = \App\User::where('name', $members->assigned_staff)->first())

                                                                            @if (isset($allmembers))
                                                                                <div class="data-col data-col-end"><a href="{{ route('view team', $allmembers->id) }}" class="link link-primary">View staff</a></div>
                                                                                
                                                                            @endif

                                                                        @endif

                                                                        
                                                                    </div><!-- data-item -->
                                                                </div><!-- data-list -->
                                                            </div>
                                                        </div>

                                                        <button type="submit" class="btn btn-lg btn-danger" onclick="deleteData('church_member', '{{ $members->id }}')">Delete Member</button>

                                                    </div>

                                                </div>
                                            </div>
                                        </div> <!-- .modal -->




                                        <button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#modalZoom{{ $members->id }}" id="church_member{{ $members->id }}">Modal Zoom</button>

                                        <div class="modal fade zoom" tabindex="-1" id="modalZoom{{ $members->id }}">
                                            <div class="modal-dialog" role="document">
                                                <div class="modal-content">
                                                    <div class="modal-header">
                                                        <h5 class="modal-title">{{ $members->title.' '.$members->name }}</h5>
                                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                                            <em class="icon ni ni-cross"></em>
                                                        </a>
                                                    </div>
                                                    <div class="modal-body">
                                                        <h3>Are you sure you want to delete?</h3>
                                                        <p>Please note that when you delete member, their roles will be nullified and they will not be able to have access to the dashboard.</p>
                                                    </div>
                                                    <div class="modal-footer bg-light">
                                                        <form action="{{ route('delete member', $members->id) }}" method="post">
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
                                                {{ $data['member']->links() }}
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