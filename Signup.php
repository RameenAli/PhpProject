<?php
session_start();
	include 'config.php';
	$msg="";
	if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['category']))
	{
		if(!empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['category']))
		{
			
			
			$email= $_POST['email'];
			$password= $_POST['password'];
			$category= $_POST['category'];
			$year=$_POST['year'];
			$name=$_POST['name'];
			
			echo "ok";
			//user email sy phchana jae ga ya email or pass same hoga tb(means &&)?
			$sql="Select * from user where email='$email' && password='$password';";
			$result=mysqli_query($conn,$sql);//$conn is from config file
			//printf("Error: %s\n", mysqli_error($conn));
			if($rows = mysqli_fetch_array($result))
			{
				$msg= "Username already exist";
			}
			else
			{
				 if(!isset($_SESSION['user']) || !isset($_SESSION['Tname']))
				 {
					$query="INSERT user (ID,name, email, password, category, year) VALUES (NULL, '$name','$email', '$password', '$category','$year');";
					$result=mysqli_query($conn, $query);
	//				if($_POST['category']=='student')
					echo "ok";
					//printf("Error: %s\n", mysqli_error($conn));
					if($result)
					{
						echo "ok";
						$msg="Signup Successful";
						$_SESSION['user']=$result['year'];

						header('location:login.php');
					}
				 }
			}
	 
		}
	 		else
			{
				$msg= "Please fill all the fields"; 
			}
	 
	
	}
	
?>


<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>SignUp Form</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  
      <style>
	 
html { width: 100%; height:100%; overflow:hidden; }

body { 
	color:#FFF;
	width: 100%;
	height:100%;
	font-family: 'Open Sans', sans-serif;
	background: #092756;
	background: -moz-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%),-moz-linear-gradient(top,  rgba(57,173,219,.25) 0%, rgba(42,60,87,.4) 100%), -moz-linear-gradient(-45deg,  #670d10 0%, #092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -webkit-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -webkit-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -o-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -o-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -o-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -ms-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), -ms-linear-gradient(top,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), -ms-linear-gradient(-45deg,  #670d10 0%,#092756 100%);
	background: -webkit-radial-gradient(0% 100%, ellipse cover, rgba(104,128,138,.4) 10%,rgba(138,114,76,0) 40%), linear-gradient(to bottom,  rgba(57,173,219,.25) 0%,rgba(42,60,87,.4) 100%), linear-gradient(135deg,  #670d10 0%,#092756 100%);
	filter: progid:DXImageTransform.Microsoft.gradient( startColorstr='#3E1D6D', endColorstr='#092756',GradientType=1 );
}
.login { 
	position: absolute;
	top: 50%;
	left: 50%;
	margin: -150px 0 0 -150px;
	width:300px;
	height:300px;
}
.login h1 { color: #fff; text-shadow: 0 0 10px rgba(0,0,0,0.3); letter-spacing:1px; text-align:center; }

input { 
	width: 100%; 
	margin-bottom: 10px; 
	background: rgba(0,0,0,0.3);
	border: none;
	outline: none;
	padding: 10px;
	font-size: 13px;
	color: #fff;
	text-shadow: 1px 1px 1px rgba(0,0,0,0.3);
	border: 1px solid rgba(0,0,0,0.3);
	border-radius: 4px;
	box-shadow: inset 0 -5px 45px rgba(100,100,100,0.2), 0 1px 1px rgba(255,255,255,0.2);
	-webkit-transition: box-shadow .5s ease;
	-moz-transition: box-shadow .5s ease;
	-o-transition: box-shadow .5s ease;
	-ms-transition: box-shadow .5s ease;
	transition: box-shadow .5s ease;
}
input:focus { box-shadow: inset 0 -5px 45px rgba(100,100,100,0.4), 0 1px 1px rgba(255,255,255,0.2); }

	.navbar .nav li>a
	{
		color: white;
		z-index:1;
	}
	
	.navbar-default
	{
		background: #0C6;
	}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
<div id="Home">
	<nav id="n1" class="nav navbar-default navbar-fixed-top ">
 		 <div class="container-fluid">
   			 <div class="navbar-header">
     			 <a class="navbar-brand" href="#" style="color:white"><img src="logo.png" style="height:50px; position:absolute; top:0px"/> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hamdard University</b></a>
                
   			 </div>
             <div class="collapse navbar-collapse" id="myNavbar">
	   			 <ul class=" navbar-right navbar-nav nav ">
    				<li><a id="home" style="color:white" href="index.html"><b>Home</b></a></li>
                    <li><a style="color:white" href="login.php"><b>Login</b></a></li>
   			 	</ul>
             </div>
            	  
  
 		 </div>
	</nav>
</div>
<br><br>
<h2 style="text-align: center"><b>Automated Time Table Generation<b></h2>
  <div class="login">

	<h2>Sign Up</h2>
    <h6><a style="color:white" href="login.php">Click to Login</a></h6>
    <form method="post" action="">
    	
        <input type="email" name="email" placeholder="email"  />
        <input type="password" name="password" placeholder="password"  />
        <input type="text" name="name" placeholder="Name"  />
        <label>Are you a Teacher or Student</label>
        <select  name="category" style="color:black">
        	<option value="student">Student</option>
            <option value="teacher">Teacher</option>
        </select>
        
        <br>
        
        <label>Select your Semester if you are a student</label>
        <select name="year" style="color:black">
        	<option value="1">1</option>
            <option value="2">2</option>
            <option value="3">3</option>
            <option value="4">4</option>
            <option value="5">5</option>
            <option value="6">6</option>
            <option value="7">7</option>
            <option value="8">8</option>
        </select>
        <p><?php echo $msg;?></p>
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
        
    </form>
</div>
  
   

</body>
</html>
