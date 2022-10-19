@extends('layout/master')
@section("content")

<link rel="stylesheet" href="{{ asset('css/card.css') }}">



<div class="m-5 p-5"></div>
<div class="container mt-5">
    <div class="row">


        {{-- card  --}}
        <div class="col-lg-6">
            <div class="card rounded">
                {{-- <div class="card-header">Category 01</div> --}}
                <div class="card-body bg-info">
                    <h1 class="text-light text-center">Category 01</h1>
                </div>
                <div class="card-footer">
                    <p>
                        This category contains 50 words
                    </p>
                    <a href="practice" class="btn btn-outline-light">
                        Let's practics -->
                    </a>
                    
                </div>
            </div>
        </div>
        {{-- card end  --}}
        {{-- card  --}}
        <div class="col-lg-6">
            <div class="card rounded">
                {{-- <div class="card-header">Category 01</div> --}}
                <div class="card-body bg-info">
                    <h1 class="text-light text-center">Category 01</h1>
                </div>
                <div class="card-footer">
                    <p>
                        This category contains 50 words
                    </p>
                    <a href="practice" class="btn btn-outline-light">
                        Let's practics -->
                    </a>
                    
                </div>
            </div>
        </div>
        {{-- card end  --}}
        
        
    </div>
</div>

@endsection