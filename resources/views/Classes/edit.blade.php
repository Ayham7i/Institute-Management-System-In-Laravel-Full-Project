@extends('layouts.app')


@section('content')
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
                                        <div class="row m-t-20">
										<div class="col-md-6 col-xl-4"></div>
										<div class="col-md-6 col-xl-4 text-center m-gray">
										<form action="updatingclassdetail.php" method="POST">Class Name:<br>
										<input type="text" class="form-control" name="classname" value="CS50" placeholder="Class Name" required ><br>
										Monthly Fee:<br>
										<input type="Number" class="form-control" name="fees" value="535" placeholder="Monthly Fees" required ><br>
										<select name="teacher" class="form-control" required>
										    <option value="60982">---- Select Class Teacher ----</option>
											
																						    <option value="57667">AYHAM ANOWER AL-AKHALLY</option>
																						    <option value="60982">Divad J Malan</option>
																						
										</select>
										<hr>
                                        <a href="{{route('Class.edit')}}">
                                            <button type="submit" class="submit btn btn-primary btn-large" name="updatingclass"><i class="ti-reload"></i> Update</button>


                                        </a>
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

