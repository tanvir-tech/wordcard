@extends('includes/master')
@section('content')
    <div class="container">

        <div class="card">
            <div class="card-body">
                <h4 class="card-title mb-4 text-center">Insert a word</h4>

                <form>
                    <div class="mb-3">
                        <label for="formrow-firstname-input" class="form-label">Word</label>
                        <input type="text" class="form-control" id="formrow-firstname-input" placeholder="Enter the word">
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-inputState" class="form-label">Parts of speech</label>
                                <select id="formrow-inputState" class="form-select">
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

                        <div class="col-lg-4">
                            <div class="mb-3">
                                <label for="formrow-inputState" class="form-label">Category</label>
                                <select id="formrow-inputState" class="form-select">
                                    <option selected="">Select one</option>
                                    <option>Easy</option>
                                    <option>Medium</option>
                                    <option>Hard</option>
                                </select>
                            </div>
                        </div>
                    </div>



                    <div class="row">

                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formrow-email-input" class="form-label">Synonym</label>
                                <input type="email" class="form-control" id="formrow-email-input" placeholder="Synonym">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="mb-3">
                                <label for="formrow-password-input" class="form-label">Antonym</label>
                                <input type="password" class="form-control" id="formrow-password-input"
                                    placeholder="Antonym">
                            </div>
                        </div>
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
