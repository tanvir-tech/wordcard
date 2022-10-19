@extends('includes/master')
@section('content')

<link href="{{ asset('libs/dropzone/min/dropzone.min.css') }}" rel="stylesheet" type="text/css">




    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">

                        <h4 class="card-title">Dropzone</h4>
                        <p class="card-title-desc">Upload words from csv file 
                        </p>

                        <div>
                            <form action="#" class="dropzone dz-clickable">

                                <div class="dz-message needsclick">
                                    <div class="mb-3">
                                        <i class="display-4 text-muted bx bxs-cloud-upload"></i>
                                    </div>

                                    <h4>Drop files here or click to upload.</h4>
                                </div>
                            </form>
                        </div>

                        <div class="text-center mt-4">
                            <button type="button" class="btn btn-primary waves-effect waves-light">Send Files</button>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div>
    </div>


    <script src="{{ asset('libs/dropzone/min/dropzone.min.js') }}"></script>
@endsection
