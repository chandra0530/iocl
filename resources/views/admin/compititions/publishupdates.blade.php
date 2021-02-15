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
                <h2 class="content-header-title float-left mb-0">All Compitition User Upload Request</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">User Upload Request</a>
                    </li>
                    <li class="breadcrumb-item active">List
                    </li>
                  </ol>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="content-body">
        @include('user.partials.message')
        <!-- Basic Inputs start -->
<section id="basic-input">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">User Upload Request</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">User Upload Request</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                           
                                            <!-- Table with outer spacing -->
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Competition Name</th>
                                                            <th>User comment</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($competitions as $competition)
                                                    <tr>
                                                    <td>{{$competition->comp_name}}</td>
                                                            <td scope="row">{{$competition->compotition_details}}</td>
                                                            <td>   {{$competition->compotition_details}}</td>
                                                            <td>
                                                            <a
                                                                href="{{ route('compititions.publish_request', $competition->id) }}"
                                                                class="btn btn-circle btn-success"><i class="fa fa-check"></i></a>
                                                            <a
                                                                href="/admin/compititions/view-uploads/{{ $competition->id }}"
                                                                class="btn btn-circle btn-success">View</a>

                                                            <a onclick="return confirm('Are you sure to delete?')"
                                                                href="compititions/reject_request/{{$competition->id}}"
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
