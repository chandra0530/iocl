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
                <h2 class="content-header-title float-left mb-0">All Posts List</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
                    </li>
                    <li class="breadcrumb-item"><a href="#">Posts</a>
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
                                <h4 class="card-title">All Posts</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row" id="basic-table">
                                        <div class="col-12">
                                            <div class="card">
                                                <div class="card-header">
                                                    <h4 class="card-title">All Posts</h4>
                                                </div>
                                                <div class="card-content">
                                                    <div class="card-body">
                                                    
                                                        <!-- Table with outer spacing -->
                                                        <div class="table-responsive">
                                                            <table class="table">
                                                                <thead>
                                                                    <tr>
                                                                        <th>ID</th>
                                                                        <th>Users Name</th>
                                                                        <th>Post Type</th>
                                                                        <!-- <th>Users Employee Id</th> -->
                                                                        <th>Action</th>
                                                                    </tr>
                                                                </thead>
                                                                <tbody>
                                                                @foreach($posts as $post)
                                                                <tr>
                                                                <td>{{$post->id}}</td>
                                                                        <td scope="row">{{$post->user_name}}</td>
                                                                        <td scope="row">
                                                                        {{$post->ushare_type}}
                                                                        
                                                                       </td>
                                                                        <td>
                                                                        @if($post->ushare_status=='inactive')
                                                                        <a
                                                                            href="{{ route('employespost.active', $post->id) }}"
                                                                            class="btn btn-circle btn-success"><i class="fa fa-check"></i></a>
                                                                         @else
                                                            <a
                                                                href="/admin/ushare/comments/{{ $post->id }}"
                                                                class="btn btn-circle btn-success"><i class="fa fa-eye"></i></a>
                                                                        @endif
                                                                        <a onclick="return confirm('Are you sure to delete?')"
                                                                            href="{{ route('employespost.active', $post->id) }}"
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
        </div>
      </div>
    </div>


@endsection
