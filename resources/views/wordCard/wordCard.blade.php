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
                            <h2 class="mt-2">{{ $word['word'] }}</h2>
                            --------------------------------------------------
                            <h4>{{ $word['pos'] }}</h4>
                            <p>Meaning : {{ $word['word'] }}</p>
                            <p>Sentence : {{ $word['sentence'] }}</p>
                            <div class="bottom-btn row" id="dismissable-btn">
                                <button class="btn btn-outline-success bottom-btn-left" onclick="master()">I knew</button>
                                <button class="btn btn-outline-danger bottom-btn-right" onclick="learn()">I didn't knew</button>
                            </div>
                        </div>
                    </div>
                    <br>

                    <label>Mastered: </label>
                    <div class="progress">
                        <div id="mastered" class="progress-bar bg-success" role="progressbar"></div>
                    </div>
                    <br>
                    <label>Reviewing: </label>
                    <div class="progress">
                        <div id="reviewed" class="progress-bar bg-warning" role="progressbar"></div>
                    </div>
                    <br>
                    <label>Learning: </label>
                    <div class="progress">
                        <div id="learning" class="progress-bar bg-danger" role="progressbar"></div>
                    </div>
                    <br>

                    <script>
                        // start counter from 0 only if null in local storage
                        // otherwise get previous data to increase

                        var category_id = "{{ $category_id }}";
                        
                        if (localStorage.getItem("mastercount").split("_")[0] == category_id) {
                            var mc = localStorage.getItem("mastercount").split("_")[1];
                        } else {
                            localStorage.setItem("mastercount", category_id + "_" + 0);
                        }

                        if (localStorage.getItem("learningcount") != null && localStorage.getItem("learningcount").split("_")[0] == category_id ) {
                            var lc = localStorage.getItem("learningcount").split("_")[1];
                        } else {
                            localStorage.setItem("learningcount", category_id + "_" + 0);
                        }

                        // if (localStorage.getItem("reviewedcount").split("_")[0] == category_id) {
                        //     var rc = localStorage.getItem("reviewedcount").split("_")[1];
                        // } else {
                        //     localStorage.setItem("reviewedcount", category_id + "_" + 0);
                        // }

                        // get the local data
                        var masteredcount = Number(mc) || 0;
                        var learningcount = Number(lc) || 0;
                        var reviewedcount = Number(masteredcount+learningcount) || 0;


                        function master() {

                            // increase local data
                            var masteredcount = localStorage.getItem("mastercount").split("_")[1];
                            masteredcount++;
                            localStorage.setItem("mastercount", category_id + "_" + masteredcount);



                            var mastered = document.getElementById("mastered");
                            mastered.style = "width:" + masteredcount + "%";
                            mastered.innerHTML = masteredcount;

                            
                        }

                        function learn() {

                            // increase local data
                            var learningcount = localStorage.getItem("learningcount").split("_")[1];
                            learningcount++;
                            localStorage.setItem("learningcount", category_id + "_" + learningcount);

                            var learning = document.getElementById("learning");
                            learning.style = "width:" + learningcount + "%";
                            learning.innerHTML = learningcount;
                        }

                        var mastered = document.getElementById("mastered")
                        mastered.style = "width:" + masteredcount + "%";
                        mastered.innerHTML = masteredcount;

                        var reviewed = document.getElementById("reviewed")
                        reviewed.style = "width:" + reviewedcount + "%";
                        reviewed.innerHTML = reviewedcount;

                        var learning = document.getElementById("learning")
                        learning.style = "width:" + learningcount + "%";
                        learning.innerHTML = learningcount;
                    </script>

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
