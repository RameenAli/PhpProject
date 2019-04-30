<?php

 session_start();
  include 'config.php';
/* if(!isset($_SESSION['user']) ) {
  header("Location: index.php");
  exit;
 }
*/
 echo"msg msg";
if($_SESSION['category']=='student')
{
echo "session=".$_SESSION['user']."session=".$_SESSION['category'];
}
elseif($_SESSION['category']=='teacher')
{
	echo "session=".$_SESSION['Tname']." session=".$_SESSION['category'];
}
$sqlQuery="";
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
 
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 100%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: center;
  padding: 8px;
}
tr:nth-child(even) {
  background-color: #dddddd;
}

 .col{background-color:skyblue;
	  text-align: centre;
	 
	 }
	.navbar-default
	{
		background: #0C6;
	}
</style>

</head>

<body style="background-image:logo.png">
<div id="Home">
	<nav id="n1" class="nav navbar-default navbar-fixed-top ">
   			 <div class="navbar-header">
     			 <a class="navbar-brand" href="#" style="color:white"><img src="logo.png" style="height:50px; position:absolute; top:0px"/> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hamdard University</b></a>
   			 </div>
             
	   			 <ul class=" navbar-right navbar-nav nav ">
    				<li><a id="home" style="color:white" href="index.html"><b>Home</b></a></li>
                    <li><a style="color:white" href="logout.php"><b>Logout</b></a></li>
   			 	</ul>
             
 		 </div>
	</nav>
</div>
HEY
<a href="logout.php">logout</a>

</body>
</html>
<?php
if($_SESSION['category']=='student')
{	//$sqlQuery="Select year, day ,CONCAT(cell1,' ',(select teachername from teacher where coursename=cell1)) cell1, CONCAT(cell2,' ',(select teachername from teacher where coursename=cell2)) cell2, CONCAT(cell3,' ',(select teachername from teacher where coursename=cell3)) cell3,CONCAT(cell4,' ',(select teachername from teacher where coursename=cell4)) cell4,CONCAT(cell5,' ',(select teachername from teacher where coursename=cell5)) cell5,CONCAT(cell6,' ',(select teachername from teacher where coursename=cell6)) cell6,CONCAT(cell7,' ',(select teachername from teacher where coursename=cell7)) cell7 from ttable where year='$_SESSION[user]';";

$sqlQuery="select day, cell1,cell2,cell3,cell4,cell5,cell6,cell7 from studenttable where semester='$_SESSION[user]';";
	//$sqlQuery="Select * from ttable inner join select teachername from teacher on cell1=coursename";
	$result=mysqli_query($conn,$sqlQuery);//$conn is from config file
	


	echo"<br><br>";
	echo"<table border ='2' cellspacing='15' cellpadding='15'>";
	echo"<tr>";
	echo"<th>Timing / Days</th>";
	echo"<th>8:30-9:25</th>";
	echo"<th>9:30-10:25</th>";
	echo"<th>10:30-11:25</th>";
	echo"<th>11:30-12:25</th>";
	echo "<th>1:10-2:05</th>";
	echo "<th>2:10-3:05</th>";
	echo "<th>3:05-4:00</th>";
	echo"</tr>";
	
	/*$sql="SELECT * FROM user where email='$email' && password='$pass' ";
			$result=mysqli_query($conn,$sql);
			//printf("Error: %s\n", mysqli_error($conn));
			if($rows=mysqli_fetch_array($result))
			{
				 $res=mysqli_query($conn,"SELECT ID, password, Year FROM user WHERE email='$email'");
   				 $row=mysqli_fetch_array($res);
			     $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
				 $_SESSION['user']=$row['Year'];
				
				header("location: index.php");
			}*/
	
	while ($row = mysqli_fetch_array($result)) 
	{
		
	echo"<tr>";
	echo"<th>".$row['day']."</th>";
	echo"<td>".$row['cell1']."</td>";
	echo"<td>".$row['cell2']."</td>";
	echo"<td>".$row['cell3']."</td>";
	echo"<td>".$row['cell4']."</td>";
	echo"<td>".$row['cell5']."</td>";
	echo"<td>".$row['cell6']."</td>";
	echo"<td>".$row['cell7']."</td>";
	echo"</tr>";
	
	
	}
	echo"</table>";
	}
	
	else if($_SESSION['category']=='teacher')
	{
	$sqlQuery="select day, cell1, cell2, cell3, cell4, cell5, cell6, cell7 from teachertable where name='$_SESSION[Tname]';";
	//day, cell1, cell2, cell3, cell4, cell5, cell6, cell7
	$result=mysqli_query($conn,$sqlQuery);//$conn is from config file
	


	echo"<br><br>";
	echo"<table border ='2' cellspacing='15' cellpadding='15'>";
	echo"<tr>";
	echo"<th>Timing / Days</th>";
	echo"<th>8:30-9:25</th>";
	echo"<th>9:30-10:25</th>";
	echo"<th>10:30-11:25</th>";
	echo"<th>11:30-12:25</th>";
	echo "<th>1:10-2:05</th>";
	echo "<th>2:10-3:05</th>";
	echo "<th>3:05-4:00</th>";
	echo"</tr>";
	
	/*$sql="SELECT * FROM user where email='$email' && password='$pass' ";
			$result=mysqli_query($conn,$sql);
			//printf("Error: %s\n", mysqli_error($conn));
			if($rows=mysqli_fetch_array($result))
			{
				 $res=mysqli_query($conn,"SELECT ID, password, Year FROM user WHERE email='$email'");
   				 $row=mysqli_fetch_array($res);
			     $count = mysqli_num_rows($res); // if uname/pass correct it returns must be 1 row
				 $_SESSION['user']=$row['Year'];
				
				header("location: index.php");
			}*/
	
	while ($row = mysqli_fetch_array($result)) 
	{
		
	echo"<tr>";
	echo"<th>".$row['day']."</th>";
	echo"<td>".$row['cell1']."</td>";
	echo"<td>".$row['cell2']."</td>";
	echo"<td>".$row['cell3']."</td>";
	echo"<td>".$row['cell4']."</td>";
	echo"<td>".$row['cell5']."</td>";
	echo"<td>".$row['cell6']."</td>";
	echo"<td>".$row['cell7']."</td>";
	echo"</tr>";
	
	
	}
	echo"</table>";
}
	
?>
