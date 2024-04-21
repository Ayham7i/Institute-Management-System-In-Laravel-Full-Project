
@extends('layouts.app')


@section('content')							
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">
										<div class="col-md-6 col-xl-4"></div>
										<div class="col-md-6 col-xl-4 text-center">
										<form action="{{route('Classes.store')}}" method="post" id="myform">
										@csrf
										<input type="text" class="form-control" placeholder="Name Of Class" id="classname" name="name" required><br>
										
										<input type="number" class="form-control" placeholder="Monthly Tuition Fees" name="M-Fees" required><br>

										<input type="number" class="form-control" placeholder="Study-Hours" name="Study-Hours" required><br>
										
										<select name="employee_id" class="form-control" required>
										    <option value="">---- Select Class Teacher ----</option>
											@foreach ($data as $employee)

											<option value="{{$employee->id}}">{{$employee->name}}</option>

											@endforeach
																						
										</select><br>
										
										<button type="submit"  class="btn btn-primary btn-large"><i class="ti-check"></i> Submit</button><br>
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
    