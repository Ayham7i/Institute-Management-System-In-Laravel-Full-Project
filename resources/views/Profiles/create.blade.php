@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Create Profile</div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('profile.store') }}">
                            @csrf
                            <div class="form-group">
                                <label for="field1">Field 1</label>
                                <input type="text" class="form-control" id="field1" name="field1" required>
                            </div>
                            <div class="form-group">
                                <label for="field2">Field 2</label>
                                <input type="text" class="form-control" id="field2" name="field2" required>
                            </div>
                            <!-- Add more form fields as necessary -->
                            <button type="submit" class="btn btn-primary">Create</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection