@extends('includes/master')
@section('content')
    <div class="container-fluid ">


        {{ View::make('admin/dashboard/sidebar') }}






        <h1 class="text-center">Admin dashboard</h1>

        






        {{ View::make('admin/dashboard/table') }}











    </div>
@endsection
