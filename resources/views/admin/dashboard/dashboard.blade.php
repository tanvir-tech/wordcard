@extends('includes/master')
@section('content')
    {{ View::make('admin/dashboard/sidebar') }}





    <div class="container">





        <h1 class="text-center">Admin dashboard</h1>


        {{-- Links : <br>
        <ul>
            <li><a href="newword">Add word</a></li>
            <li><a href="csv">Add words from CSV</a></li>
            <li><a href="newcat">New Category</a></li>
        </ul> --}}


        <div class="row">
            <div class="col-lg-4">
                <div class="card mini-stats-wid">
                    <div class="card-body">

                        <div class="d-flex flex-wrap">
                            <div class="me-3">
                                <p class="text-muted mb-2">Total Word</p>
                                <h5 class="mb-0">120</h5>
                                <br>
                                <a href="admin/newword">Add word</a>
                            </div>

                            <div class="avatar-sm ms-auto">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="bx bxs-book-bookmark"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card blog-stats-wid">
                    <div class="card-body">

                        <div class="d-flex flex-wrap">
                            <div class="me-3">
                                <p class="text-muted mb-2">Category</p>
                                <h5 class="mb-0">86</h5>
                                <br>
                                <a href="admin/newcat">New Category</a>
                            </div>

                            <div class="avatar-sm ms-auto">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="bx bxs-note"></i>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="card blog-stats-wid">
                    <div class="card-body">
                        <div class="d-flex flex-wrap">
                            <div class="me-3">
                                <p class="text-muted mb-2">File</p>
                                <h5 class="mb-0">Upload</h5>
                                <br>
                                <a href="admin/csv">Add words from CSV</a>
                            </div>

                            <div class="avatar-sm ms-auto">
                                <div class="avatar-title bg-light rounded-circle text-primary font-size-20">
                                    <i class="bx bxs-message-square-dots"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        {{ View::make('admin/dashboard/table') }}








    </div>
@endsection
