
								
                                    
@extends('layouts.app')


@section('content')
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row">
										    <div class="col-lg-12 col-md-12 text-center m-round p-20" style="background:#f7e5e9;">
											
												<h5><img src="{{asset($employee->Image)}}" width="100px" class="img-circle" height="100px"></h5><br><h3>{{$employee->name}}</h3>
																	
                                                <table style="margin: 0 auto; text-align: left; padding: 30px;" class="bg-m-gray m-white m-round">
                                                    <tbody>
                                                        <tr>
                                                            <td>Registration/ID:</td>
                                                            <td><b>{{$employee->id}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Type:</td>
                                                            <td><b>{{$employee->Type}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Joining Date:</td>
                                                            <td><b>{{$employee->Join_Date}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Account Status:</td>
                                                            <td><b>Active</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Portal URL:</td>
                                                            <td><b>email</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Username:</td>
                                                            <td><b>{{$user->email}}</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td>Password:</td>
                                                            <td><b>{{$user->temporary_password}}</b></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
												<h3>
                                                    <br>
                                                    <a href="{{route('User.edit',$id=$employee->id)}}" class="btn btn-sm btn-{{$user->status ? 'success' : 'danger'}}">
                                                        {{$user->status ? 'Enable' : 'Disable'}}
                                                    </a>
                                                </h3>
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

