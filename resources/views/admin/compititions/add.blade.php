@extends('admin.layouts.admin')
@push('css')
    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.css" rel="stylesheet">
@endpush
@section('content')
    <!-- BEGIN: Content-->
    <div class="app-content content">
        <div class="content-overlay"></div>
        <div class="header-navbar-shadow"></div>
        <div class="content-wrapper">
            <div class="content-header row">
                <div class="content-header-left col-md-9 col-12 mb-2">
                    <div class="row breadcrumbs-top">
                        <div class="col-12">
                            <h2 class="content-header-title float-left mb-0">Compitition</h2>
                            <div class="breadcrumb-wrapper col-12">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item active">Add Compitition
                                    </li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="content-body">
                <!-- Bootstrap Select start -->
                <!-- Basic Select2 start -->
                <section class="basic-select2">
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Add Compitition</h4>
                                </div>
                                <div class="card-content">
                                    <div class="card-body">
                                        <form enctype="multipart/form-data" method="POST"
                                              action="{{ route('compititions.store') }}">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Name
                                                        </div>
                                                        <input type="text" class="form-control" name="competition_name"
                                                               id="basicInput" placeholder="Enter compitition name">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-6">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Location
                                                        </div>
                                                        <input type="text" class="form-control" name="competition_location"
                                                               id="basicInput" placeholder="Enter compitition location">
                                                    </fieldset>
                                                </div>
                                                
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                            Photo <small>( 900 * 400 )Px</small>
                                                        </div>
                                                        <input type="file" multiple name="photos[]" class="form-control"
                                                               id="photos" placeholder="Select compitition images">
                                                    </fieldset>
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition From
                                                        </div>
                                                        <input type="datetime-local" class="form-control" name="compitition_from"
                                                               id="basicInput" placeholder="Enter compitition from date">
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition to
                                                        </div>
                                                        <input type="datetime-local" class="form-control" name="compitition_to"
                                                               id="basicInput" placeholder="Enter compitition to date">
                                                    </fieldset>
                                                    
                                                </div>
                                                <div class="col-sm-6 col-12">
                                                    <fieldset class="form-group">
                                                        <div class="text-bold-600 font-medium-2 mb-2">
                                                        Compitition Type
                                                        </div>
                                                        <select class="form-control" name="event_type">
                                                        <option>Free</option>
                                                        <option>Paid</option>
                                                        </select>
                                                    </fieldset>
                                                    
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
                                                Add Competition
                                            </button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
                <!-- Basic Select2 end -->
            </div>
        </div>
    </div>
    <!-- END: Content-->
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