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
                <h2 class="content-header-title float-left mb-0">All Ushare List</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Ushare</a>
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
                    <h4 class="card-title">All Ushare</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                    <section class="basic-select2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Ushare</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('ushare_type.store') }}">
                                            @csrf
                                            <div class="row">
                                              <div class="col-sm-12 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                           Ushare name
                                                        </div>
                                                        <input type="text" class="form-control" name="ushare_name"
                                                               id="basicInput" placeholder="Enter ushare name">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-12 col-6">
                                                   
                                                </div>
                                            </div>

                                            <button class="btn btn-primary btn-block waves-effect waves-light"
                                                    type="submit">
                                                Add ushare type
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <h4 class="card-title">All ushare types</h4>
                                    </div>
                                    <div class="card-content">
                                        <div class="card-body">
                                           
                                            <!-- Table with outer spacing -->
                                            <div class="table-responsive">
                                                <table class="table">
                                                    <thead>
                                                        <tr>
                                                            <th>ID</th>
                                                            <th>Ushare Name</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    @foreach($ushare_types as $share)
                                                    <tr>
                                                    <td>{{$share->id}}</td>
                                                            <td scope="row">{{$share->ushare_type}}</td>
                                                            
                                                            <td>
                                                            <a onclick="return confirm('Are you sure to delete?')"
                                                                href="{{ route('ushare_type.delete', $share->id) }}"
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
