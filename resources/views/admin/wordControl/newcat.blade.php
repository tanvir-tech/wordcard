@extends('includes/master')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Make a new Category</h4>

                <form method="POST" action="newcat">
                    @csrf
                    <div class="m-3">
                        <label for="formrow-firstname-input" class="form-label">Name</label>
                        <input type="text" class="form-control" placeholder="Category name" name="name">
                    </div>
                    <div class="m-3">
                        <label class="mb-1">Description</label>
                        <textarea class="form-control" maxlength="225" rows="3" placeholder="Category description" name="description"></textarea>
                    </div>
                    <div class="m-3">
                        <label class="mb-1">Level</label>
                        <input type="number" class="form-control"placeholder="Level" name="level">
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
