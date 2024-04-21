@extends('layouts.app')


@section('content')
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row">
										<div class="col-md-6 col-xl-4"></div>
										<div class="col-md-6 col-xl-4 text-left">
										<h4 class="text-center m-orange"> Add New Examination</h4><hr>
										<form action="{{route('exam.store')}}" method="post">
										@csrf
										<input type="text" name="name" class="form-control" placeholder="Examination Name" required>
										<label class="m-t-10">Starting Date: <input class="form-control" type="date" name="Starting_Date" required></label>
										<label>Ending Date: <input class="form-control" type="date" name="Ending_Date" required></label><hr>
										<h5 class="text-center"><button class="btn btn-danger" type="submit" ><i class="ti-check"></i> Create </button></h5>
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

