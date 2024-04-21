@extends('layouts.app')


@section('content')


							
                                    
                                    <!-- Page-body start -->
                                    <div class="page-body">
                                        <!-- Row start -->
										<div class="row" style="padding:5px 5px 5px 15px;">
										<h3 class="text-center w-100 m-orange">Admission Form</h3>
										</div>
                                     <form method="post" action="{{route('Student.store')}}" enctype="multipart/form-data">
										@csrf
										<div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
										<h5 class="w-100 p-10 bg-m-dblue m-white m-b-20"> Student Information <span style="font-size:14px;" class="f-right">[ *Required ]</span></h5>
										   
                                        <div  class="col-lg-4">
											<input name="name" type="text" class="form-control" placeholder="Name of Student"  required>
											@error('name')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
											<label class="p-t-10">Picture: <span style="font-size:10px;">[ optional ]</span><br> 
											<input name="Image" type="file" class="form-control" ><span style="font-size:10px;">[ Max size 100KB ]</span></label>
											@error('Image')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
										</div>
											<div class="col-lg-4">
											<div class="m-div" style="margin-top:0px !important;">
										    <label class="m-label">Last Reg: 3248</label>
											<input style="" type="text" class="form-control m-field" placeholder="Registration No:" readonly
											 onblur="checkMailStatus()">
											</div>
											<i id="checkReg" style="color:orangered;"></i>
											<label class="p-t-10 w-100">Admission Date:<br> 
                                            <input name="Admission_Date" type="date" class="form-control"  required></label>
											
											</div>
											<div class="col-lg-4">
                                             
						
													<select name="class_id" class="form-control" required>
													<option value="">select class</option>
													@foreach ($data as $class)

													<option value='{{$class->id}}'>{{$class->name}}</option>
													@endforeach

												
														
		
												
												
																								
												</select>
												

								

											<input name="Discount" type="number" class="form-control m-t-10" placeholder="Discount In Fee in %"  required>
											<font style="font-size:9px;color:#999;">Student/Guardian mobile no to receive SMS</font><br>
                                            <input name="Phone" class="form-control" type="tel" placeholder="Mobile No" >
											@error('Phone')
                                                <div  style="color: rgb(245, 72, 72)">{{ $message }} </div>
                                            @enderror
										</div>
										</div>
										<div class="row" style="border:0px solid #9698d6;padding:5px 5px 5px 15px;">
										<h5 class="w-100 p-10 bg-m-gray m-white m-b-20">  Other Info <span style="font-size:14px;" class="f-right">[ Optional ]</span></h5>
										
										    <div  class="col-lg-4">
											<div class="m-div" style="margin-top:0px !important;">
										    <label class="m-label">Date Of Birth</label>
                                            <input name="DOB" type="date"  class="form-control m-field">
										    </div>
							
											<select  name="Gender" class="form-control m-t-10">
											<option value="empty">Gender</option>
											<option value="1">Male</option>
											<option value="0">Female</option>
											</select>
											<input type="text" placeholder="Any Identification Mark ?" name="Ident_Mark" class="form-control m-t-10">
											<select name="Blood-Group" class="form-control m-t-10">
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
											<input type="text" placeholder="Disease if any ?" name="Discease_if" class="form-control m-t-10 m-b-10">
											</div>
											<div class="col-lg-4">
											<input type="text" placeholder="Student Birth Form ID / NIC" name="Birth_FromId" class="form-control">
											<input type="text" placeholder="Cast" name="cast" class="form-control m-t-10">
											<input type="text" placeholder="Previous School" name="Pre-School" class="form-control m-t-10">
											<input type="text" placeholder="Previous ID / Board Roll No." name="previousid" class="form-control m-t-10">
											<input type="text" placeholder="Any Additional Note" name="additionalinfo" class="form-control m-t-10 m-b-10">
											
											</div>
											<div class="col-lg-4">
											<select name="Orphen" class="form-control">
											<option value="empty">Orphen Student</option>
											<option value="Yes">YES</option>
											<option value="No">NO</option>
											</select>
											<select name="osc" class="form-control m-t-10">
											<option value="empty">OSC</option>
											<option value="Yes">YES</option>
											<option value="No">NO</option>
											</select>
											<select name="Religion" class="form-control m-t-10">
											<option value="empty">Religion</option>
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
											<select name="family" class="form-control m-t-10">
											<option value="0">select Family</option>
											</select>
							                <input type="number" name="noc" placeholder="Total Siblings" class="form-control m-t-10">
											</div>
											<div class="col-lg-8">
											<input type="text" placeholder="Address" class="form-control m-t-10 m-b-10" name="Address">
							                </div>
							                
											<div class="col-lg-4 m-t-10">
											    
                                                
                                              
											</div>
										
										</div>
                                       
										
										</div><hr>
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
    <!-- Modal -->
    <div class="modal fade" id="addnewclass" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header  bg-m-blue1 m-white" style="padding-top:2px;padding-bottom:2px;">
                    
                    <span class="modal-title text-center" style="display:inline;"><img src="assets/images/icon1.png" style="max-width:20px;"> IMS</span>
                    <button type="button" class="close" style="display:inline;font-size:22px;" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:5px;padding-bottom:5px;">
                <strong><i class="ti-alert"></i> Alert</strong>
                <p class="f-12">No Class has been found. Please add at leaset one Class before to access this feature.</p>
                </div>
                <div class="modal-footer" style="padding-top:5px;padding-bottom:10px;">
                    <a href="addnewclass.php"><button type="button" class="btn btn-sm bg-gradient-success m-white f-10">Ok, Add Class</button></a>
                    
                    
                </div>
            </div>
          
        </div>
    </div>
<!-- end Modal -->
<!-- Modal -->
    <div class="modal fade" id="addsubjects" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header  bg-m-blue1 m-white" style="padding-top:2px;padding-bottom:2px;">
                    
                    <span class="modal-title text-center" style="display:inline;"><img src="assets/images/icon1.png" style="max-width:20px;"> </span>
                    <button type="button" class="close" style="display:inline;font-size:22px;" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:5px;padding-bottom:5px;">
                <strong><i class="ti-alert"></i> Alert</strong>
                <p class="f-12">No Subject Found against this class. Please assign subjects to this class first!</p>
                </div>
                <div class="modal-footer" style="padding-top:5px;padding-bottom:10px;">
                    <a href="subjects.php"><button type="button" class="btn btn-sm bg-gradient-success m-white f-10">Ok, Add Subjects</button></a>
                    
                    
                </div>
            </div>
          
        </div>
    </div>
<!-- end Modal -->
<!-- Modal -->
    <div class="modal fade" id="addteacher" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header  bg-m-blue1 m-white" style="padding-top:2px;padding-bottom:2px;">
                    
                    <span class="modal-title text-center" style="display:inline;"><img src="assets/images/icon1.png" style="max-width:20px;">IMS</span>
                    <button type="button" class="close" style="display:inline;font-size:22px;" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:5px;padding-bottom:5px;">
                <strong><i class="ti-alert"></i> Alert</strong>
                <p class="f-12">0 Teachers ! Please add a Teacher first.</p>
                </div>
                <div class="modal-footer" style="padding-top:5px;padding-bottom:10px;">
                    <a href="addnewteacher.php"><button type="button" class="btn btn-sm bg-gradient-success m-white f-10">Ok, Add Teacher</button></a>
                    
                    
                </div>
            </div>
          
        </div>
    </div>
<!-- end Modal -->
<!-- Modal -->
    <div class="modal fade" id="addchaptersm" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header  bg-m-blue1 m-white" style="padding-top:2px;padding-bottom:2px;">
                    
                    <span class="modal-title text-center" style="display:inline;"><img src="assets/images/icon1.png" style="max-width:20px;"> IMS</span>
                    <button type="button" class="close" style="display:inline;font-size:22px;" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:5px;padding-bottom:5px;">
                <strong><i class="ti-alert"></i> Alert</strong>
                <p class="f-12">No Chapter Found against this class and subject. Please add chapters first!</p>
                </div>
                <div class="modal-footer" style="padding-top:5px;padding-bottom:10px;">
                    <a href="addchapters.php"><button type="button" class="btn btn-sm bg-gradient-success m-white f-10">Ok, Add Chapters</button></a>
                    
                    
                </div>
            </div>
          
        </div>
    </div>
<!-- end Modal -->
<!-- Modal -->
    <div class="modal fade" id="addstudent" role="dialog">
        <div class="modal-dialog">
        
            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header  bg-m-blue1 m-white" style="padding-top:2px;padding-bottom:2px;">
                    
                    <span class="modal-title text-center" style="display:inline;"><img src="assets/images/icon1.png" style="max-width:20px;"> IMS</span>
                    <button type="button" class="close" style="display:inline;font-size:22px;" data-dismiss="modal">&times;</button>
                </div>
                <div class="modal-body" style="padding-top:5px;padding-bottom:5px;">
                <strong><i class="ti-alert"></i> Alert</strong>
                <p class="f-12">0 Students in this class ! Please add atleast 1 student first!</p>
                </div>
                <div class="modal-footer" style="padding-top:5px;padding-bottom:10px;">
                    <a href="admission.php"><button type="button" class="btn btn-sm bg-gradient-success m-white f-10">Ok, Add Student</button></a>
                    
                    
                </div>
            </div>
          
        </div>
    </div>

@endsection
    