@extends('layouts.app')

@section('content')	
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        
                                        <div class="row" style="margin-top:20px;">
                                            <div class="col-12">
											<table id="example" class="table table-striped w-100" style="margin-top:10px;width:100%;color:#333;background:#fff;">
											<thead>
											<tr>
											
											<th><b>ID</b></th>
											<th><b>STUDENT NAME</b></th>
											<th><b>CLASS NAME</b></th>
											<th><b>EXAM NAME</b></th>
											<th><b>TOTAL MARKS</b></th>
											
											</tr>
											</thead>
											<tbody>
																						<tr>
											@foreach ($marks as $mark)
                                                  
                                              
											<td>{{$mark->studentid}}</td>
											<td>{{$mark->studentname}}</td>
											<td>{{$mark->classname}}</td>
											<td>{{$mark->examname}}</td>
											<td>{{$mark->marks}}</td>
											</tr>
                                            @endforeach
											
											
											
											
																						</tbody>
											</table>
											</div>
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