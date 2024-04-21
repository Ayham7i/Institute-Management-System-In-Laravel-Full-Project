@extends('layouts.app')

@section('content')



								
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row">
										    <div class="col-md-6 col-xl-8">
											<div class="card m-round p-20">

												@if (Session::has('success'))
												<div class="alert alert-success" role="alert">
													{{Session::get('success')}}
	
												</div>
													
												@endif
										    <form action="{{route('Student.update',$student->id)}}" method="post" enctype="multipart/form-data">
												@csrf
												@method('PUT')
												 
		                                    <label>Change picture: <input type="file" class="form-control" name="Image" id="fileToUpload" value="{{$student->Image}}" required></label>
											<button type="submit" name="editphoto" class="btn btn-primary"><i class="ti-upload"></i> Upload</button>
		                                    </form>
											
											</div>
											<div class="card m-round p-20">

												@if (Session::has('success'))
												<div class="alert alert-success" role="alert">
													{{Session::get('success')}}
	
												</div>
													
												@endif
										    <form action="{{route('Student.update',$student->id)}}" method="post">
												@csrf
												@method('PUT')
												<div class="m-div">
										    <label class="m-label">Student Name</label>
											<input type="text" class="form-control m-field" placeholder="Name of Student" name="name" value="{{$student->name}}" required>
											</div>
											
										
											
											<div class="m-div">
										    <label class="m-label">Date Of Admission</label>
										    <input type="date" class="form-control m-field" name="Admission_Date" value="{{$student->Admission_Date}}">
										    </div>
										    
											<div class="m-div">
										    <label class="m-label">Class</label>
											<select name="class" class="form-control m-field" required>
																<option value="">select class</option>
																<option value='{{$student->id}}' selected>{{$student->class->name}}</option>
																@foreach ($data as $class)

													           <option value='{{$class->id}}'>{{$class->name}}</option>
													            @endforeach
											 </select>
											</div>
											<div class="m-div">
										    <label class="m-label">Student's Family</label>
											<select name="family" class="form-control m-field">
											 <option value="0">select Family</option>
																																</select>
											</div>
											<div class="m-div">
										    <label class="m-label">Discount In Fee</label>
											<input type="number" class="form-control m-field" placeholder="Discount In Fee %" name="Discount" value="{{$student->Discount}}" required>
											</div>
											
											<button type="submit" name="edit1" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
		                                    </form>
											</div>
											
											
											<div class="card m-round p-20">

												@if (Session::has('success'))
												<div class="alert alert-success" role="alert">
													{{Session::get('success')}}
	
												</div>
													
												@endif

										    <form action="{{route('Student.update',$student->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Date Of Birth</label>
										    <input type="date" class="form-control m-field" name="DOB" value="{{$student->DOB}}">
										    </div>
											
											<div class="m-div">
										    <label class="m-label">Gender</label>
											<select name="Gender" class="form-control m-field" required>
												<option value="empty">Gender</option>
												<option value="{{$student->Gender}}" selected>{{$student->Gender}}</option>
												<option value="1"  >Male</option>
												<option value="0"  >Female</option>
											</select>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Birth Form No.</label>
											<input class="form-control m-field" type="text" placeholder="Birth Form No." name="Birth_FromId" value="{{$student->Birth_FromId}}" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Religion</label>
											<select class="form-control m-field" name="Religion" required>
																<option value="empty">Religion</option>
																<option value="{{$student->Religion}}"selected>{{$student->Religion}}</option>
																
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
																<option value="Muslim">Muslim</option>
                    											<option value="Muslim &amp; Hafiz">Muslim &amp; Hafiz</option>
                    											<option value="Non-Muslim">Non-Muslim</option>
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
											<div class="m-div">
										    <label class="m-label">Orphen Student</label>
											<select name="Orphen" class="form-control m-field" required>
																<option value="empty">Orphen Student</option>
																<option value="{{$student->Orphen}}">{{$student->Orphen}}</option>
																<option value="Yes">YES</option>
																<option value="No">NO</option>
											</select>
											</div>
											
											<div class="m-div">
										    <label class="m-label">OSC</label>
											<select name="osc" class="form-control m-field" required>
																<option value="empty">OSC</option>
																<option value="Yes">YES</option>
																<option value="No">NO</option>
											</select>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Previous School</label>
											<input type="text" class="form-control m-field" placeholder="Previous School" name="Pre-School" value="{{$student->Pre_School}}" required>
											</div>
											
											<button type="submit" name="edit2" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											
											<div class="card m-round p-20">

												@if (Session::has('success'))
												<div class="alert alert-success" role="alert">
													{{Session::get('success')}}
	
												</div>
													
												@endif

										    <form action="{{route('Student.update',$student->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Identification Mark</label>
											<input type="text" class="form-control m-field" name="Ident_Mark" value="{{$student->Ident_Mark}}" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Blood Group</label>
											<select name="Blood-Group" class="form-control m-field">
											<option value="None">None</option>
											<option value="{{$student->Blood_Group}}"selected>{{$student->Blood_Group}}</option>
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
										    <label class="m-label">Disease</label>
											<input type="text" class="form-control m-field" name="Discease_if" value="{{$student->Discease_if}}" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Previous ID / Board No.</label>
											<input type="text" class="form-control m-field" name="previousid" value="" required>
											</div>
											
											<div class="m-div">
										    <label class="m-label">Additional Info</label>
											<input type="text" class="form-control m-field" name="additionalinfo" value="" required>
											</div>
											
										    <button type="submit" name="edit6" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											
											
											<div class="card m-round p-20">

												@if (Session::has('success'))
												<div class="alert alert-success" role="alert">
													{{Session::get('success')}}
	
												</div>
													
												@endif
										    <form action="{{route('Student.update',$student->id)}}" method="post">

												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Address</label>
											<input type="text" class="form-control m-field" placeholder="Address" name="Address" value="{{$student->Address}}" required>
											</div>
										    <button type="submit" name="edit3" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											<div class="card m-round p-20">

												@if (Session::has('success'))
												<div class="alert alert-success" role="alert">
													{{Session::get('success')}}
	
												</div>
													
												@endif
												
										    <form action="{{route('Student.update',$student->id)}}" method="post">
												@csrf
												@method('PUT')
											<div class="m-div">
										    <label class="m-label">Phone to recieve SMS</label>
		                                    <input type="tel" class="form-control m-field" placeholder="Mobile No" name="Phone" value="{{$student->Phone}}" required>
		                                    </div>
										    <button type="submit" name="edit13" class="btn btn-primary m-t-10 f-right"><i class="ti-reload"></i> Update</button>
											</form>
											</div>
											
											
											
											</div>
											
											<div class="col-md-6 col-xl-4 text-center m-round" style="background:#f7e5e9;">
										    
											<div style="padding-top:15px;">
												 <img src="{{asset($student->Image)}}" class="img-circle" style="width:150px; height:150px;">
												 </div>
												 <div style="padding-top:15px;">
												 <h4 style="margin:0px;line-height:20px;" class="m-orange">AYHAM ANOWER AL-AKHALLY</h4>
												 <h6 style="margin-top:0px;" class="m-gray">Father: </h6>
												 </div>
												 <div style="padding:15px;" class="bg-m-gray m-white m-round text-left">
												 <table style="width:100%;">
												 <tr><td>Reg. No.</td><td>3248</td></tr>
												 <tr><td>Admission Date:</td><td>2023-06-29</td></tr>
												 <tr><td>Class:</td><td>english</td></tr>
												 <tr><td>Family:</td><td></td></tr>
												 <tr><td>Discount In Fee:</td><td>0 %</td></tr>
												 </table>
												 </div>
												 <div style="padding:10px;" class="text-left m-gray">
												 <table style="width:100%;" id="tdesign">
												 <tr><td>Date Of Birth:</td><td>0000-00-00</td></tr>
												 <tr><td>Gender:</td><td>empty</td></tr>
												 <tr><td>Birth Form ID:</td><td></td></tr>
												 <tr><td>Religion:</td><td>empty</td></tr>
												 <tr><td>OS:</td><td>empty</td></tr>
												 <tr><td>OSC:</td><td>empty</td></tr>
												 <tr><td>Previous School:</td><td></td></tr>
												 <tr><td>Cast:</td><td></td></tr>
												 <tr><td>Identification Mark:</td><td></td></tr>
												 <tr><td>Blood Group:</td><td>None</td></tr>
												 <tr><td>Disease:</td><td></td></tr>
												 <tr><td>Previous ID/Board</td><td></td></tr>
												 <tr><td>Additional Info:</td><td></td></tr>
												 
												 <tr><td>Total Children:</td><td>0</td></tr>
												 </table>
												 <span>
												 Address<br> Shomila												 </span>
												 </div>
												 <div style="padding:15px;" class="bg-m-gray m-white m-round text-left">
												 <table style="width:100%;" id="tdesign">
												 <tr><td>Father ID:</td><td></td></tr>
												 <tr><td>Father Education:</td><td></td></tr>
												 <tr><td>Father Mobile:</td><td></td></tr>
												 <tr><td>Father Occupation:</td><td></td></tr>
												 <tr><td>Father Profession:</td><td></td></tr>
												 <tr><td>Father Income:</td><td>0</td></tr>

												 </table>
												 </div>
												 <div style="padding:10px;" class="text-left m-gray">
												 <table style="width:100%;" id="tdesign">
												 <tr><td>Mother Name:</td><td></td></tr>
												 <tr><td>Mother Education:</td><td></td></tr>
												 <tr><td>Mother ID:</td><td></td></tr>
												 <tr><td>Mother Mobile:</td><td></td></tr>
												 <tr><td>Mother Occupation:</td><td></td></tr>
												 <tr><td>Mother Profession:</td><td></td></tr>
												 <tr><td>Mother Income:</td><td>0</td></tr>
												 
												 </table>
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