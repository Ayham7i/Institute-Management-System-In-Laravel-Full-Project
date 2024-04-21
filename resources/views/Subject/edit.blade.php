
@extends('layouts.app')

@section('content')                               
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row m-t-20">
										<div class="col-md-6 col-xl-3"></div>
										<div class="col-md-6 col-xl-6 text-center m-gray">
										    <h5>Update Class Subjects</h5>
                                            <br>
										<form action="{{route('Subject.update',$subject->id)}}" method="POST" id="myform">
                                            @csrf
											@method('PUT')
										<select name="class_id" class="form-control" required>
										 @foreach ($data as $class)
                                         <option value='{{$class->id}}'>{{$class->name}}</option>
                                         @endforeach
										
                                        </select>
                                        <br>
										<!--<input type="text" name="s1" placeholder="Name Of Subject" class="form-control col-xl-8 f-left" required> <input type="number" name="marks1" placeholder="Marks" class="form-control col-xl-4 f-right" required>-->
										<div id="textboxDiv">
										    <div><input type='text' name='name' value='{{$subject->name}}' placeholder='Name Of Subject' class='form-control col-xl-8 f-left' required/>
                                            <input type='number' name='Marks' value='{{$subject->Marks}}' placeholder='Marks' class='form-control col-xl-4 f-right' required/></div>										    
										</div>
                                             <hr>
                                             <br>
                                             <br>
										<button type="submit" name="addsubjects" class="submit btn btn-primary btn-large"><i class="ti-check"></i> Update</button>
			 
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
