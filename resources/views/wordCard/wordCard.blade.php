@extends('includes/master')
@section("content")



    <div class="container">


        {{ View::make('includes/header') }}




        <div class="container">


            <div class="maincontainer">

                <div class="thecard" onclick="this.classList.toggle('hover');">

                    <div class="thefront">
                        <div class="card">
                            <div class="card-body bg-info">
                                <h1 style="color: #E1FFEE">WORD</h1>
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
                        <h1>Word</h1>
                        <hr>
                        <h4>Parts of speech : Meaning</h4>
                        <hr>
                        <p>Example Sentence</p>
                        <button class="btn btn-success">I knew</button>
                        <button class="btn btn-danger">I didn't knew</button>
                    </div>

                </div>
                <br>


                <label>Mastered: </label>
                <div class="progress">
                    <div class="progress-bar bg-success" role="progressbar" style="width: 5%;" aria-valuenow="5" aria-valuemin="0"
                        aria-valuemax="100">5%</div>
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



                


            </div>



        </div>



    </div>


    @endsection