@extends('layouts.app')

@section('content')
    



                                    <div class="page-body">
                                     <div class="row">

                                            <!-- order-card start -->
                                            <div class="col-md-6 col-xl-3">
											    <a href="/All_Student">
                                                <div class="card bg-m-dblue order-card m-round">
                                                    <div class="card-block ">
                                                        <h6 class="m-b-20">Total Students</h6>
                                                        <h2 class="text-right"><i class="ti-user f-left"></i><span>0</span></h2>
                                                        <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                                    </div>
                                                </div>
												</a>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
											    <a href="allemployees.php">
                                                <div class="card bg-m-gray m-round order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Employees</h6>
                                                        <h2 class="text-right"><i class="bx bx-briefcase f-left"></i><span>0</span></h2>
                                                        <p class="m-b-0">This Month<span class="f-right">0</span></p>
                                                    </div>
                                                </div>
												</a>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
											    <a href="balance.php">
                                                <div class="card bg-m-orange m-round order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Revenue</h6>
                                                        <h2 class="text-right"><span class="f-left" style="font-weight:300;vertical-align:top;">$</span><span>0</span></h2>
                                                        <p class="m-b-0">This Month<span class="f-right"><b>$</b> 0</span></p>
                                                    </div>
                                                </div>
												</a>
                                            </div>
                                            <div class="col-md-6 col-xl-3">
											    <a href="balance.php">
                                                <div class="card bg-m-blue1 m-round order-card">
                                                    <div class="card-block">
                                                        <h6 class="m-b-20">Total Profit</h6>
                                                        <h2 class="text-right"><span class="f-left" style="font-weight:300;vertical-align:top;">$</span><span>0</span></h2>
                                                        <p class="m-b-0">This Month<span class="f-right"><b>$</b> 0</span></p>
                                                    </div>
                                                </div>
												</a>
                                            </div>
                                            <!-- order-card end -->

                                            <!-- statustic and process start -->
                                            <div class="col-lg-8 col-md-12">
											    <div class="m-main row">
													<div class="m-container order-card">
														 <img src="assets/images/admin.png" class="img-1" /> 
														<h6 class="m-b-5 m-orange">Welcome to Dashboard <span class="m-b-5 m-blue"> {{auth()->user()->name}}</span> </h6>
														<p style="color:#777;">Your Account is Verified!  <i class="ti-thumb-up"></i><br> Enjoy World's No.1 Education Software.</p>
														
														</div>    
												</div>
                                                <div class="card m-round">
                                                    <div class="card-header">
                                                        <h5 class="m-gray">Statistics</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
													                                                            <canvas id="lineChart"></canvas>
                                                    </div>
                                                </div>
												<div class="card m-round">
                                                    <div class="card-header">
                                                        <h5 class="m-gray">Statistics</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
													                                                            <canvas id="horizontalBar"></canvas>
                                                    </div>
                                                </div>
												<div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-orange">Today Absent Students</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        													<p class="m-orange text-center"><i class="ti-face-sad"></i><br> Attendance Not Marked Yet !</p>
													                                                    </div>
                                                </div>
												<div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-blue1">Today Present Employees</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        													<p class="m-orange text-center"><i class="ti-face-sad"></i><br> Attendance Not Marked Yet !</p>
													                                                    </div>
                                                </div>
												<div class="card">
                                                    <div class="card-header">
                                                        <h5 class="m-gray">New Admissions</h5>
                                                        <div class="card-header-right">
                                                            <ul class="list-unstyled card-option">
                                                                <li><i class="fa fa-chevron-left"></i></li>
                                                                <li><i class="fa fa-window-maximize full-card"></i></li>
                                                                <li><i class="fa fa-minus minimize-card"></i></li>
                                                                <li><i class="fa fa-refresh reload-card"></i></li>
                                                                <li><i class="fa fa-times close-card"></i></li>
                                                            </ul>
                                                        </div>
                                                    </div>
                                                    <div class="card-block">
                                                        															<p class="m-orange text-center"><i class="ti-face-sad"></i><br>No New Admissions This Month</p>
															                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-4 col-md-12">
                                                <div class="card m-round">
                                                    <div class="card-header">
                                                        <h5>Estimated Fee This Month</h5>
                                                                                                            </div>
                                                    <div class="card-block">
                                                        <p class="text-center m-orange m-b-0"><i class="ti-target m-r-5"></i>Estimation</p>
                                                        <span class="d-block m-orange f-24 f-w-600 text-center" id="estimated"><i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i><font style="font-size:12px;color:#Cacccd;"> Calculating..</font></span>
                                                        <canvas id="feedback-chartm" height="100"></canvas>
                                                        <div class="row justify-content-center m-t-15">
                                                            <div class="col-auto b-r-default m-t-5 m-b-5">
                                                                <h4 id="collection"><i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i><font style="font-size:12px;color:#Cacccd;"> Calculating..</font></h4>
                                                                <p class="text-success m-b-0"><i class="ti-wallet m-r-5"></i>Collections</p>
                                                            </div>
                                                            <div class="col-auto m-t-5 m-b-5">
                                                                <h4 id="remainings"><i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i><font style="font-size:12px;color:#Cacccd;"> Calculating..</font></h4>
                                                                <p class="text-danger m-b-0"><i class="ti-hand-point-down m-r-5"></i>Remainings</p>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
												
												<div class="card m-round">
                                                    
                                                    <div class="card-block">
													    <p style="line-height:5px;color:#777;">Today Present Students<b class="f-right m-blue1">0%</b></p>
                                                        <div class="progress" style="height:5px;">
														  
														  <div class="progress-bar bg-m-blue1" role="progressbar" aria-valuenow="0"
														  aria-valuemin="0" aria-valuemax="100" style="width:0%;">
															
														  </div>
														</div>
														<p style="margin-top:20px;line-height:5px;color:#777;">Today Present Employees<b class="f-right m-orange">0%</b></p>
                                                        <div class="progress" style="height:5px;">
														  
														  <div class="progress-bar bg-m-orange" role="progressbar" aria-valuenow="0"
														  aria-valuemin="0" aria-valuemax="100" style="width:0%;">
															
														  </div>
														</div>
														<p style="margin-top:20px;line-height:5px;color:#777;">This Month Fee Collection<b class="f-right m-blue1">0%</b></p>
                                                        <div class="progress" style="height:5px;">
														  
														  <div class="progress-bar bg-m-blue1" role="progressbar" aria-valuenow="0"
														  aria-valuemin="0" aria-valuemax="100" style="width:0%;">
															
														  </div>
														</div>
                                                    </div>
                                                </div>
											
																								
                                                <div class="card user-card m-round">
                                                    
                                                    
                                                        <div class="icalendar">
														<div class="icalendar__month">
															<div class="icalendar__prev" onclick="moveDate('prev')">
																<span>&#10094</span>
															</div>
															<div class="icalendar__current-date">
																<h2 id="icalendarMonth"></h2>
																<div>
																	<div id="icalendarDateStr"></div>
																</div>

															</div>
															<div class="icalendar__next" onclick="moveDate('next')">
																<span>&#10095</span>
															</div>
														</div>
														<div class="icalendar__week-days">
															<div>Sun</div>
															<div>Mon</div>
															<div>Tue</div>
															<div>Wed</div>
															<div>Thu</div>
															<div>Fri</div>
															<div>Sat</div>
														</div>
														<div class="icalendar__days"></div>


														
														</div>
                                                    
                                                </div>
                                                                                                
                                            </div>
                                            <!-- statustic and process end -->
											<!-- tabs card start -->
                                            
                                            <!-- tabs card end -->

                                            

                                            <!-- users visite and profile start -->
                                            <div class="col-md-4">
											    
												
												
                                            </div>
                                            <div class="col-md-8">
                                                
                                            </div>
                                            <!-- users visite and profile end -->

                                        </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>




@endsection
