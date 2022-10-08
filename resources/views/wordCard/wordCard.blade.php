@extends('includes/master')
@section('content')
    <div class="container">


        {{ View::make('includes/header') }}




        <div class="container">

            @foreach ($words as $word)
                <div class="maincontainer">

                    <div class="thecard" onclick="this.classList.toggle('hover');">

                        <div class="thefront">
                            <div class="card">
                                <div class="card-body bg-info">
                                    <h1 style="color: #E1FFEE">{{ $word['word'] }}</h1>
                                </div>
                                <div class="card-footer bg-secondary">
                                    <p style="color: #FFEEAF">
                                        Click to see the meaning
                                        {{-- <button class="btn btn-outline-info">Click to see the meaning</button> --}}
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="theback">
                            <h1>{{ $word['word'] }}</h1>
                            <hr>
                            <h4>{{ $word['pos'] }}</h4>
                            <hr>
                            <p>Meaning={{ $word['word'] }}</p>
                            <p>Sentence : {{ $word['sentence'] }}</p>
                            <button class="btn btn-success">I knew</button>
                            <button class="btn btn-danger">I didn't knew</button>
                        </div>
                    </div>
                    <br>


                    <label>Mastered: </label>
                    <div class="progress">
                        <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="5"
                            aria-valuemin="0" aria-valuemax="100">5%</div>
                    </div>
                    <br>
                    <label>Reviewing: </label>
                    <div class="progress">
                        <div class="progress-bar bg-warning" role="progressbar" style="width: 25%;" aria-valuenow="25"
                            aria-valuemin="0" aria-valuemax="100">25%</div>
                    </div>
                    <br>
                    <label>Learning: </label>
                    <div class="progress">
                        <div class="progress-bar bg-danger" role="progressbar" style="width: 50%;" aria-valuenow="50"
                            aria-valuemin="0" aria-valuemax="100">50%</div>
                    </div>

                    <br>

                    @if ($words->hasMorePages())
                        <div class="container justify-content-center d-flex m-5">
                            <a href="{{ $words->nextPageUrl() }}" class="btn btn-danger text-white col-lg-6">
                                Next
                            </a>
                        </div>
                    @else
                        <div class="container justify-content-center d-flex m-5">
                            <a href="/catList" class="btn btn-danger text-white col-lg-6">
                                Go to Category list
                            </a>
                        </div>
                    @endif

                    <p class="m-3 justify-content-left d-flex">
                        {{ $words->currentPage() }} of {{ $words->lastPage() }}
                    </p>

                </div>



        </div>
        @endforeach

    </div>
@endsection
