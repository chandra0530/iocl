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
                <!-- <h2 class="content-header-title float-left mb-0">All Competitions Update List</h2> -->
                <div class="breadcrumb-wrapper col-12">
                  <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/admin">Home</a>
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
                    <h4 class="card-title">Competition Details</h4>
                </div>
                <div class="card-content">
                    <div class="card-body">
                        <div class="row" id="basic-table">
                            <div class="col-12">
                                <div class="card">
                                    
                                    <div class="card-content">
                                        <div class="card-body">
                                        <div class="post-title">
									<h3>{{$useruploaddetails->compotition_details}}.</h3>
                                    <h3>Employe Name: {{$useruploaddetails->name}}.</h3>
                                    <h3>Employe id: {{$useruploaddetails->employeid}}.</h3>
								</div>
								
                
                <?php $images=json_decode($useruploaddetails->compotition_images);?>
                @if(sizeof($images) >0)    
                @for ($i = 0; $i < sizeof($images); $i++)
                            <img class="img-responsive" src="{{$images[$i]}}" alt="Img" height="500px" width="500px">
                            @endfor
                @endif
                            
                @if($useruploaddetails->compotition_videos != null)    
                <?php $videos=json_decode($useruploaddetails->compotition_videos);?>
                @if(sizeof($videos) >0)    
                @for ($i = 0; $i < sizeof($videos); $i++)
                <video width="500" height="500" style="max-width: 100%;" poster="{{ asset('assets/images/preview.jpeg')}}"  controls playsinline>
								<source src="{{$videos[$i]}}" type="video/mp4">
								Your browser does not support the video tag.
								</video>

                              @endfor
                @endif

                @endif

                            <div>
                            
</div>
<a
                                                                href="{{ route('compititions.publish_request', $useruploaddetails->upload_id) }}"
                                                                class="btn btn-circle btn-success"><i class="fa fa-check"></i></a>
                                                         

                                                            <a onclick="return confirm('Are you sure to delete?')"
                                                                href="compititions/reject_request/{{$useruploaddetails->upload_id}}"
                                                                class="btn btn-circle btn-danger"><i class="fa fa-trash"></i></a>    

                                           
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
