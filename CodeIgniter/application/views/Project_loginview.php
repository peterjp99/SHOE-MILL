	
<html>
<head>
<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="http://localhost/CodeIgniter/assets/css/bootstrap.css" rel="stylesheet">
<script language="JavaScript">
function showDiv() {
	
  document.getElementById("welcomeDiv").style.display = "";
  document.getElementById('bt1').style.visibility = 'hidden';


}
function ShowDiv() {
	
  document.getElementById("WelcomeDiv").style.display = "";
  document.getElementById('bt2').style.visibility = 'hidden';


}


</script>
<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script>
$(document).ready(function(){
var header = $('body');

var backgrounds = new Array(
    'url(http://localhost/CodeIgniter/assets/images/11.jpeg)'
  , 'url(http://localhost/CodeIgniter/assets/images/9.jpeg)'
  , 'url(http://localhost/CodeIgniter/assets/images/10.jpeg)'
  
);

var current = 0;

function nextBackground() {
    current++;
    current = current % backgrounds.length;
    header.css('background-image', backgrounds[current]);
}
setInterval(nextBackground, 5000);

header.css('background-image', backgrounds[0]);
});
</script>
<p style="font-size:500%; color:white; font-family:courier; margin:80px "><strong>SHOE</strong>MiLL</p>
 
		                   <div class="container"> 
		                          <div class="form-bottom" style="margin:600px 350px 50px 350px" >
				                    <form role="form" action="http://localhost/CodeIgniter/index.php/Project_homectrl/index" method="post" class="login-form">
				                     <button type="submit" class="btn">EXPLORE!</button>

				                    </form>
				                    </div>
</div>
                            <div class="container"> 
     	                    <div class="form-box" style="margin:-700px 1000px 100px -200px">
	                        	<div class="form-top">

	                        		<div class="form-top-left" >
	                        		
	                        			<h3>Login to our site</h3>
	                            		<p>Enter username and password to log on:</p>
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="http://localhost/CodeIgniter/index.php/Login/process" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
                                            
				                    						                        	<input type="text" type='text' name='username' id='username' placeholder="Username..." class="form-username form-control">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password form-control" id="password">
				                        </div>
				                        <button type="submit" class="btn">Sign in!</button>

				                    </form>
			                    </div>
		                    </div>
		                   
		                    </div>
		                    <div class="container"> 
		                   	<div class="form-box" style="margin:-760px -250px 100px 1000px">
	                        	<div class="form-top">
	                        		<div class="form-top-left" >
	                        		<h3>Sign Up to our site</h3>
	                        			<p>Enter your details</p>
	                            		
	                        		</div>
	                        		<div class="form-top-right">
	                        			<i class="fa fa-lock"></i>
	                        		</div>
	                            </div>
	                            <div class="form-bottom">
				                    <form role="form" action="http://localhost/CodeIgniter/index.php/Signup/add" method="post" class="login-form">
				                    	<div class="form-group">
				                    		<label class="sr-only" for="form-username">Username</label>
                                            
				                    						                        	<input type="text" name="username" placeholder="Username..." class="form-username2 form-control" id="username">
				                        </div>
				                        <div class="form-group">
				                        	<label class="sr-only" for="form-password">Password</label>
				                        	<input type="password" name="password" placeholder="Password..." class="form-password2 form-control" id="password">
				                        </div>
				                          <div class="form-group">
				                        	<label class="sr-only" for="form-password">Re-Enter Password</label>
				                        	<input type="password" name="form-Re-Enter Password" placeholder="Re-Enter Password..." class="form-Re-Enter Password form-control" id="form-Re-Enter Password">
				                        </div>
				                          <div class="form-group">
				                        	<label class="sr-only" for="form-password">E-Mail</label>
				                        	<input type="text" name='emailid' id='emailid' placeholder="E-Mail..." class="form-E-Mail form-control" >
				                        </div>
				                        <button type="submit" class="btn">Sign up!</button>

				                    </form>
			                    </div>
		                    </div>
		                    </div>
		                    
		                   
</head>
<body>
<header></header>
</body>
  <!-- Javascript -->
        <script src="http://localhost/CodeIgniter/assets/js/jquery-1.11.1.min.js"></script>
        <script src="http://localhost/CodeIgniter/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="http://localhost/CodeIgniter/assets/js/jquery.backstretch.min.js"></script>
        <script src="http://localhost/CodeIgniter/assets/js/scripts.js"></script>


        <!-- CSS -->
        <link rel="stylesheet" href="http://fonts.googleapis.com/css?family=Roboto:400,100,300,500">
        <link rel="stylesheet" href="http://localhost/CodeIgniter/assets/bootstrap/css/bootstrap.min.css">
        <link rel="stylesheet" href="http://localhost/CodeIgniter/assets/font-awesome/css/font-awesome.min.css">
		<link rel="stylesheet" href="http://localhost/CodeIgniter/assets/css/form-elements.css">
        <link rel="stylesheet" href="http://localhost/CodeIgniter/assets/css/style.css">




</html>