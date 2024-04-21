@extends('layouts.app')


@section('content')
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row m-t-20">
										<div class="col-md-6 col-xl-4"></div>
										<div class="col-md-6 col-xl-4 text-center">
										<form action="{{route('exam.edit',0)}}" method="GET" id="myform">
											@csrf
										<select name="exam_id" class="form-control" required>
										<option value="">-----SELECT EXAM-----</option>
										@foreach ($exam as $exam)

										<option value='{{$exam->id}}'>{{$exam->name}}</option>
											
										@endforeach
										
																	
										</select><hr>
										 
										<button type="submit" class="submit btn btn-primary btn-large" name="updateexam"><i class="ti-reload"></i> Update</button>
										
										</form>
										</div>	
										<div class="col-md-6 col-xl-4"></div>
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

