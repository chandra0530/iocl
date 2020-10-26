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
                <h2 class="content-header-title float-left mb-0">Add Gallery Event Images</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="index.html">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Gallery Event</a>
                    </li>
                    <li class="breadcrumb-item active">Add Images
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
          <div class="content-header-right text-md-right col-md-3 col-12 d-md-block d-none">
            <div class="form-group breadcrum-right">
              <div class="dropdown">
                <button class="btn-icon btn btn-primary btn-round btn-sm dropdown-toggle waves-effect waves-light" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="feather icon-settings"></i></button>
                <div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="#">Chat</a><a class="dropdown-item" href="#">Email</a><a class="dropdown-item" href="#">Calendar</a></div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
        
<!-- Basic File Browser start -->
<section id="input-file-browser">
    <div class="row">
     
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <label class="card-title">File input</label>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <form enctype="multipart/form-data" method="POST" action="{{ route('galleryevent.store') }}">
                                        @csrf
                        
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">Select Event</label>
                                    <div class="form-group">
                                                        <select class="select2 form-control" id='choice_attributes' name="event_id">
                                                        @foreach($events as $event)
                                        <option value="{{ $event->id }}">{{ $event->gallery_event_name }}</option>
                                    @endforeach
                                                        </select>
                                                    </div>
                                    
                                </fieldset>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <fieldset class="form-group">
                                    <label for="basicInputFile">With Browse button</label>
                                    <div class="custom-file">
                                        <input type="file" name="gallery_image" class="custom-file-input" id="inputGroupFile01">
                                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                                    </div>
                                </fieldset>
                            </div>
                        </div>
                        <button class="btn btn-primary waves-effect waves-light" type="submit">Submit</button>
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
                                                            <th>Preview</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($eventpictures as $picture)
                                                    <tr>
                                                    <td>{{$picture->id}}</td>
                                                            <td scope="row">{{$picture->gallery_event_name}}</td>
                                                            <td scope="row"><img src="{{$picture->image}}" style="width:50px;height:50px;"></td>
                                                            <td>
                                                            @if($picture->status=='inactive')
                                                            <a
                                                                href="{{ route('galleryeventpicture.active', $picture->id) }}"
                                                                class="btn btn-circle btn-success"><i class="fa fa-check"></i></a>
                                                            @endif

                                                            <a onclick="return confirm('Are you sure to delete?')"
                                                                href="{{ route('galleryevents.destroy', $picture->id) }}"
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
<!-- Basic File Browser end -->







        </div>
      </div>
    </div>


@endsection
