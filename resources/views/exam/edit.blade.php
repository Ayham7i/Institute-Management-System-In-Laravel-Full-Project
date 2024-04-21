@extends('layouts.app')

@section('content')							
    <!-- Page-body start -->
    <div class="page-body">
        <!-- Row start -->
        <div class="row">
            <div class="col-md-6 col-xl-4"></div>
            <div class="col-md-6 col-xl-4 text-left">
                <h4 class="text-center m-orange"> Update Examination Info</h4>
                <hr>
                <form action="{{ route('exam.update', $data->id) }}" method="POST">
                    @csrf
                    @method('PUT')
                    <input type="text" name="name" class="form-control" value="{{$data->name}}" placeholder="Examination Name" required>
                    <label class="m-t-10">Starting Date: 
                        <input class="form-control" type="date" value="{{ $data->Starting_Date }}" name="Starting_Date" required>
                    </label>
                    <label>Ending Date: 
                        <input class="form-control" type="date" value="{{ $data->Ending_Date }}" name="Ending_Date" required>
                    </label>
                    <hr>
                    <div class="text-center">
                        <button class="btn btn-danger" type="submit"><i class="fas fa-check"></i> Update</button>
                    </div>
                </form>

                <div style="margin-top: 10px;"></div> <!-- Add space between buttons -->

                <form action="{{ route('exam.destroy',$data->id) }}" method="POST" onsubmit="return confirm('Are You Sure You Want To Delete Student Record ?')">
                    @csrf
                    @method('DELETE')
                    <div class="text-center">
                        <button class="btn btn-info" type="submit"><i class="fas fa-trash-alt"></i> Delete</button>
                    </div>
                </form>
            </div>
            <div class="col-md-6 col-xl-4"></div>
        </div>
        <!-- Row end -->
        <!-- Row start -->
        <!-- Row end -->
    </div>
    <!-- Page-body end -->
@endsection