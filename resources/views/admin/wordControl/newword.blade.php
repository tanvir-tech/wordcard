@extends('includes/master')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Insert a word</h4>

                <form method="POST" action="admin/newword">
                    @csrf
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Word</label>
                        <input type="text" class="form-control" id="formrow-firstname-input" name="word"
                            placeholder="Enter the word">
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-inputState" class="form-label">Parts of speech</label>
                                <select id="formrow-inputState" class="form-select" name="pos">
                                    <option selected="">Choose one</option>
                                    <option>Noun</option>
                                    <option>Pronoun</option>
                                    <option>Verb</option>
                                    <option>Adverb</option>
                                    <option>Adjective</option>
                                    <option>Preposition</option>
                                    <option>Conjunction</option>
                                </select>
                            </div>
                        </div>

                        {{-- <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-inputState" class="form-label">Category</label>
                                <select id="formrow-inputState" class="form-select" name="category">
                                    <option selected="">Select one</option>
                                    <option>Easy</option>
                                    <option>Medium</option>
                                    <option>Hard</option>
                                </select>
                            </div>
                        </div> --}}


                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-firstname-input" class="form-label">Category ID</label>
                                <input type="number" class="form-control" id="formrow-firstname-input" name="category_id"
                                    placeholder="Category ID">
                            </div>
                        </div>



                    </div>



                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Synonym</label>
                                <input type="text" class="form-control" placeholder="Synonym" name="synonym">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label class="form-label">Antonym</label>
                                <input type="text" class="form-control" placeholder="Antonym" name="antonym">
                            </div>
                        </div>
                    </div>

                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Sentence</label>
                        <input type="text" class="form-control" id="formrow-firstname-input" name="sentence"
                            placeholder="Enter a sentence">
                    </div>


                    <div>
                        <button type="submit" class="btn btn-primary w-md">Submit</button>
                    </div>
                </form>
            </div>
            <!-- end card body -->
        </div>

    </div>
@endsection
