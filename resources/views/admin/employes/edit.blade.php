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
                <h2 class="content-header-title float-left mb-0">Udate user details</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Users</a>
                    </li>
                    <li class="breadcrumb-item active">List
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
                    <h4 class="card-title">Update User details</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-content">
                                        <div class="card-body">
                                        <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('employes.updatepassword') }}">
                                              <input type="hidden" name="user_id" value="{{$user_Details->id}}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Name
                                                        </div>
                                                        <input type="text" class="form-control" name="name"
                                                               id="basicInput" placeholder="Enter employee name" value="{{$user_Details->name}}" readonly>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Email
                                                        </div>
                                                        <input type="text" class="form-control" name="email"
                                                               id="basicInput" placeholder="Enter employee email" value="{{$user_Details->email}}" readonly>
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Password
                                                        </div>
                                                        <input type="password" class="form-control" name="password"
                                                               id="basicInput" placeholder="Enter employee password">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Employe id
                                                        </div>
                                                        <input type="text" class="form-control" name="employeid"
                                                               id="basicInput" placeholder="Enter employee password" value="{{$user_Details->employeid}}" readonly>
                                                    </fieldset>
                                                </div>
                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">
                                                Update Password
                                            </button>
                                        </form>
                                         
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
