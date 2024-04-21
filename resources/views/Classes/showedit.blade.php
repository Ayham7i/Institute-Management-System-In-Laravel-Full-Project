
@extends('layouts.app')


@section('content')	
								
                                   
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row m-t-20">
										<div class="col-md-6 col-xl-4"></div>
										<div class="col-md-6 col-xl-4 text-center">
										<form action="editclassdetail.php" method="POST" id="myform">
										<select name="class" class="form-control" required>
										<option value="">-----SELECT CLASS-----</option>
										<option value='122783'>CS50</option>
									    </select><hr>
										 
										<button type="submit" class="submit btn btn-primary btn-large" name="updateclass"><i class="ti-reload"></i> Update</button>
										<button type="submit" class="submit btn btn-danger btn-large" name="deleteclass"><i class="ti-close"></i> Delete</button>
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

