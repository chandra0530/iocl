@extends('user.layouts.user2')

@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')  



<section class="page-head">
</section>
<div class="page-in section">
			<div class="container">    
			<div class="row">
					<div class="col-sm-8 col-xs-12 col-sm-offset-2 col-xs-offset-0">
						<div class="section-heading">
							<h2 class="title"><span>Our</span> News</h2>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p> -->
						</div>
					</div>
					<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Contribution</button>
					
				</div> <!-- /.row -->
				<div class="row">
				<div class="blog">
				<div class="col-xs-12 col-sm-12 col-md-6">
					@foreach($left as $key => $news)
						<div class="blog-content">
							<div class="blog-feature">
								<img src="{{$news->images}}"  height="500px" width="500px" alt="Blog Photo">
							
								<div class="posted-by">
									<div class="posted-details">
										<div class="posted-left">
											<a class="posted-date" href="#">{{$news->created_at}}</a>
										</div> 
										
									</div> <!-- /.posted-details -->
								</div> <!-- /.posted-by -->
							</div> <!-- /.blog-feature -->
							<div class="post-title">
								<a href="/news_details/{{$news->id}}">
									<h3>{{$news->heading}}.</h3>
								</a>
							</div>
							<div class="post-content">
								<p>{{$news->news_short_description}}</p>
							</div>
							<div class="read-more">
								<a href="/news_details/{{$news->id}}">Read More</a>
							</div>
						</div> <!-- /.blog-content -->	
					@endforeach		
				</div> <!-- /.col- -->
				<div class="col-xs-12 col-sm-12 col-md-6">
					@foreach($right as $key => $news)
						<div class="blog-content">
							<div class="blog-feature">
								<img src="{{$news->images}}"  height="500px" width="500px" alt="Blog Photo">
								<div class="posted-by">
									<div class="posted-details">
										<div class="posted-left">
											<a class="posted-date" href="#">{{$news->created_at}}</a>
										</div> 
									</div> <!-- /.posted-details -->
								</div> <!-- /.posted-by -->
							</div> <!-- /.blog-feature -->
							<div class="post-title">
								<a href="/news_details/{{$news->id}}">
									<h3>{{$news->heading}}.</h3>
								</a>
							</div>
							<div class="post-content">
								<p>{{$news->news_short_description}}</p>
							</div>
							<div class="read-more">
								<a href="/news_details/{{$news->id}}">Read More</a>
							</div>
						</div> <!-- /.blog-content -->	
					@endforeach		
				</div> <!-- /.col- -->
							</div> <!-- /.blog -->		
				</div> <!-- /.row -->  
				
				


				<!-- /.blog-pagination -->

				

			</div> <!-- /.container -->
		</div>


		<div id="myModal" class="modal fade" role="dialog" style="margin-top: 100px;">
   <div class="modal-dialog">
      <!-- Modal content-->
      <div class="modal-content">
         <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
            <h4 class="modal-title">Add News</h4>
         </div>
         <div class="modal-body">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-12">
                     <div class="card">
                        <div class="card-header">
                           <h4 class="card-title">Add News</h4>
                        </div>
                        <div class="card-content">
                           <div class="card-body">
                              <form enctype="multipart/form-data" method="POST"
                                 action="{{ route('news.store') }}">
                                 @csrf
                                 <input type="hidden" name="news_status" value="inactive">
                                 <div class="row">
                                    <div class="col-sm-12 col-6">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             News Name
                                          </div>
                                          <input type="text" class="form-control" name="news_heading"
                                             id="basicInput" placeholder="Enter news headline">
                                       </fieldset>
                                    </div>
                                    <div class="col-sm-12 col-6">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             News Small Description
                                          </div>
                                          <input type="text" class="form-control" name="news_small_desc"
                                             id="basicInput" placeholder="Enter news small description">
                                       </fieldset>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             Photo <small>( 900 * 400 )Px</small>
                                          </div>
                                          <input type="file" name="photos" class="form-control"
                                             id="photos" placeholder="Select product images">
                                       </fieldset>
                                    </div>
                                    <div class="col-sm-6 col-12">
                                    </div>
                                    <div class="col-sm-12 col-12">
                                       <fieldset class="form-group">
                                          <div class="text-bold-600 font-medium-2 mb-2">
                                             Description
                                          </div>
                                          <textarea id="desc" name="desc"
                                             style="height: 500px; width: 100%"></textarea>
                                       </fieldset>
                                    </div>
                                 </div>
                                 <button class="btn btn-primary btn-block waves-effect waves-light"
                                    type="submit">
                                 Add News
                                 </button>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
         </div>
      </div>
   </div>
</div>
@endsection


@push('js')
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#desc').summernote();
            $('#choice_attributes').on('change', function () {
                $('#customer_choice_options').html(null);
                $('#sku_choice_options').html(null);
                $.each($("#choice_attributes option:selected"), function () {
                    add_more_customer_choice_option($(this).val(), $(this).text());
                });
            });

            function add_more_customer_choice_option(i, name) {
                $('#customer_choice_options').append('' +
                    '<div class="row mb-3">' +
                    '<div class="col-8 col-md-3 order-1 order-md-0">' +
                    '<input type="hidden" name="choice_no[]" value="' + i + '">' +
                    '<input type="text" class="form-control" name="choice[]" value="' + name + '" placeholder="Choice Title" readonly>' +
                    '</div>' +
                    '<div class="col-12 col-md-7 col-xl-8 order-3 order-md-0 mt-2 mt-md-0">' +
                    '<input type="text" class="form-control" id="choice_options_' + i + '" name="choice_options_' + i + '[]" onChange="getProductCombinations()" placeholder="Enter choice values by comma" >' +
                    '</div>' +
                    '<div class="col-4 col-xl-1 col-md-2 order-2 order-md-0 text-right">' +
                    '<button type="button" onclick="delete_row(this)" class="btn btn-link btn-icon text-danger">' +
                    '<i class="fa fa-trash-o"></i>' +
                    '</button>' +
                    '</div>' +
                    '</div>');
            }

        });

        function delete_row(em) {
            $('#sku_choice_options').html(null);
            $(em).closest('.row').remove();
        }

       

    </script>
@endpush
