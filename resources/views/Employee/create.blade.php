
@extends('layouts.app')


@section('content')   
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row" style="padding:5px 5px 5px 15px;">
										<h3 class="text-center w-100 m-orange">Employee Form</h3>
									    </div>
									<form action="{{route('Employee.store')}}" method="post" enctype="multipart/form-data" id="myform">
										@csrf
										<div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
										<h5 class="w-100 p-10 bg-m-dblue m-white m-b-20"> Basic Information <span style="font-size:14px;" class="f-right">[ *Required ]</span></h5>
										    <div  class="col-lg-4">
											<input type="text" class="form-control" placeholder="Name of Employee" name="name" id="tname" required>
											@error('name')
											<div style="color: rgb(245, 72, 72)">{{ $message }}</div>
											@enderror
											<label class="p-t-10">Picture: <span style="font-size:10px;">[ optional ]</span><br> 
											<input type="file" class="form-control" name="Image" id="fileToUpload"><span style="font-size:10px;">[ Max size 100KB ]</span></label>
											
											@error('Image')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
											</div>
											<div class="col-lg-4">
											
											
											<input type="text" placeholder="Mobile No." class="form-control" name="Phone">
											@error('Phone')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
											<label class="m-t-10">joining Date:<br>
											 <input type="date" class="form-control" name="Join_Date" required></label>
											</div>
											<div class="col-lg-4">
											<select name="Type" class="form-control" required>
											<option value="">----Employee Type----</option>
											<option value="Principal">Principal</option>
											<option value="Management Staff">Management Staff</option>
											<option value="Teacher">Teacher</option>
											<option value="Accountant">Accountant</option>
											<option value="Store Manager">Store Manager</option>
											<option value="Other">Other</option>
											</select>
											<input type="number" class="form-control m-t-10" placeholder="Monthly Salary" name="Salary" required>
											<span style="display:none;">
											<input type="checkbox" class="m-t-10" name="profile" value="V"><font style="font-size:12px;"> Show profile on website</font>
											</span>
											</div>
										</div>
										<div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
										<h5 class="w-100 p-10 bg-m-gray m-white m-b-20">  Other Info <span style="font-size:14px;" class="f-right">[ Optional ]</span></h5>
										
										    <div  class="col-lg-4">
											<input type="text" class="form-control" placeholder="Father Name" name="Father_Name">
											<input type="text" class="form-control m-t-10" placeholder="CNIC" name="CNIC">
											<input type="text" class="form-control m-t-10" placeholder="Education" name="Education">
											
											</div>
											<div class="col-lg-4">
											<select name="Gender" class="form-control">
											<option value="None">Gender</option>
											<option value="male">Male</option>
											<option value="female">Female</option>
											</select>
											<select name="Religion" class="form-control m-t-10">
											<option value="None">Religion</option>
											<option value="African Traditional &amp; Diasporic">African Traditional &amp; Diasporic</option>
											<option value="Agnostic">Agnostic</option>
											<option value="Atheist">Atheist</option>
											<option value="Baha'i">Baha'i</option>
											<option value="Buddhism">Buddhism</option>
											<option value="Cao Dai">Cao Dai</option>
											<option value="Chinese traditional religion">Chinese traditional religion</option>
											<option value="Christianity">Christianity</option>
											<option value="Hinduism">Hinduism</option>
											<option value="Islam">Islam</option>
											<option value="Jainism">Jainism</option>
											<option value="Juche">Juche</option>
											<option value="Judaism">Judaism</option>
											<option value="Neo-Paganism">Neo-Paganism</option>
											<option value="Nonreligious">Nonreligious</option>
											<option value="Rastafarianism">Rastafarianism</option>
											<option value="Secular">Secular</option>
											<option value="Shinto">Shinto</option>
											<option value="Sikhism">Sikhism</option>
											<option value="Spiritism">Spiritism</option>
											<option value="Tenrikyo">Tenrikyo</option>
											<option value="Unitarian-Universalism">Unitarian-Universalism</option>
											<option value="Zoroastrianism">Zoroastrianism</option>
											<option value="primal-indigenous">primal-indigenous</option>
											<option value="Other">Other</option>
											</select>
											<select name="Blood_Group" class="form-control m-t-10">
											<option value="None">Blood Group</option>
											<option value="A+">A+</option>
											<option value="A-">A-</option>
											<option value="B+">B+</option>
											<option value="B-">B-</option>
											<option value="O+">O+</option>
											<option value="O-">O-</option>
											<option value="AB+">AB+</option>
											<option value="AB-">AB-</option>
											</select>
											</div>
											<div class="col-lg-4">
											<input type="text" class="form-control" placeholder="Experience/specialization" name="Experience">
											<input type="email" class="form-control m-t-10" placeholder="email" name="Email">
											<label class="m-t-10">Date Of Birth:<br> 
											<input class="form-control" type="date" name="DOB"></label>
											
											</div>
											<div class="col-lg-8">
											<input type="text" placeholder="Address" class="form-control m-t-10" name="Address">
							                </div>
											
										
										</div>
                                        
										<hr>
										<div class="row" style="padding:5px 5px 5px 15px;">
										<h5 class="w-100 text-center">
										<button class="btn btn-large bg-m-orange m-white" type="reset"><i class="ti-reload"></i> Reset</button>
										<button class="btn btn-large bg-m-dblue m-white" style="width:170px;padding:10px;" type="submit" id="submitBtn" name="submit"><i class="ti-check"></i>   Submit</button>
										</h5>
										</form>
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
