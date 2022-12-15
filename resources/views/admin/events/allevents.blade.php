@extends('layouts.dashboard')

@section('content')
    <div class="nk-content-wrap">
        <div class="nk-block-head nk-block-head-sm">
            <div class="nk-block-between">
                <div class="nk-block-head-content">
                    <h3 class="nk-block-title page-title">All Events</h3>
                    <div class="nk-block-des text-soft">
                        <p>View, Edit and Delete Events</p>
                    </div>
                </div><!-- .nk-block-head-content -->
                <div class="nk-block-head-content">
                    <div class="toggle-wrap nk-block-tools-toggle">
                        <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                        <div class="toggle-expand-content" data-content="pageMenu">
                            <ul class="nk-block-tools g-3">
                                <li><a href="{{ route('upload events') }}" class="btn btn-round btn-outline-danger"><span>Upload Events</span><em class="icon ni ni-plus"></em></a></li>
                                <li class="nk-block-tools-opt">
                                    <div class="drodown">
                                        <a href="#" class="dropdown-toggle btn btn-icon btn-primary" data-toggle="dropdown"><em class="icon ni ni-plus"></em></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <ul class="link-list-opt no-bdr">
                                                <li><a href="{{ route('upload events') }}"><span>Upload Events</span></a></li>
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

        <div class="nk-block nk-block-lg">

            <div class="row g-gs">


                @if (count($data['events']) > 0)

                @foreach ($data['events'] as $item)

                    <div class="col-sm-6 col-xl-5">
                        <div class="card card-bordered">
                            <div class="card-inner">
                                <div class="team">
                                    <div class="team-options">
                                        <div class="drodown">
                                            <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <ul class="link-list-opt no-bdr">
                                                    <li><a href="{{ route('view event', $item->id) }}"><em class="icon ni ni-focus"></em><span>Quick View</span></a></li>
                                                    <li><a href="{{ route('edit event', $item->id) }}"><em class="icon ni ni-edit-alt-fill"></em><span>Edit</span></a></li>
                                                    <li><a href="javascript:void(0)" onclick="deleteData('event_data', '{{ $item->id }}')"><em class="icon ni ni-trash-alt"></em><span>Delete</span></a></li>

                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="user-card user-card-s2">
                                        <div class="user-avatar lg bg-primary">
                                            <img src="{{ $item->image }}" alt="{{ $item->name }}">
                                            <div class="status dot dot-lg dot-success"></div>
                                        </div>
                                        <div class="user-info">
                                            <h6 title="{{ $item->name }}">{{ (strlen($item->name) < 15) ? $item->name : substr($item->name, 0, 15)."..." }}</h6>
                                            <span class="sub-text" title="{{ $item->description }}">{!! (strlen($item->description) < 50) ? $item->description : substr($item->description, 0, 50)."..." !!}</span>
                                        </div>
                                    </div>
                                    <ul class="team-info">
                                        <li><span>Location</span><span>{{ (strlen($item->location) < 15) ? $item->location : substr($item->location, 0, 15)."..." }}</span></li>
                                        <li><span class="text-primary" style="font-weight: bold;">Date</span><span class="text-primary" style="font-weight: bold;">{{ (strlen($item->event_date) < 15) ? $item->event_date : substr($item->event_date, 0, 15)."..." }}</span></li>
                                        <li><span>Status</span><span>{{ ($item->status == "on") ? "Published" : "Unpublished" }}</span></li>
                                        <li><span>When added</span><span>{{ $item->created_at->diffForHumans() }}</span></li>
                                    </ul>
                                    <div class="team-view">
                                        <a href="{{ route('view event', $item->id) }}" class="btn btn-block btn-dim btn-primary"><span>Quick View</span></a>
                                    </div>
                                </div><!-- .team -->
                            </div><!-- .card-inner -->
                        </div><!-- .card -->
                    </div><!-- .col -->


                        <button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#modalZoom{{ $item->id }}" id="event_data{{ $item->id }}">Modal Zoom</button>

                        <div class="modal fade zoom" tabindex="-1" id="modalZoom{{ $item->id }}">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">{{ $item->name }}</h5>
                                        <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                                            <em class="icon ni ni-cross"></em>
                                        </a>
                                    </div>
                                    <div class="modal-body">
                                        <h3>Are you sure you want to delete?</h3>
                                        <p>Please note that when you delete this event, you will not be able to recover it.</p>
                                    </div>
                                    <div class="modal-footer bg-light">
                                        <form action="{{ route('delete event', $item->id) }}" method="post">
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
                <div class="col-lg-12">
                            <div class="card text-white bg-secondary">
                                <div class="card-header">No new Event</div>
                                <div class="card-inner">
                                    <h5 class="card-title">You have not uploaded any event.</h5>
                                    <p class="card-text"><a href="{{ route('upload events') }}" class="btn btn-primary">Click here to upload event </a></p>
                                </div>
                            </div>
                        </div>

                @endif

            </div>
        </div><!-- .nk-block -->
    </div>
@endsection
