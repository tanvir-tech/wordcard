@extends('includes/master')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Make a new Category</h4>

                <form>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Name</label>
                        <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Category name">
                    </div>


                    <div class="row">
                        <div class="col-lg-12">
                            <div class="mt-3">
                                <label class="mb-1">Description</label>
                                <textarea id="textarea" class="form-control" maxlength="225" rows="3"
                                    placeholder="Category description"></textarea>
                            </div>
                        </div>
                    </div>
                    <br>


                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>

    </div>
@endsection
