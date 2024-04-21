
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
	        <!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132063111-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-132063111-1');
        </script>
    <!--end analytics here--->
        <title>IMS</title>
          <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="IMS">
      <!-- Favicon icon -->
            <link rel="icon" href="assets/images/favicon.png" type="image/x-png">
            <!-- Google font-->
      <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600" rel="stylesheet">
      <link href="https://themify.me/themify-icons" rel="stylesheet">
      
      <!-- Required Fremwork -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/bootstrap/css/bootstrap.min.css')}}">
      <!-- themify-icons line icon -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/themify-icons/themify-icons.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/font-awesome/css/font-awesome.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('public/them/themify-icons.css')}}">

      {{-- alerts  --}}
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.css">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
        <!-- Toastr CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>
      
      <!-- ico font -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/icon/icofont/css/icofont.css')}}">
      <!-- Style.css -->
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{ asset('assets/css/jquery.mCustomScrollbar.css')}}">
	  <link rel="stylesheet" type="text/css" href="{{ asset('assets/calendar/javascript-calendar.css')}}">

      <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
	  <style>
	      @media (max-width: 716px){
        	#topmessage{
        	    display:none;
        	}
        }
	  </style>
  </head>
  <style>
  
  </style>
 
  <body>
    <div class="theme-loader">
        <div class="loader-track">
            <div class="loader-bar"></div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <!--- header nav here--->
			<nav class="navbar header-navbar pcoded-header">
               <div class="navbar-wrapper" >
                   <div class="navbar-logo">
                       <a class="mobile-menu" id="mobile-collapse" href="#!">
                        <i style="font-size: 24px;" style="font-weight: 2rem" class='bx bx-menu'></i>
                       </a>
                       <div class="mobile-search">
                           <div class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
                                       <span class="input-group-addon search-close"><i style="font-size: 16px" class='bx bx-x' ></i></span>
                                       <input type="text" class="form-control" placeholder="Enter Keyword">
                                       <span class="input-group-addon search-btn"><i style="font-size: 16px" class='bx bx-search' ></i></span>
                                   </div>
                               </div>
                           </div>
                       </div>
                       <a href="{{route('Dashboard.index')}}">
                           <img class="img-fluid m-l-30" id="headerimg" style="max-height:45px;" src="{{asset('assets/images/school.png')}}" alt="IMS-Logo" />
                       </a>
                       <a class="mobile-options">
                           <i class="ti-more"></i>
                       </a>
                       
                   </div>

                   <div class="navbar-container container-fluid">
                       <ul class="nav-left">
                           <li>
                               <div class="sidebar_toggle"><a href="javascript:void(0)"><i style="font-size: 16px" class='bx bx-menu'></i></a></div>
                           </li>
						   
                           <li class="header-search">
                               <div class="main-search morphsearch-search">
                                   <div class="input-group">
								       
                                       <span class="input-group-addon search-close"><i style="font-size: 16px" class='bx bx-x' ></i></span>
                                       <input type="text" class="form-control" id="tags" placeholder="Search Student"><form action="requestmanager.php" method="post">
									   <input type="text" id="tags_code" style="display:none;" name="id">
                                       <span  class="input-group-addon search-btn"><i style="font-size: 16px" class='bx bx-search' ></i></span>
									   <button type="submit" name="dashboard"  class="input-group-addon search-btn1"><i style="font-size: 16px" class='bx bx-search' ></i></button>
									   </form>
									   
                                   </div>
                               </div>
                           </li>
						   
                           <li>
                               <a href="#!" onclick="javascript:toggleFullScreen()">
                                <i style="font-size: 16px" class='bx bx-fullscreen' ></i>
                               </a>
                           </li>
                       </ul>
                       <ul class="nav-right">

                          
                           <li class="user-profile header-notification" style="float:right;">
                               <a href="#!">
							     <img src="{{asset('assets/images/university.png')}}" class="img-radius">
								<span title="Name">{{auth()->user()->name}}</span>
								<i style="font-size: 16px" class='bx bxs-chevron-down' ></i>
															   
							   <!---
                                   <img src="assets/images/avatar-4.jpg" class="img-radius" alt="User-Profile-Image">
                                   <span>John Doe</span>
                                   <i class="ti-angle-down"></i>
								   
								----->
                               </a>
                               <ul class="show-notification profile-notification">
                                   <li>
                                       <a href="{{route('Settings.edit',$id=auth()->user()->id)}}">
                                        <i style="font-size: 16px" class='bx bx-cog' ></i> Account Settings
                                       </a>
                                   </li>

                                   @if(auth()->user()->role_id=="2")

                                   <li>
                                       <a href="{{route('Profiles.edit',$id=auth()->user()->employee_id)}}">
                                           <i class="fa fa-bank"></i> Profile
                                       </a>
                                   </li>
                                   @endif
                                   
                                   
                                   {{-- <li>
                                    <a href="{{ route('logout') }}">
                                        <i class='bx bxs-lock' ></i> Logout
                                   </a>
                                   </li> --}}
                                   <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <button type="submit" style="border: none; background: none; cursor: pointer;">
                                            <i class='bx bxs-lock'></i> Logout
                                        </button>
                                    </form>
                                </li>
                               </ul>
                           </li>
                       </ul>
                   </div>
               </div>
           </nav>
		  <script type="text/javascript">var theme = ["5405","5405","50065","50065","left","left","theme5","theme5","theme1","theme1","theme4","theme4","en","en"];</script>
		  <!---language starting--->
	            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <!--- sidebar nav here ---->
					<nav class="pcoded-navbar" style="background:#f6f7fb;">
                        <div class="sidebar_toggle"><a href="#"><i class="icon-close icons"></i></a></div>
                        <div class="pcoded-inner-navbar main-menu">
                            
                            <div class="pcoded-navigatio-lavel" data-i18n="nav.category.navigation"></div>
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="active" id="dashboard">
                                    <a href="/Dashboard">
                                        <span class="pcoded-micon"><i class='bx bxs-dashboard' ></i><b>D</b></span>
                                        <span class="pcoded-mtext" data-i18n="nav.dash.main">Dashboard</span>
                                        <span class="pcoded-mcaret"></span>
                                        

                                    </a>
                                </li>
                                <li class="pcoded-hasmenu" id="generalsettings" >
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i style="font-size: 16px" class='bx bx-cog' ></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">General Settings</span>
                                        <span class="pcoded-mcaret"></span>
                                      
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="schoolinfo">
                                            <a href="schoolinfo.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Institute Profile</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="feeparticulars">
                                            <a href="feeparticulars.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Fee Particulars</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                   
										<li class=" " id="challan">
                                            <a href="bankdetails.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Details For Fee Challan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="rules">
                                            <a href="rules.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Rules & Regulations</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="grading">
                                            <a href="grading.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Marks Grading</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="themesettings">
                                            <a href="themesettings.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Theme & Language</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        
                                        <li class=" " id="account">
                                            <a href="account.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Account Settings</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="logout.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Log out</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        

                                    </ul>
                                </li>
								
                            </ul>
                            
                            <ul class="pcoded-item pcoded-left-item">
                               <li class="pcoded-hasmenu" id="classes">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bxs-school' ></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Classes</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="allclasses">
                                            <a href="{{route('Classes.index')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Classes</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @if(auth()->user()->role_id=="1")

                                        <li class=" " id="newclass">
                                            <a href="{{route('Classes.create')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">New Class</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class="" id="editclass">
                                            {{-- <a href="{{route('Classes.showedit')}}"> --}}
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.breadcrumbs">Edit OR Delete</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                <li class="pcoded-hasmenu" id="subjects">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bxs-book'></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Subjects</span>
                                        <span class="pcoded-mcaret"></span>
                                        
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="showsubjects">
                                            <a href="{{route('Subject.index')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Classes With Subjects</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @if(auth()->user()->role_id=="1")

                                        <li class=" " id="assignsubjects">
                                            <a href="{{route('Subject.create')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Assign Subjects</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>

                                       @endif
                                    </ul>
                                </li>

                            </ul>

                            
                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="students">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bxs-user' ></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Students</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="allstudents">
                                            <a href="{{route('Student.index')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Students</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @if(auth()->user()->role_id=="1")
                                        <li class=" " id="addnewstudent">
                                            <a href="{{route('Student.create')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add New</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @endif
                                     
                                        @if(auth()->user()->role_id=="1")
										<li class=" " id="searchadmissionletter">
                                            <a href="stdregal.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Admission Letter</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="idcard">
                                            <a href="studentcards.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Student ID Cards</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="printinfo">
                                            <a href="printinfo.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Print Basic List</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="promotions">
                                            <a href="promotions.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Promote Students</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="employees">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bx-male-female' ></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Employees</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="allemployees">
                                            <a href="{{route('Employee.index')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Employees</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @if(auth()->user()->role_id=="1")
                                        <li class=" " id="addnewteacher">
                                            <a href="{{route('Employee.create')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add New</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    
										<li class=" " id="jobletter">
                                            <a href="empregal.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Job Letter</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        @endif
                                    </ul>
                                </li>
                                
                                

                            </ul>
                            @if(auth()->user()->role_id=="1")

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="accounts">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bx-wallet-alt' ></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Accounts</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="heads">
                                            <a href="chartofaccounts.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Chart Of Account</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addincome">
                                            <a href="income.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Income</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="addexpense">
                                            <a href="expense.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add Expense</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="statement">
                                            <a href="balance.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Account Statement</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="fees">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa fa-money"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Fees</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
									    <li class=" " id="getchallan">
                                            <a href="getchallan.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Generate Bank Challan</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="submitfee">
                                            <a href="submitfees.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Collect Fee</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="feeslip">
                                            <a href="stdregfs.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Fee Slip</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="defualter">
                                            <a href="defualter.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Fees Defaulters</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                      
                                     
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="salary">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bx-credit-card' ></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Salary</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="submitsalary">
                                            <a href="submitsalary.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Pay Salary</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="salaryslip">
                                            <a href="empregfs.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Salary Slip</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                
                                        
                                    
										
                                    </ul>
                                </li>
                                
                                

                            </ul>
                            @endif
                            @if(auth()->user()->role_id=="1")

                            <ul class="pcoded-item pcoded-left-item">
                                <li class="pcoded-hasmenu" id="attandance">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class='bx bxs-hand'></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Attendance</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="studentsattandance">
                                            <a href="markatt.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Mark Students Attendance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="employeesattandance">
                                            <a href="chooseeattend.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Mark Employees Attendance</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="classwise">
                                            <a href="attreport.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Class wise Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="studentattendancereport">
                                            <a href="allatt.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students Attendance Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										<li class=" " id="employeeattendancereport">
                                            <a href="alleatt.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Employees Attendance Report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										
                                    </ul>
                                </li>
                        
                             
                               
								
                            </ul>
                            @endif
							
                            
                            <ul class="pcoded-item pcoded-left-item">

                                

                                <li class="pcoded-hasmenu" id="exams">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"> <i class="fa-solid fa-file-pen"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Exams</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="createexam">
                                            <a href="{{route('exam.create')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Create New Exam</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="editexamdetail">
                                            <a href="/exam/showedit">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Edit or delete</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="addexammarks">
                                            <a href="{{route('exam.index')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Add / update Exam Marks</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										
										<li class=" " id="resultcard">
                                            <a href="{{route('Marks.index')}}">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Result Card</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                 
										
										
                                    </ul>
                                </li>
                                @if(auth()->user()->role_id=="1")
                                
								<li class="pcoded-hasmenu" id="tests">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa-solid fa-paste"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Class Tests</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="createtest">
                                            <a href="">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Create New Exam</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="testreport">
                                            <a href="">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">All Exams</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
										

										
										
                                    </ul>
                                </li>

                                @endif
                                @if(auth()->user()->role_id=="1")

                                <li class="pcoded-hasmenu" id="reports">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa-solid fa-paste"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Reports</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="reportcard">
                                            <a href="reportcardfor.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students report Card</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report1">
                                            <a href="report1.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Students info report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="report2">
                                            <a href="report2.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Parents info report</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                             
										
										
                                    </ul>
                                </li>
								<li class="pcoded-hasmenu" id="certificates">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="fa-solid fa-certificate"></i></span>
                                        <span class="pcoded-mtext"  data-i18n="nav.basic-components.main">Certificates</span>
                                        <span class="pcoded-mcaret"></span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" " id="lc">
                                            <a href="leavecertificate.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Leave Certificate</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
                                        <li class=" " id="cc">
                                            <a href="charactercertificate.php">
                                                <span class="pcoded-micon"><i class="ti-angle-right"></i></span>
                                                <span class="pcoded-mtext" data-i18n="nav.basic-components.alert">Character Certificate</span>
                                                <span class="pcoded-mcaret"></span>
                                            </a>
                                        </li>
									

										
										
                                    </ul>
                                </li>
                                @endif
								
								
								
                                

                            </ul>
							
                           
                            
                        </div>
                    </nav>

                    <div class="pcoded-content">
                        <div class="pcoded-inner-content">
                            <div class="main-body">
                                <div class="page-wrapper">

                                    <div class="page-body">


                                         @yield('content')

                                    </div>
                                    </div>

                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        
<!-- Required Jquery -->
<script type="text/javascript" src="{{ asset('assets/js/jquery/jquery.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/jquery-ui/jquery-ui.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/popper.js/popper.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/bootstrap/js/bootstrap.min.js')}}"></script>
<!-- jquery slimscroll js -->
<script type="text/javascript" src="{{ asset('assets/js/jquery-slimscroll/jquery.slimscroll.js')}}"></script>
<!-- modernizr js -->
<script type="text/javascript" src="{{ asset('assets/js/modernizr/modernizr.js')}}"></script>
<!-- am chart -->
<script src="{{ asset('assets/pages/widget/amchart/amcharts.min.js')}}"></script>
<script src="{{ asset('assets/pages/widget/amchart/serial.min.js')}}"></script>
<!-- Chart js -->
<script type="text/javascript" src="{{ asset('assets/js/chart.js/Chart.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/mdb.js')}}"></script>
<!-- Todo js -->
<script type="text/javascript " src="{{ asset('assets/pages/todo/todo.js')}} "></script>
<!-- Custom js -->
<script type="text/javascript" src="{{ asset('assets/pages/dashboard/custom-dashboard.min.js')}}"></script>
<script type="text/javascript" src="{{ asset('assets/js/script.js')}}"></script>
<script type="text/javascript " src="{{ asset('assets/js/SmoothScroll.js')}}"></script>
<script src="{{ asset('assets/js/pcoded.min.js')}}"></script>
<script src="{{ asset('assets/js/vartical-demo.js')}}"></script>
<script src="{{ asset('assets/js/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{ asset('assets/calendar/javascript-calendar.js')}}"></script>

<script>
//line
  var mo=["Aug 2023","Jul 2023","Jun 2023","May 2023","Apr 2023","Mar 2023"];
  var ic=["","","","","",""];	
  var ex=["","","","","",""];	  
  var ctxL = document.getElementById("lineChart").getContext('2d');
  var myLineChart = new Chart(ctxL, {
    type: 'line',
    data: {
      labels: [mo[5], mo[4], mo[3], mo[2], mo[1], mo[0]],
      datasets: [{
          label: "Expenses",
	      data: [ex[5], ex[4], ex[3], ex[2], ex[1], ex[0]],
          backgroundColor: [
            'rgba(255, 128, 139, .7)',
          ],
          borderColor: [
            'rgba(255, 128, 139, 1)',
          ],
          borderWidth: 4
        },
        {
          label: "Income",
          data: [ic[5], ic[4], ic[3], ic[2], ic[1], ic[0]],
          backgroundColor: [
            'rgba(94, 129, 244, .7)',
          ],
          borderColor: [
            'rgba(94, 129, 244, 1)',
          ],
          borderWidth: 4
        }
      ]
    },
    options: {
      responsive: true
    }
  });
//---------ajax for estimation---------------
$(document).ready(function(){
    var students="1";
    var symbol="$";
    if(students<50){
   var myajax= $.ajax({
           url: 'ajaxestimate.php',
           success: function(data) {
             var estimated=data[0];
             var collection=data[1];
             var estimate=data[2];
             $("#estimated").html(symbol+' '+(estimated.toLocaleString()));
             $("#collection").html(symbol+' '+(collection.toLocaleString()));
             $("#remainings").html(symbol+' '+(estimate.toLocaleString()));
             var ctx = document.getElementById("feedback-chartm").getContext("2d");
                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                collection, estimate,
                            ],
                            backgroundColor: [
                                "#4747a1",
                                "#7da0fa"
                            ],
                            label: 'Dataset 1',
                            borderWidth: 0
                        }],
                        labels: [
                            "Collections",
                            "Remainings"
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: false,
                        },
                        title: {
                            display: false,
                            text: 'Chart.js Doughnut Chart'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        }
                    }
                };
                window.myDoughnut = new Chart(ctx, config);
           },
           dataType: 'json'
        });
    }else{
        $("#estimated").html('<i class="fa fa-low-vision" style="font-size:16px;color:#Cacccd;"></i><font style="font-size:12px;color:#Cacccd;"> Hidden</font>');
        $("#collection").html('<i class="fa fa-low-vision" style="font-size:16px;color:#Cacccd;"></i><font style="font-size:12px;color:#Cacccd;"> Hidden</font>');
        $("#remainings").html('<i class="fa fa-low-vision" style="font-size:16px;color:#Cacccd;"></i><font style="font-size:12px;color:#Cacccd;"> Hidden</font>');
        var ctx = document.getElementById("feedback-chartm").getContext("2d");
                var config = {
                    type: 'doughnut',
                    data: {
                        datasets: [{
                            data: [
                                '50', '50',
                            ],
                            backgroundColor: [
                                "#Cacccd",
                                "#E0e5e6"
                            ],
                            label: 'Dataset 1',
                            borderWidth: 0
                        }],
                        labels: [
                            "Collections",
                            "Remainings"
                        ]
                    },
                    options: {
                        responsive: true,
                        legend: {
                            display: false,
                        },
                        title: {
                            display: false,
                            text: 'Chart.js Doughnut Chart'
                        },
                        animation: {
                            animateScale: true,
                            animateRotate: true
                        }
                    }
                };
                window.myDoughnut = new Chart(ctx, config);
                $("#startcalculation").click(function(){
                    $("#estimated").html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i><font style="font-size:12px;color:#Cacccd;"> Calculating..</font>');
                    $("#collection").html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i><font style="font-size:12px;color:#Cacccd;"> Calculating..</font>');
                    $("#remainings").html('<i class="fa fa-circle-o-notch fa-spin" style="font-size:24px"></i><font style="font-size:12px;color:#Cacccd;"> Calculating..</font>');
                    $("#startcalculation").hide();
                    var myajax= $.ajax({
                       url: 'ajaxestimate.php',
                       success: function(data) {
                         var estimated=data[0];
                         var collection=data[1];
                         var estimate=data[2];
                         $("#estimated").html(symbol+' '+(estimated.toLocaleString()));
                         $("#collection").html(symbol+' '+(collection.toLocaleString()));
                         $("#remainings").html(symbol+' '+(estimate.toLocaleString()));
                         var ctx = document.getElementById("feedback-chartm").getContext("2d");
                            var config = {
                                type: 'doughnut',
                                data: {
                                    datasets: [{
                                        data: [
                                            collection, estimate,
                                        ],
                                        backgroundColor: [
                                            "#4747a1",
                                            "#7da0fa"
                                        ],
                                        label: 'Dataset 1',
                                        borderWidth: 0
                                    }],
                                    labels: [
                                        "Collections",
                                        "Remainings"
                                    ]
                                },
                                options: {
                                    responsive: true,
                                    legend: {
                                        display: false,
                                    },
                                    title: {
                                        display: false,
                                        text: 'Chart.js Doughnut Chart'
                                    },
                                    animation: {
                                        animateScale: true,
                                        animateRotate: true
                                    }
                                }
                            };
                            window.myDoughnut = new Chart(ctx, config);
                       },
                       dataType: 'json'
                    });
                });
    }
        $(window).unload( function () { myajax.abort(); $.ajax({url:"ajaxendestimat.php"}); } );
});
//---------estimation ends------------------
 
	//horizontalBar
	var acl=["CS50","english"];
  var ast=["0","1"];
new Chart(document.getElementById("horizontalBar"), {
    "type": "horizontalBar",
    "data": {
      "labels": acl,
      "datasets": [{
        "label": "Students",
        "data": ast,
        "fill": false,
        "backgroundColor": ["#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b"
          ],
        "borderColor": ["#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b","#5e81f4", "#ff808b"
          ],
        "borderWidth": 1
      }]
    },
    "options": {
      "scales": {
        "xAxes": [{
          "ticks": {
            "beginAtZero": true
          }
        }]
      }
    }
  });
//-------------------------send message--------------------
function sendMsg()
    {
	  
	  $("#send").hide();
	  $("#sending").show();
	  
	  $.ajax({
        type:'post',
        url:'checkmsg.php',
        data:{
          
          send:'send'
		  
        },
        success:function(response) {
		  if(response!="NO"){
		  $("#sending").hide();
		  $("#sent").show();
		  
		  
		  }
          //step2();

        }
      });
	  }	
function sendbwish()
    {
	  $("#birthday").html('Sending...');
	  $.ajax({
        type:'post',
        url:'checkmsg.php',
        data:{
          
          sendbw:'sendbw'
		  
        },
        success:function(response) {
		  if(response!="NO"){
            $("#birthday").html('Sent Successfully');
		  }
          //step2();

        }
      });
	}	
// search 
            var availableTags = ["3248 - AYHAM ANOWER AL-AKHALLY - english"];
			var availableTagsCode = ["3248"]; 
			$( "#tags" ).autocomplete({ 
				source: availableTags,
				select: function (event, ui) {
					var index = availableTags.indexOf(ui.item.value);
					$("#tags_code").val(availableTagsCode[index]);  
				}
			});
if(theme[4]=='right'){
	
		$(".m-container img").css({'position' : 'absolute','top' : '0','left' : '0','margin-top' : '-15px','margin-left' : '5%','height' : '100px'});
		$(".ms-container img").css({'position' : 'absolute','top' : '0','left' : '0','margin-top' : '-15px','margin-left' : '5%','height' : '105px'});
		$(".ms1-container img").css({'position' : 'absolute','top' : '0','left' : '0','margin-top' : '-15px','margin-left' : '5%','height' : '92px'});
		
	}
$("#closetop").click(function(e){
    e.preventDefault();
    $("#topmessage").slideUp();
    $.ajax({
        type:'post',
        url:'checkmsg.php',
        data:{
          
          topmessage:'topmessage'
		  
        }
      });
});

var d = new Date();
		if(d.getHours() >= 0 && d.getHours() <= 19 ){
			$(".hours").show();
			$(".message").hide();
		}
		else {  
			$(".hours").hide();
			$(".message").show();
		}
		</script>
		<script>
		
			(function() {
		  var start = new Date;
		  if(start.getDay()<=5){
			var din=5 - start.getDay();
			start.setDate(start.getDate() + din);
			//alert(start.getDate());
		  }else{
			start.setDate(start.getDate() + 6);
		  }
		  //start.setHours(19, 10, 0); // 11am
			start.setHours(23);
			start.setMinutes(59);
			start.setSeconds(59);
		  function pad(num) {
			return ("0" + parseInt(num)).substr(-2);
		  }

		  function tick() {
			var now = new Date;
			if (now > start) { // too late, go to tomorrow
			  start.setDate(start.getDate() + 1);
			}
			var delta = ((start - now) / 1000);
			// calculate (and subtract) whole days
			var days = pad(delta / 86400);
			delta -= days * 86400;

			// calculate (and subtract) whole hours
			var hours = pad((delta / 3600) % 24);
			delta -= hours * 3600;

			// calculate (and subtract) whole minutes
			var minutes = pad((delta / 60) % 60);
			delta -= minutes * 60;
			// what's left is seconds
			var seconds = pad(delta % 60);
			document.getElementById('dd').innerHTML =days;
			document.getElementById('hh').innerHTML =hours;
			document.getElementById('mm').innerHTML =minutes;
			document.getElementById('ss').innerHTML =seconds;
			
			setTimeout(tick, 1000);
		  }

		  document.addEventListener('DOMContentLoaded', tick);
		})(); 
</script>
</body>

</html>
