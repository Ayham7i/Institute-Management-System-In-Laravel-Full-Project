@extends('layouts.app')

@section('content')
                                    
    <!-- Page-body start -->
    <div class="page-body">
        <!-- Row start -->
        <div class="row">
            <div class="col-lg-12 text-center">
                <h5 class="text-center w-100 m-blue1 m-t-0">Update Obtained Marks</h5>
                <form action="Marks.store" method="POST" id="myform">
                    @csrf

                    <table class="table-striped table-responsive table w-100 m-t-30">
                        <tbody>
                            <tr>
                                <td><b>ID</b></td>
                                <td><b>Student Name</b></td>
                                <td><b>Class Name</b></td>
                                <td><b>Exam Name</b></td>
                                <td><b>Marks<br>100</b></td>
                            </tr>
                            
                            @foreach ($students as $student)
                                <tr>
                                    <td>
                                        <input type="text" name="studentid[]" value="{{$student->id}}" style="display:none;">
                                        {{$student->id}}
                                    </td>
                                    <td>
                                        <input type="text" name="studentname[]" value="{{$student->name}}" style="display:none;">
                                        {{$student->name}}
                                    </td>
                                    <td>
                                        <input type="text" name="classname[]" value="{{$student->class->name}}" style="display:none;">
                                        {{$student->class->name}}
                                    </td>
                                    <td>
                                        <input type="text" name="examname[]" value="{{$exams->name}}" style="display:none;">
                                        {{$exams->name}}
                                    </td>
                                    <td>
                                        <input type="number" max="100" name="marks[]" value="" step="any" required="">
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <button type="submit" name="submit" id="submitBtn" class="submit btn btn-primary">
                        <i class="ti-reload"></i> Update
                    </button>
                </form>
            </div>
        </div>
        <!-- Row end -->
    </div>
    <!-- Page-body end -->
@endsection