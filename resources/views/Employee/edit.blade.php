
@extends('layouts.app')


@section('content') 
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row">
										    <div class="col-md-6 col-xl-8">
											<div class="card m-round p-20">
										    <form action="{{route('Employee.update',$employee->id)}}" method="post" enctype="multipart/form-data">
												@csrf
												@method('PUT')
											<label>Choose a picture: <input type="file"  class="form-control" name="Image" id="fileToUpload" required></label>
											@error('Image')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
											<button type="submit" name="editphotoe" class="btn btn-primary"><i class="ti-upload"></i> Upload</button>
		                                    </form>
											
											</div>
											<div class="card m-round p-20">
										    <form action="{{route('Employee.update',$employee->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Name Of Employee</label>
											<input type="text" placeholder="Name" class="form-control m-field" name="name" value="{{$employee->name}}" required>
											@error('name')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
										</div>
											
											<div class="m-div">
										    <label class="m-label">Father / Husband Name</label>
											<input type="text" placeholder="Father/Husband Name"  class="form-control m-field" name="Father_Name" value="{{$employee->Father_Name}}" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Employee ID NO:</label>
											<input type="text" placeholder="Employee ID NO."  class="form-control m-field" name="CNIC" value="{{$employee->CNIC}}" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Education</label>
											<input type="text" placeholder="Education"  class="form-control m-field" name="Education" value="{{$employee->Education}}" required>
											</div>
											<span style="display:none;">
											<input type="checkbox" class="m-t-10" name="profile" value="V"><font style="font-size:12px;"> Show profile on website</font>
											</span>
											<button type="submit" name="edit1e" class="btn btn-primary m-t-20 f-right"><i class="ti-reload"></i> Update</button>
		                                    </form>
											</div>
											<div class="card m-round p-20">
										    <form action="{{route('Employee.update',$employee->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Phone Number</label>
											<input type="text" placeholder="Phone No"  class="form-control m-field" name="Phone" value="{{$employee->Phone}}" required>
											@error('Phone')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
										</div>
											
											<div class="m-div">
										    <label class="m-label">Email Address</label>
											<input type="email" placeholder="email"  class="form-control m-field" name="Email" value="{{$employee->Email}}" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Gender</label>
											<select  class="form-control m-field" name="Gender" required>
											<option value="">Gender</option>
											<option value="1" selected>Male</option>
											<option value="1" >Male</option>
											<option value="0" >Female</option>
											</select>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Religion</label>
											<select  class="form-control m-field" name="Religion" required>
											<option value="None">None</option>
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
											</div>
											<button type="submit" name="edit2e" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											<div class="card m-round p-20">
										    <form action="{{route('Employee.update',$employee->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Address</label>
											<input type="text" class="form-control m-field" placeholder="Address" name="Address" value="{{$employee->Address}}" required>
											</div>
											
										    <button type="submit" name="edit3e" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											<div class="card m-round p-20">
										    <form action="{{route('Employee.update',$employee->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Date of Birth</label>
										    <input type="date"  class="form-control m-field" name="DOB" value="{{$employee->DOB}}">
										    </div>
										    
										    <div class="m-div">
										    <label class="m-label">Blood Group</label>
		                                    <select  class="form-control m-field" name="Blood_Group" required>
											<option value="None">None</option>
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
											<div class="m-div">
										    <label class="m-label">Experience</label>
											<input  class="form-control m-field" type="text" placeholder="Experience" name="Experience" value="{{$employee->Experience}}" required>
											</div>
											<button type="submit" name="edit4e" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											<div class="card m-round p-20">
										    <form action="{{route('Employee.update',$employee->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Joining Date</label>
											<input  class="form-control m-field" type="date" name="Join_Date" value="{{$employee->Join_Date}}" required>
											</div>
											<div class="m-div">
										    <label class="m-label">Employee Type</label>
											<select name="Type"  class="form-control m-field" required>
											    <option value="Teacher">Teacher</option>
												<option value="Principal">Principal</option>
												<option value="{{$employee->Type}}" selected>{{$employee->Type}}</option>
												<option value="Management Staff">Management Staff</option>
												<option value="Teacher">Teacher</option>
												<option value="Accountant">Accountant</option>
												<option value="Store Manager">Store Manager</option>
												<option value="Other">Other</option>
											</select>
											</div>
											<div class="m-div">
										    <label class="m-label">Salary</label>
											<input type="text"  class="form-control m-field" placeholder="Salary" name="Salary" value="{{$employee->Salary}}" required>
											</div>
											<button type="submit" name="edit5e" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
		                                    </form>
											</div>
											
											
											</div>
											
											<div class="col-md-6 col-xl-4 text-center m-round" style="background:#f7e5e9;">
										    
											<div style="padding-top:15px;">
												 <img src="{{asset($employee->Image)}}" class="img-circle" style="width:150px; height:150px;">
												 </div>
												 <div style="padding-top:15px;">
												 <h4 style="margin:0px;line-height:20px;" class="m-orange">Divad J Malan</h4>
												 <h6 style="margin-top:0px;" class="m-gray">Father: </h6>
												 </div>
												 <div style="padding:15px;" class="bg-m-gray m-white m-round text-left">
												 <ul>
												 <li><font> SCHOOL ID: 60982</font></li>
												 <li><font> EMPLOYEE TYPE: Teacher</font></li>
												 <li><font> SALARY: 770544</font></li>
												 <li><font> USERNAME: 50065n6i8g57668</font></li>
												 <li><font> PASSWORD: 50065n6i8g57668</font></li>
												 </ul>
												 </div>
												 <div style="padding:10px;" class="text-left m-gray">
												 <font><span class="icon-home"></span> HOME ADDRESS: "Harvid"</font><br>
												 <font><span class="icon-phone"></span> PHONE: 534533</font><br>
												 <font><span class="icon-envelope"></span> EMAIL: </font><br>
												 </div>
												 <div style="padding:15px;" class="bg-m-gray m-white m-round text-left">
												 <ul>
												 <li><font> EMPLOYEE CNIC: </font></li>
												 
												 <li><font> EDUCATION: </font></li>
												 </ul>
												 </div>
												 <div style="padding:10px;" class="text-left m-gray">
												 <ul>
												 <li><font> GENDER: male</font></li>
												 <li><font> RELIGION: None</font></li>
												 <li><font> DATE OF BIRTH: 1999-07-27</font></li>
												 <li><font> JOINING DATE: 2023-07-27</font></li>
												 <li><font> BLOOD GROUP: None</font></li>
												 <li><font> EXPERIENCE: </font></li>
												 </ul>
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
    @endsection

