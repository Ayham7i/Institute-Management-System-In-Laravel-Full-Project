
@extends('layouts.app')


@section('content')
						
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row m-t-20">
										<div class="col-md-6 col-xl-3"></div>
										<div class="col-md-6 col-xl-6 text-center m-gray">
										<form action="{{route('Subject.store')}}" method="POST" id="myform">
                                        @csrf
										<select name="class_id" class="form-control" required>
										<option value="">-----SELECT CLASS-----</option>
										@foreach ($data as $class)
                                        <option value='{{$class->id}}'>{{$class->name}}</option>
                                        @endforeach
                                        	
                                        </select>
                                        <br>
										<input type="text" name="name" placeholder="Name Of Subject" class="form-control col-xl-8 f-left" required> 
                                        <input type="number" name="Marks" placeholder="Marks" class="form-control col-xl-4 f-right" required>
										<div id="textboxDiv"></div>
                                        <br>
                                      
                                         <br>
                                         <br>
										<button type="submit"  class="submit btn btn-primary btn-large"><i class="ti-plus"></i> Add Subjects</button>
			 
										</form>
										</div>	
										<div class="col-md-6 col-xl-3"></div>
										</div>
										<!-- Row end -->
										<!-- Row start -->
										
												<!-- Row end -->
									</div>
                                    <!-- Page-body end -->
           
@endsection
