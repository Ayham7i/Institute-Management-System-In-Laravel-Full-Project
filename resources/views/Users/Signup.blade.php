
<!DOCTYPE html>
<html lang="en">
    <head>
        <!-- Required Meta Tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        
        <title>IMS&reg; - Sign Up</title>
		<meta name="keywords" content="Free school management software,free online school management system, free school management software php, sign up" />
		<meta name="description" content="Create an account free to enjoy the free schooling system">
        <link rel="icon" type="image/png" href="assets/images/favicon.png" />
        <!-- Facebook and Twitter integration -->
		<meta property="og:title" content="Sign Up Now, It's Free!"/>
		<meta property="og:image" content="#"/>
		<meta property="og:url" content="#"/>
		<meta property="og:site_name" content="IMS"/>
		<meta property="og:description" content="IMS is 100% free online school management software for all educational centers."/>
		<meta name="twitter:title" content="Free Online School Management Software" />
		<meta name="twitter:image" content="#" />
		<meta name="twitter:url" content="#" />
		<meta name="twitter:card" content="summary_large_image" />
        <!--Core CSS -->
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/app.css">
        <link rel="stylesheet" href="assets/css/core_lemonade.css">
		<!-- Google tag (gtag.js) -->
        <script async src="https://www.googletagmanager.com/gtag/js?id=UA-132063111-1"></script>
        <script>
          window.dataLayer = window.dataLayer || [];
          function gtag(){dataLayer.push(arguments);}
          gtag('js', new Date());
        
          gtag('config', 'UA-132063111-1');
        </script>
    <style>
	#ppp{
	display:block;
	}
	#ppp1{
	display:none;
	}
	.checkboxThree {
    width: 65px;
    height: 17px;
    background: #fff;
    margin: 5px 0px;

    border-radius: 50px;
    position: relative;
}
.checkboxThree:before {
    content: 'YES';
    position: absolute;
    top: 1px;
    left: 10px;
    height: 2px;
    color: #26ca28;
    font-size: 10px;
}
.checkboxThree:after {
    content: 'NO';
    position: absolute;
    top: 1px;
    left: 40px;
    height: 2px;
    color: #333;
    font-size: 10px;
	}
	/**
	 * Create the pill to click
	 */
	.checkboxThree label {
		display: block;
		width: 32px;
		height: 12px;
		border-radius: 50px;

		transition: all .5s ease;
		cursor: pointer;
		position: absolute;
		top: 3px;
		z-index: 1;
		left: 2px;
		background: #777;
	}

	/**
	 * Create the checkbox event for the label
	 */
	.checkboxThree input[type=checkbox]:checked + label {
		left: 30px;
		background: #26ca28;
	}
	input[type=checkbox] {
		visibility: hidden;
	}
	#load{
	display:none;
	}
	#msg,#msg1{
	display:none;
	}
	@media (max-width: 767px){
		.feature-box-text{
			margin:10px !important;
		}
	}
	</style>
    </head>
    <body>
        <div class="pageloader"></div>
        <div class="infraloader is-active"></div>        
        <!-- Wrapper -->
        <div class="login-wrapper columns is-gapless">
        
            <!-- Form section -->
            <div class="column is-4 bg-m-bg">
                <div class="hero is-fullheight" style="background-color: #08255c;">
                    <!-- Header -->
                    <div class="hero-heading">
                        <div class="section intro-section has-text-centered">
                            <a href="/"><img class="top-logo" src="assets/images/school.png" alt="IMS logo"></a>
                            <div id="signup-intro" class="intro-text has-text-centered animated preFadeInLeft fadeInLeft">
                                <div class="intro-title m-white"><b>Register your account</b></div>
                        
                                
                            </div>
                           
                        </div>
                    </div>
        
                    <!-- Body -->
                    <div class="hero-body">
                        <div class="container">
                            <div class="columns">
                                <div class="column is-8 is-offset-2">
                                    <!-- Sign up form -->
                                    <form>
									    <article class="message msg-danger" id="msg">
											<h4 class="message-header">
												<span>This Email is already registered !</span>
												<span class="delete" id="d1" aria-label="delete"></span>
											</h4>
											
										</article>
										<article class="message msg-danger" id="msg1">
											<h4 class="message-header">
												<span>Your password does not matched !</span>
												<span class="delete" id="d2" aria-label="delete"></span>
											</h4>
											
										</article>
                                        <div id="signup-form" class="login-form animated preFadeInLeft fadeInLeft">
                                            <div class="field pb-10">
                                                <div class="control has-icons-left">
                                                    <input class="input is-large" type="email" id="email" onblur="checkMailStatus()" placeholder="Your Email *" required>
													<span class="icon is-left">
														<i class="im im-icon-Email"></i>
													</span>
                                                </div>
                                            </div>
                                            <div class="field pb-10">
                                                <div class="control has-icons-left">
                                                    <input class="input is-large" type="password" id="password" placeholder="Choose Password *" minlength="8" required>
													<span class="icon is-left">
														<i class="im im-icon-Lock"></i>
													</span>
                                                </div>
                                            </div>
                                            <div class="field pb-10">
                                                <div class="control has-icons-left">
                                                    <input class="input is-large" type="password" id="rpassword" onblur="match();" placeholder="Confirm Password *" required>
													<span class="icon is-left">
														<i class="im im-icon-Lock"></i>
													</span>
                                                </div>
                                            </div>
											<table><tr><td>
											<div class="checkboxThree">
											<input type="checkbox" value="1" id="checkboxThreeInput" name="c" required />
											<label for="checkboxThreeInput"></label>
											</div></td><td style="padding:5px;"><h2 class="m-white" style="font-size:11px;margin:0px;">Accept our <b><a href="terms&conditions.html" class="m-blue7">Terms & Conditions</a></b></h2></td></tr></table> 
                                            <p class="control login mt-20">
                                                <button onclick="step1(event);" id="signup" class="button button-cta bg-m-blue7 m-white btn-align-lg is-bold is-fullwidth rounded raised no-lh" style="border:none;">Sign up</button>
                                            </p>
											
                                        </div>
                                    </form>
                                    <!-- Sign up form -->
        
                                    <!-- Get contacted form -->
                                    
                                        <div id="contacted-form" class="login-form animated preFadeInLeft fadeInLeft is-hidden has-text-centered">
                                            <h1 class="title m-blue7 is-bold"><b>Congratulations ! </b></h1>
											<h3 class="subtitle m-white">Account Setup Is Completed</h3>
											<p class="m-white">We've sent you an email containing all the information about your account and some useful links. Please have a
											look and enjoy the world of free schooling by loging in.</p>
											<p class="control login mt-20">
											    <a href="bb/dashboard.php">
                                                <button class="button button-cta bg-m-blue7 m-white btn-align-lg is-bold is-fullwidth rounded raised no-lh" style="border:none;">Login to Dashboard</button>
												</a>
                                            </p>
											
                                        </div>
                                    
                                    <!-- /Get contacted form -->
        
                                    <!-- Toggles-->
                                    <div id="login" class="section forgot-password animated preFadeInLeft fadeInLeft">
                                        <p class="has-text-centered">
                                            <a href="/Login">have an account ? Login</a>
                                        </p>
                                    </div>
        
                                    <div id="back-to" class="section forgot-password animated preFadeInLeft fadeInLeft is-hidden">
                                        <p class="has-text-centered">
                                            <a href="signup.html">Back to Sign up</a>
                                        </p>
                                    </div>
                                    <!-- /Toggles-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- /Form section -->
        
            <!-- Image section (hidden on mobile) -->
            <div class="column login-column is-8 is-hidden-mobile hero-banner">
                <div class="hero signup-hero is-fullheight  is-relative">
				    
                    <div class="columns has-text-centered">
                        <div class="column">
                            <h1 class="title is-2">
                                Start managing <span class="m-blue7">Your Institute</span> now !
                            </h1>
                            <h3 class="subtitle is-5">
                                IMS The Best <a href="" style="color:#333;font-weight:bold;" class="typewrite"  data-period="2000" data-type='[ "School ", "College ", "Institute ", "Academey ", "Tuition Centre", "Training Centre" ]'>
							<span  class="wrap"></span>
							</a> management software for a lifetime with no limitations.
                            </h3>
                            <!-- App mockup -->
                            <img class="" src="assets/images/signup1.png" alt="">
                            <!-- Link to login page -->
                            <div class="already">
                                <span style="color:#333;">Already have an account ?</span>
                                <a href="/Login" class="button btn-align bg-m-blue7 m-white is-bold  rounded" >Login</a>
                            </div>
                        </div>
                    </div>
                </div>  
            </div>
            <!-- /Image section -->
        
        </div>
        <!-- /Wrapper-->
        <!-- Back To Top Button -->
        <div id="backtotop"><a href="#"></a></div>        <!-- Concatenated jQuery and plugins -->
        <script src="assets/js/app.js"></script>
        
        <!-- Bulkit js -->
        <script src="assets/js/components-modals.js"></script>
		<script src="assets/js/components-toasts.js"></script>
        <script src="assets/js/landingv3.js"></script>
        <script src="assets/js/auth.js"></script>
        <script src="assets/js/main.js"></script>
        <script>
		function step2(){
	       $("#signup-form").hide();
		   $("#contacted-form").show();
	    }
		function step1(e)
    {
	  
	  
	  var email=document.getElementById("email").value;
	  var pass=document.getElementById("password").value;
	  var p2=document.getElementById("rpassword").value;
	  if(pass!="" && email!="" && p2!=""){
	  $("#signup").addClass('is-loading');
	  e.preventDefault();
	  $.ajax({
        type:'post',
        url:'store_info.php',
        data:{
          
          em:email,
		  pa:pass
        },
        success:function(response) {
		  if(response!="NO"){
		  $("#signup-form").addClass('is-hidden');
		  $("#contacted-form").removeClass('is-hidden');
		  $("#signup").removeClass('is-loading');
		  $("#login").addClass('is-hidden');
		  $("#back-to").removeClass('is-hidden');
		  }else{
		  $("#signup").removeClass('is-loading');
		  }
          

        }
      });
	  }

	  

    }
	function checkMailStatus(){
    //alert("came");
var reg=$("#email").val();// value in field email
$.ajax({
    type:'post',
        url:'checkMail.php',// put your real file name 
        data:{reg: reg},
        success:function(msg){
			if(msg=="YES"){
		  $("#msg").slideDown("slow");
		  $("#email").focus();
			}else{
			$("#msg").slideUp("slow");	
			}
         // alert(msg); // your message will come here.     
        }
 });
}
function match(){
var p1=document.getElementById("password").value;
	  var p2=document.getElementById("rpassword").value;
	  if(p1==p2){
	  $("#msg1").slideUp("slow");
	  }else{
	  
	  $("#msg1").slideDown("slow");
	  $("#rpassword").focus();
	  }
}
$("#d1").click(function(){
    $("#msg").slideUp('slow');
});
$("#d2").click(function(){
    $("#msg1").slideUp('slow');
});
		//---------------school-college------------
	var TxtType = function(el, toRotate, period) {
        this.toRotate = toRotate;
        this.el = el;
        this.loopNum = 0;
        this.period = parseInt(period, 10) || 2000;
        this.txt = '';
        this.tick();
        this.isDeleting = false;
    };

    TxtType.prototype.tick = function() {
        var i = this.loopNum % this.toRotate.length;
        var fullTxt = this.toRotate[i];

        if (this.isDeleting) {
        this.txt = fullTxt.substring(0, this.txt.length - 1);
        } else {
        this.txt = fullTxt.substring(0, this.txt.length + 1);
        }

        this.el.innerHTML = '<span class="wrap">'+this.txt+'</span>';

        var that = this;
        var delta = 200 - Math.random() * 100;

        if (this.isDeleting) { delta /= 2; }

        if (!this.isDeleting && this.txt === fullTxt) {
        delta = this.period;
        this.isDeleting = true;
        } else if (this.isDeleting && this.txt === '') {
        this.isDeleting = false;
        this.loopNum++;
        delta = 500;
        }

        setTimeout(function() {
        that.tick();
        }, delta);
    };

    window.onload = function() {
        var elements = document.getElementsByClassName('typewrite');
        for (var i=0; i<elements.length; i++) {
            var toRotate = elements[i].getAttribute('data-type');
            var period = elements[i].getAttribute('data-period');
            if (toRotate) {
              new TxtType(elements[i], JSON.parse(toRotate), period);
            }
        }
        // INJECT CSS
        var css = document.createElement("style");
        css.type = "text/css";
        css.innerHTML = ".typewrite > .wrap { border-right: 0.08em solid #fff}";
        document.body.appendChild(css);
    };
	
	</script>
		</body>  
</html>
