
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
        <title>IMS - Free School Management System</title>
          <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <meta name="description" content="" />
      <meta name="keywords" content="" />
      <meta name="author" content="IMS Inc.">
      <!-- Favicon icon -->
            <link rel="icon" href="../assets/images/favicon.png" type="image/x-png">
            <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
            <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />

      
        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/core_lemonade.css">
        <style>
	label{
		display:inline-block;
		width:80px;
		height:80px;
		text-align:center;
		pedding:6px 0;
		font-size:12px;
		line-height:1.428571429;
		border-radius:80px;
		transition:all 0.3s;
		border:1px solid gray;
		margin-left:5px;
	}
	input[type=radio]{
		display:none;
	}
	.present:checked + label{
		border:2px solid #039be5;
		background:#039be5;
		color:#fff;
	}
	.leave:checked + label{
		border:2px solid #039be5;
		background:#039be5;
		color:#fff;
	}
	.absent:checked + label{
		border:2px solid #039be5;
		background:#039be5;
		color:#fff;
	}
	#success{
	    display:none;
	}
	#danger{
	    display:none;
	}
	
	
	

	
	
	</style>
    </head>
    <body>
        
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>        
        <!-- Wrapper -->
        <div class="login-wrapper columns is-gapless">
        
            <!-- Form section -->
            <div class="column is-7">
                <div class="hero is-fullheight">
                    <div class="hero-heading">
                        <!-- Logo -->
                        <div class="section has-text-centered" style="padding-bottom:20px;">
                            <a href="/"><img class="top-logo" src="assets/images/school.png" style="height:60px;" alt="IMS logo"></a>
                        </div>
                        <!-- Don't have an account yet -->
                        <div class="no-account-link has-text-centered">
                            <a href="/Signup"><i class="sl sl-icon-question"></i> I do not have an account yet </a>
                        </div>
                    </div>
                    <div class="hero-body" style="padding-top:15px;padding-bottom:0px;" >
                        <div class="container">
                            <div class="columns">
                                <div class="column"></div>
                                <div class="column is-5">
                                    <!-- Login Form -->
                                    <form action="signin.php" method="post">
                                        <div id="signin-form" class="login-form animated preFadeInLeft fadeInLeft">
										    <div class="form-group has-text-centered" style="color:gray;">
											<b>I am</b><br>
									
                                            <br></div>
                                            <!-- Input -->
											<div class="field pb-10">
												<div class="control has-icons-left">
													<input class="input is-large" id="username" name="username" type="text" placeholder="User name" required>
													<span class="icon is-left">
														<i class="im im-icon-Find-User"></i>
													</span>
												</div>
											</div>
                                            <!-- Input -->
                                            <div class="field">
												<div class="control has-icons-left">
													<input class="input is-large" id="password" name="password" type="password" placeholder="Password" required>
													<span class="icon is-left">
														<i class="im im-icon-Lock"></i>
													</span>
												</div>
											</div>
												<div class="field pb-10">
												<div class="control">
													<p style="color:#999;"><input id="remember" name="remember" value="1" type="checkbox"> Remember Me</p>
													
												</div>
											</div>
											                                            <!-- Submit -->
                                            <p class="control login has-text-centered">
                                                <button type="submit" name="submit" id="submit" class="button button-cta primary-btn btn-align-lg is-bold rounded raised no-lh">Log in</button>
                                            </p>
                                        </div>
                                    </form>
                                    <!-- /Login Form -->
                                   
                                    <!-- Reset Form -->
                                    <form>
                                        <div id="recover-form" class="login-form animated preFadeInLeft fadeInLeft is-hidden">
                                            <div id="success" class="has-text-centered is-vcentered is-multiline pt-10 pb-10 pl-10 pr-10  mb-20 animated preFadeInLeft fadeInLeft" style="background: linear-gradient(45deg, #5e81f4, #7191f7);color:#fff;border-radius:5px;"><i class="sl sl-icon-check"></i> We have sent your login details to your email address.</div>
										<div id="danger" class="has-text-centered is-vcentered is-multiline pt-10 pb-10 pl-10 pr-10  mb-20 animated preFadeInLeft fadeInLeft" style="background: linear-gradient(45deg, #ff808b, #f79099);color:#fff;border-radius:5px;"><i class="sl sl-icon-close"></i> Something went wrong ! This email is not registered with us.</div>
                                            <!-- Input -->
                                            <div class="field pb-10">
                                                <div class="control">
                                                    <input class="input is-large" type="text" placeholder="Email address" id="forget" required>
                                                </div>
                                            </div>
                                            <!-- Submit -->
                                            <p class="control login">
                                                <button class="button button-cta secondary-btn btn-align-lg btn-outlined is-bold is-fullwidth rounded raised no-lh" id="forgetbutton" onclick="step1(event);">Reset password</button>
                                            </p>
                                        </div>
                                    </form>
                                    <!-- /Reset Form -->
        
                                    <!-- Toggles -->
                                    <div id="recover" class="section forgot-password animated preFadeInLeft fadeInLeft" style="padding-bottom:0px;">
                                        <p class="has-text-centered">
                                            <a href="#">Forgot password ?</a>
                                        </p>
                                    </div>
        
                                    <div id="back-to-login" class="section forgot-password animated preFadeInLeft fadeInLeft is-hidden">
                                        <p class="has-text-centered">
                                            <a href="#">Back to Sign in</a>
                                        </p>
                                    </div>
                                    <!-- /Toggles -->
                                </div>
                                <div class="column"></div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- /Form section -->
        
            <!-- Image section (hidden on mobile) -->
            <div class="column login-column is-5 is-hidden-mobile hero-banner" >
                <div class="hero is-fullheight is-theme-primary is-relative" >
                    <div class="columns has-text-centered" >
                        <div class="column" >
                            <h2 class="title is-2 light-text" style="padding-top:70px;">
                                Start managing now
                            </h2>
                            <h3 class="subtitle is-5 light-text">
                                Stop struggling with common tasks and focus on the real choke points. Discover a full featured & In School management platform.
                            </h3>
                           
                        </div>
                    </div>
                    <img class="login-city" src="assets/images/login4.png" alt="">
                </div>  
            </div>
            <!-- /Image section -->
        </div>
        <!-- /Wrapper -->
        
        <!-- /Side navigation -->        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>        <!-- Concatenated jQuery and plugins -->
        <script src="assets/js/app.js"></script>
        
        <!-- Bulkit js -->
        <script src="assets/js/components-modals.js"></script>
        <script src="assets/js/landingv3.js"></script>
        <script src="assets/js/auth.js"></script>
        <script src="assets/js/main.js"></script>
        <script type="text/javascript" src="assets/js/jquery/jquery.min.js"></script>
<!-- <script>
	$("#submit").click(function() {
		    var username = $("#username").val();
			var password = $("#password").val();
			if(username!="" || password!=""){
				$("#submit").addClass('is-loading');
			}
		
			
	});
	function step1(e)
    {
	  
	  
	  var email=document.getElementById("forget").value;
	  
	  if(email!=""){
	  
	  e.preventDefault();
	  $("#forgetbutton").addClass('is-loading');
	  $("#success").hide();
	  $("#danger").hide();
	  $.ajax({
        type:'post',
        url:'resetpassword.php',
        data:{
          
          em:email
		  
        },
        success:function(response) {
		  if(response!="NO"){
		  $("#success").show();
		  $("#forgetbutton").removeClass('is-loading');
		  }else{
		  $("#danger").show();
		  $("#forgetbutton").removeClass('is-loading');    
		  }
          

        }
      });
	  }

	  

    }
	
	</script> -->
		</body>  
</html>
