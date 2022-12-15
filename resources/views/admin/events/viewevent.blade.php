@extends('layouts.dashboard')

@section('content')
    <!-- content @s -->
    <div class="nk-content-wrap">
            <div class="nk-content-inner">
                <div class="nk-content-body">
                    <div class="nk-block-head nk-block-head-sm">
                        <div class="nk-block-between">
                            <div class="nk-block-head-content">
                                <h3 class="nk-block-title page-title">Events</h3>
                                <div class="nk-block-des text-soft">
                                    <p>View event details or information</p>
                                </div>
                            </div><!-- .nk-block-head-content -->
                            <div class="nk-block-head-content">
                                <div class="toggle-wrap nk-block-tools-toggle">
                                    <a href="#" class="btn btn-icon btn-trigger toggle-expand mr-n1" data-target="pageMenu"><em class="icon ni ni-menu-alt-r"></em></a>
                                    <div class="toggle-expand-content" data-content="pageMenu">
                                        <ul class="nk-block-tools g-3">

                                            {{-- <li class="nk-block-tools-opt"><a href="#" class="btn btn-primary"><em class="icon ni ni-plus"></em><span>Add Project</span></a></li> --}}

                                            <li><a href="{{ route('uploaded events') }}" class="btn btn-round btn-outline-danger"><span>All Events</span><em class="icon ni ni-chevron-right"></em></a></li>
                                        </ul>
                                    </div>
                                </div><!-- .toggle-wrap -->
                            </div><!-- .nk-block-head-content -->
                        </div><!-- .nk-block-between -->
                    </div><!-- .nk-block-head -->
                    <div class="nk-block">
                        <div class="row g-gs">
                            <div class="col-sm-12 col-lg-12 col-xxl-6">
                                <div class="card card-bordered h-100">
                                    <div class="card-inner">
                                        <div class="project">
                                            <div class="project-head">
                                                <a href="javascript:void(0)" class="project-title">
                                                    <div class="user-avatar sq bg-purple"><span>{{ strtoupper(Str::substr($data['events']->name, 0, 2)) }}</span></div>
                                                    <div class="project-info">
                                                        <h6 class="title">{{ $data['events']->name }}</h6>
                                                        <small>
                                                            @if($data['events']->status == "on") <em class="icon ni ni-check-round-cut"></em><span class="text-primary">Published</span> @else <em class="icon ni ni-alert-circle"></em><span class="text-danger">Unpublished</span> @endif
                                                        </small>
                                                    </div>

                                                </a>
                                                <div class="drodown">
                                                    <a href="#" class="dropdown-toggle btn btn-sm btn-icon btn-trigger mt-n1 mr-n1" data-toggle="dropdown"><em class="icon ni ni-more-h"></em></a>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <ul class="link-list-opt no-bdr">

                                                            <li><a href="{{ route('edit event', $data['events']->id) }}"><em class="icon ni ni-edit"></em><span>Edit Event</span></a></li>
                                                            <li><a href="javascript:void(0)" onclick="deleteData('event_data', '{{ $data['events']->id }}')"><em class="icon ni ni-trash-alt"></em><span>Delete Event</span></a></li>

                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="project-details">
                                                {!! $data['events']->description !!}
                                            </div>
                                            <div class="project-meta">
                                                <span class="badge badge-dim badge-success"><em class="icon ni ni-clock"></em><span>{{ $data['events']->created_at->diffForHumans() }}</span></span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div><!-- .nk-block -->
                </div>
            </div>
    </div>
    <!-- content @e -->

    <button type="button" class="btn btn-primary disp-0" data-toggle="modal" data-target="#modalZoom" id="event_data{{ $data['events']->id }}">Modal Zoom</button>

    <div class="modal fade zoom" tabindex="-1" id="modalZoom">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">{{ $data['events']->name }}</h5>
                    <a href="#" class="close" data-dismiss="modal" aria-label="Close">
                        <em class="icon ni ni-cross"></em>
                    </a>
                </div>
                <div class="modal-body">
                    <h3>Are you sure you want to delete?</h3>
                    <p>Please note that when you delete this event, you will not be able to recover it.</p>
                </div>
                <div class="modal-footer bg-light">
                    <form action="{{ route('delete event', $data['events']->id) }}" method="post">
                        @csrf

                        <button type="submit" class="btn btn-lg btn-danger">Yes please!</button>
                        <a href="javascript:void(0)" onclick="$('.close').click()" class="btn btn-light">Oh, I can't delete this</a>
                    </form>
                </div>
            </div>
        </div>
    </div>


@endsection
