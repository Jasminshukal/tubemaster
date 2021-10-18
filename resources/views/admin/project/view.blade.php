@extends('admin.layout')

@section('title')
    View Project
@endsection

@section('content')
    <!-- Header Area -->
    <div class="header-area" id="headerArea">
        <div class="container">
            <!-- Header Content -->
            <div class="header-content position-relative d-flex align-items-center justify-content-between">
                <!-- Back Button -->
                <div class="back-button"><a href="{{ route('home') }}">
                        <svg class="bi bi-arrow-left-short" width="32" height="32" viewBox="0 0 16 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M12 8a.5.5 0 0 1-.5.5H5.707l2.147 2.146a.5.5 0 0 1-.708.708l-3-3a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L5.707 7.5H11.5a.5.5 0 0 1 .5.5z">
                            </path>
                        </svg></a></div>
                <!-- Page Title -->
                <div class="page-heading">
                    <h6 class="mb-0">Projects</h6>
                </div>
                <!-- Settings -->
                <div class="setting-wrapper">
                    <div class="setting-trigger-btn" id="settingTriggerBtn">
                        <svg class="bi bi-gear" width="18" height="18" viewBox="0 0 16 16" fill="url(#gradientSettings)"
                            xmlns="http://www.w3.org/2000/svg">
                            <defs>
                                <linearGradient id="gradientSettings" spreadMethod="pad" x1="0%" y1="0%" x2="100%"
                                    y2="100%">
                                    <stop offset="0" style="stop-color: #0134d4; stop-opacity:1;"></stop>
                                    <stop offset="100%" style="stop-color: #28a745; stop-opacity:1;"></stop>
                                </linearGradient>
                            </defs>
                            <path fill-rule="evenodd"
                                d="M8.837 1.626c-.246-.835-1.428-.835-1.674 0l-.094.319A1.873 1.873 0 0 1 4.377 3.06l-.292-.16c-.764-.415-1.6.42-1.184 1.185l.159.292a1.873 1.873 0 0 1-1.115 2.692l-.319.094c-.835.246-.835 1.428 0 1.674l.319.094a1.873 1.873 0 0 1 1.115 2.693l-.16.291c-.415.764.42 1.6 1.185 1.184l.292-.159a1.873 1.873 0 0 1 2.692 1.116l.094.318c.246.835 1.428.835 1.674 0l.094-.319a1.873 1.873 0 0 1 2.693-1.115l.291.16c.764.415 1.6-.42 1.184-1.185l-.159-.291a1.873 1.873 0 0 1 1.116-2.693l.318-.094c.835-.246.835-1.428 0-1.674l-.319-.094a1.873 1.873 0 0 1-1.115-2.692l.16-.292c.415-.764-.42-1.6-1.185-1.184l-.291.159A1.873 1.873 0 0 1 8.93 1.945l-.094-.319zm-2.633-.283c.527-1.79 3.065-1.79 3.592 0l.094.319a.873.873 0 0 0 1.255.52l.292-.16c1.64-.892 3.434.901 2.54 2.541l-.159.292a.873.873 0 0 0 .52 1.255l.319.094c1.79.527 1.79 3.065 0 3.592l-.319.094a.873.873 0 0 0-.52 1.255l.16.292c.893 1.64-.902 3.434-2.541 2.54l-.292-.159a.873.873 0 0 0-1.255.52l-.094.319c-.527 1.79-3.065 1.79-3.592 0l-.094-.319a.873.873 0 0 0-1.255-.52l-.292.16c-1.64.893-3.433-.902-2.54-2.541l.159-.292a.873.873 0 0 0-.52-1.255l-.319-.094c-1.79-.527-1.79-3.065 0-3.592l.319-.094a.873.873 0 0 0 .52-1.255l-.16-.292c-.892-1.64.902-3.433 2.541-2.54l.292.159a.873.873 0 0 0 1.255-.52l.094-.319z">
                            </path>
                            <path fill-rule="evenodd"
                                d="M8 5.754a2.246 2.246 0 1 0 0 4.492 2.246 2.246 0 0 0 0-4.492zM4.754 8a3.246 3.246 0 1 1 6.492 0 3.246 3.246 0 0 1-6.492 0z">
                            </path>
                        </svg><span></span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="page-content-wrapper py-3">
        <div class="container">
            <!-- Element Heading -->

        </div>
        <div class="container">
            <div class="card">
                <div class="card-body">
                    <div class="row">
                        <div class="col-xs-12 ">
                            <nav>
                                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
                                        role="tab" aria-controls="nav-home" aria-selected="true">Summary</a>
                                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile"
                                        role="tab" aria-controls="nav-profile" aria-selected="false">Details</a>
                                    <a class="nav-item nav-link" id="nav-contact-tab" data-toggle="tab" href="#nav-contact"
                                        role="tab" aria-controls="nav-contact" aria-selected="false">Equipments</a>
                                    <a class="nav-item nav-link" id="nav-about-tab" data-toggle="tab" href="#nav-about"
                                        role="tab" aria-controls="nav-about" aria-selected="false">Comments</a>
                                </div>
                            </nav>
                            <div class="tab-content py-3 px-3 px-sm-0" id="nav-tabContent">
                                <div class="tab-pane fade show active" id="nav-home" role="tabpanel"
                                    aria-labelledby="nav-home-tab">
                                    <form action="{{ route('projects.update', $project->id) }}" method="POST">
                                        @csrf
                                        @method('PUT')
                                        <table class="table table-striped">
                                            <tbody>
                                                <tr>
                                                    <td>Title</td>
                                                    <td>{{ $project->title }}</td>
                                                </tr>
                                                <tr>
                                                    <td>City</td>
                                                    <td>{{ $project->city->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Client</td>
                                                    <td>{{ $project->client->name }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Phone</td>
                                                    <td>{{ $project->contactphone }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Email</td>
                                                    <td>{{ $project->contactemail }}</td>
                                                </tr>
                                                <tr>
                                                    <td>Status</td>
                                                    <td>
                                                    @if ($project->status == 1)
                                                        Active
                                                    @endif
                                                    @if ($project->status == 0)
                                                        Inactive
                                                    @endif
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="nav-profile" role="tabpanel"
                                    aria-labelledby="nav-profile-tab">
                                    Detail
                                    <hr>
                                    <br>
                                    <strong>Date</strong>
                                    {{ $project->project_date ?? '--' }}
                                    <br>
                                    <strong>Detail</strong>
                                    {{ $project->detail ?? '' }}

                                </div>
                                <div class="tab-pane fade" id="nav-contact" role="tabpanel"
                                    aria-labelledby="nav-contact-tab">



                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach ($project->project_equipment as $item)
                                                <tr>
                                                    <th scope="row">{{ $loop->index + 1 }}</th>
                                                    <td>{{ $item->equipments->name }}</td>
                                                    <td>
                                                        <a href='#' title="comming-soon" class='btn btn-xs btn-info'
                                                            id='view'><i class="fa fa-eye"></i></a>
                                                        <a href='#' title="comming-soon" class='btn btn-xs btn-danger'
                                                            id='NAME'><i class="fa fa-trash"></i></a>
                                                    </td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    <div class="text-center">
                                        <a href='#' class='btn btn-block btn-info float-right' id='asds'
                                            title="Add More Equipment">
                                            <i class="fa fa-plus"></i>
                                        </a>
                                    </div>

                                </div>
                                <div class="tab-pane fade" id="nav-about" role="tabpanel" aria-labelledby="nav-about-tab">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th scope="col">User</th>
                                                <th scope="col">Comments</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>Mark</td>
                                                <td>Otto</td>
                                            </tr>
                                            <tr>
                                                <td>Jacob</td>
                                                <td>Thornton</td>
                                            </tr>
                                            <tr>
                                                <td>Larry</td>
                                                <td>the Bird</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <form action="{{ route('projects.save.comments') }}">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <label for="comment">
                                                        Comment
                                                    </label>
                                                    <textarea name="comment" id="" cols="30" rows="10"
                                                        class="form-control"></textarea>
                                                </div>
                                                <div class="text-center">
                                                    <a href='#' class='btn btn-block btn-info float-right' id='asds'
                                                        title="Add More Equipment">
                                                        <i class="fa fa-save"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>


@endsection
<!-- Footer Nav -->
