@extends('layout/master')
@section('content')
    <div class="container">


        admin dashboard
        {{ View::make('admin/dashboard/table') }}

    </div>
@endsection
