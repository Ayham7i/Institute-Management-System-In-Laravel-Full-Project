
@extends('layouts.app')

@section('content')							
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row" style="margin:10px;margin-top:0px;">
										    <div class="col-12 bg-m-blue1 m-white p-20 f-16" style="border-radius:35px;"><strong><i class="ti-settings"></i> Account Settings</strong></div>
										</div>
                                        <div class="row" style="margin:10px;">
										
										<div class="col-lg-7 p-20 text-left p-t-0">
										<form action="{{ route('Settings.update',$id=auth()->user()->id) }}" method="POST" id="myform">
											@csrf
											@method('PUT')
									  
										<div class="m-div m-t-20">
												<label class="m-label bg-gradient-blue m-white">Name*</label>
												<input type="text" value="{{$data->name}}"  name="name" placeholder="New Name ?" class="form-control m-field"  required>
										</div>
										<div class="m-div m-t-20">
									    <label class="m-label bg-gradient-blue m-white">Email*</label>
										<input type="email" value="{{$data->email}}"  name="email" placeholder="New email ?" class="form-control m-field"  required>
										</div>
										
										<div class="m-div m-t-20">
											<label class="m-label bg-gradient-blue m-white">Password*</label>
											<div class="input-group">
												<input id="password-field" type="password" class="form-control m-field" name="password" value="{{$data->temporary_password}}" required>
												<div class="input-group-append">
													<span class="input-group-text toggle-password" id="toggle-password">
														<i class="fa fa-fw fa-eye"></i>
													</span>
												</div>
											</div>
										</div>
									
										
																				<div>
								
										
										</div>
										<h6 class="text-center m-t-30">
											<button type="submit" name="changepassword" class="btn bg-gradient-info m-white" style="border-radius:10px; background-color: #648cf8;"><i class="fas fa-check"></i> Update settings</button>										</h6>
										</form> 
										</div>
										<div class="col-lg-5 p-20">
										<div class="row m-round" style="background-color:#6587f5;">
										    <div class="col-12 p-30 m-white m-round text-center" style="background: url(assets/bl.png) left bottom no-repeat, url(assets/tr1.png) top right no-repeat;background-size:60px;">
										<h5 class="m-white"><i class="ti-lock"></i> Account details</h5><hr>
									   <table style="width:100%;font-size:12px;" ><tr>
										<td style="text-align:right;padding-right:15px;"><b class="m-black">Name:</b>
										</td><td style="text-align:left; "> {{$data->name}}</td></tr>
										<td style="text-align:right;padding-right:15px;"><b class="m-black">Username:</b>
										</td><td style="text-align:left; "> {{$data->email}}</td></tr>
									   <tr><td style="text-align:right;padding-right:15px;"><b class="m-black">Password:</b></td>
									   <td style="text-align:left;"  >
									   <span id="stars"> </span>
									   <span id="password" > {{$data->temporary_password}}</span>
									   <i class="ti-eye m-l-10" id="eye"></i></td>
									   </td>
									   </tr>
									  
									   <tr><td style="text-align:right;padding-right:15px;">
									       <b class="m-black">Expiry:</b></td><td style="text-align:left; ">
									        Never
									   </td></tr>
									   									   </table>
									   <hr>
									   <h5 class="text-center">
									   <a href="deleteaccount.php" onclick="return confirm('Are You Sure You Want To Delete Your Account ?')"><button class="btn bg-gradient-red m-white"  style="border-radius:20px;" name="adelete" title="delete"><i class="ti-trash"></i> Delete account</button></a>
									   </h5>
									   </div>
									   </div>
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

	<script>
		document.addEventListener("DOMContentLoaded", function() {
			const passwordField = document.getElementById("password-field");
			const togglePassword = document.getElementById("toggle-password");
	
			togglePassword.addEventListener("click", function() {
				if (passwordField.type === "password") {
					passwordField.type = "text";
					togglePassword.innerHTML = '<i class="fa fa-fw fa-eye-slash"></i>';
				} else {
					passwordField.type = "password";
					togglePassword.innerHTML = '<i class="fa fa-fw fa-eye"></i>';
				}
			});
		});
	</script>
	
@endsection
