@extends('layouts.app')


@section('content')
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">
										<div class="col-md-6 col-xl-3"></div>
										<div class="col-md-6 col-xl-6 text-center">
										<h4 class="m-orange">Select Exam to Add or Update Marks</h4><hr style="margin:20px;">
                                        <form action="{{ route('Marks.edit',0) }}" method="GET" id="myform">
                                            @csrf
                                            <select name="exam_id" class="form-control" required>
                                                <option value="">-----SELECT EXAM-----</option>
                                                @foreach ($exams as $exam)
                                                    <option value="{{ $exam->id }}">{{ $exam->name }}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <br>
                                            <select name="class_id" class="form-control" required>
                                                <option value="">-----SELECT CLASS-----</option>
                                                @foreach ($class as $class)
                                                    <option value="{{ $class->id }}">{{ $class->name }}</option>
                                                @endforeach
                                            </select>
                                            <br>
                                            <br>
                                            <button type="submit" class="submit btn btn-danger"><i class="ti-search"></i> Search</button>
                                        </form>
										</div>	
										<div class="col-md-6 col-xl-3"></div>
										</div>
										<!-- Row end -->
										<!-- Row start -->
										
												<!-- Row end -->
									</div>
                                    <!-- Page-body end -->
                                </div>
                            </div>
       
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

