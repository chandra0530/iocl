@extends('admin.layouts.admin')


@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets/vendors/css/charts/apexcharts.css') }}">

@endpush
@section('content')

<div class="app-content content">
      <div class="content-overlay"></div>
      <div class="header-navbar-shadow"></div>
      <div class="content-wrapper">
        <div class="content-header row">
          <div class="content-header-left col-md-9 col-12 mb-2">
            <div class="row breadcrumbs-top">
              <div class="col-12">
                <h2 class="content-header-title float-left mb-0">Gallery Events</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Gallery</a>
                    </li>
                    <li class="breadcrumb-item active">Add Event
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body"><!-- Basic Inputs start -->
        @include('user.partials.message')
<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Add Event</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('event.store') }}">
                              @csrf
                        <div class="row">
                            <div class="col-xl-6 col-md-6 col-12 mb-1">
                                <fieldset class="form-group">
                                    <label for="basicInput">Event Name</label>
                                    <input type="text" name="event_name" class="form-control" id="basicInput" placeholder="Enter email">
                                </fieldset>
                            </div>
                            
                        </div>
                        
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
                        <br>
                           </form>
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All Events</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                           
                                            <!-- Table with outer spacing -->
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Event Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($events as $event)
                                                    <tr>
                                                    <td>{{$event->id}}</td>
                                                            <td scope="row">{{$event->gallery_event_name}}</td>
                                                            <td>
                                                            <a onclick="return confirm('Are you sure to delete?')"
                                                                href="{{ route('galleryevents.destroy', $event->id) }}"
                                                                class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>
                                                            </td>
                                                    </tr>
                                                    @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Basic Inputs end -->




        </div>
      </div>
    </div>


@endsection
