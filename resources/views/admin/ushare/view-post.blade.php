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
                <h2 class="content-header-title float-left mb-0">All View Post  Details</h2>
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Home</a>
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
                                <h4 class="card-title">View Posts</h4>
                            </div>
                            <div class="card-content">
                                <div class="card-body">
                                    <div class="row" id="basic-table">
                                        <div class="col-12">
                                            <div class="card">
                                                
                                                <div class="card-content">
                                                    <div class="card-body">
                                                    
                                                        <!-- Table with outer spacing -->
                                                        <?php $images = json_decode($ushare->ushare_images); ?>
                                                        @if(sizeof($images) >0)         
                                                        @foreach ($images as $image)
                                <img src="{{$image}}" alt="Blog Photo" height="500px" width="500px">
                                @endforeach
     
@endif

                               

								<?php $videos = json_decode($ushare->videos); ?>

                                @if(sizeof($videos) >0)         
                                                        
                                @foreach ($videos as $video)
								<video width="320" height="240" controls>
								<source src="{{$video}}" type="video/mp4">
								Your browser does not support the video tag.
								</video>
                                @endforeach
     
@endif



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
