
@extends('layouts.app')


@section('content')                                   
                                    <!-- Page-body start -->
                                    <div class="page-body">
										@if (Session::has('success'))
										<div class="alert alert-success" role="alert">
											{{Session::get('success')}}

										</div>
											
										@endif
                                        <!-- Row start -->
										<div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
										    <div class="col-md-6 col-xl-4">
										    
											
											<form action="allemployees.php" method="post">
											<input type="text" id="tags1" placeholder="Search Employee" style="background:none;border:none;border-bottom:1px solid gray;padding:9px 10px 8px 10px;width:80%;">
											<input class="button" id="idsearch" type="text" name="searchby" placeholder="ID" style="display:none;" required>
											<button type="submit" class="btn" name="searchid" style="background:none;border:none;border-bottom:1px solid gray;padding:9px 10px 8px 10px;"><i class="ti-search"></i></button>
											</form>
											</div>
											<div class="col-md-6 col-xl-4">
											
											</div>
											<div class="col-md-6 col-xl-4 f-right">
											
											<a href="allemployees.php" class="f-right m-t-10"><button class="btn" title="Reload All"><i class="ti-reload"></i></button></a>
											</div>
										</div>
                                        <div class="row" style="margin-top:20px;">
												
											@if($employee->count()>0)

											@foreach ($employee as $employee)
													
																				
											<div style="float:left;text-align:center;margin:10px;width:155px;line-height:15px;background:#fff;padding:15px;" class="m-round">
											<img src="{{asset($employee->Image)}}" class="img-circle" style="width:80px;height:80px;">
											<br><span style="font-size:11px;color:#333;">{{$employee->name}}</span><br><b style="font-size:11px;color:#555;">{{$employee->Type}}</b><br>
											<input type="text" name="id" value="3248" style="display:none;"><br>
											@if(auth()->user()->role_id=="1")
											<a href="{{ route('Employee.show',$employee->id) }}">
											<button class="btn btn-sm m-round bg-m-gray m-white" type="submit" style="border:0px;width:30px;height:30px;padding:8px;"  title="view"><i class='bx bx-search-alt-2' ></i></button>
											</a>
											<a href="{{ route('Employee.edit',$employee->id) }}">
												<button class="btn btn-sm m-round bg-m-blue1 m-white" type="submit" style="border:0px;width:30px;height:30px;padding:8px;"  title="edit"><i class='bx bx-pencil' ></i></button>
											</a>
											<form action="{{ route('Employee.destroy',$employee->id) }}" method="POST" onsubmit="return confirm('Are You Sure You Want To Delete Student Record ?')">
											
											   @csrf
											   @method('DELETE')
												<button class="btn btn-sm m-round bg-m-orange m-white" type="submit"  style="border:0px;width:30px;height:30px;padding:9px;"  title="delete"><i class='bx bx-trash'></i></button>
											</form>
											@endif
											<br><span style="font-size:9px;color:#333; font-style: italic; ">By: {{$employee->user->name}}</span>
											<br><span style="font-size:9px;color:#333; font-style: italic;">at: {{Date('d-m-Y',$employee->updated_it)}}</span>
											</div>

											@endforeach	

											@endif
											
																						

											@if(auth()->user()->role_id=="1")

											<a href="{{route('Employee.create')}}">
											<button class="btn bg-m-blue m-white" style="float:left;text-align:center;margin:15px;width:155px;height:155px;border-radius:50%;">
											<i class="ti-plus"></i><br>Add New</button>
											</a>
											@endif
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

