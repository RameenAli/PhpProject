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
<script>
	$(document).ready(function()
	{
		//home
    	$("#home").click(function()
		{
	       $('html, body').animate(
		   {
				scrollTop: $('#Home').offset().top
		    }, 1000);
    	});
		
		//Gallery
		$("#gallery").click(function()
		{
	       $('html, body').animate(
		   {
				scrollTop: $('#Gallery').offset().top
		    }, 1000);
    	});
		
		//staff
		$("#staff").click(function()
		{
	       $('html, body').animate(
		   {
				scrollTop: $('#Staff').offset().top
		    }, 1000);
    	});
		
		
		window.onscroll = function()
		{
			var mynav = document.getElementById("n1");
			if(document.body.scrollTop>=200)
			{
				mynav.classList.add("navbar-inverse");
				mynav.classList.remove("navbar-default");
			}
			else
			{
				mynav.classList.add("navbar-default");
				mynav.classList.remove("navbar-inverse");
			}
		}
});
$(document).ready(function() {
    	$(".imgzoom").click(function(){
			var source = this.src;
			$(".picview").attr('src', source);
			$('body').css("overflow","hidden");
			$("#view").fadeIn(700);
			
		});
		$("#close").click(function(){
				$('body').css("overflow", "visible");
				$("#view").fadeOut();
			});
		
		
});
</script>

<style>

	.navbar .nav li>a
	{
		color: white;
		z-index:1;
	}
	
	.navbar-default
	{
		background: #0C6;
	}
	
	#btn2
	{
		padding:8px;
		border:1px solid white;
		background:none;
	}
	#btn2:hover
	{
		background:#FC6;
		transition:1s;
	}
	#btn1
	{
		padding:8px;
		border:1px solid white;
		background:#FC6;
	}
	#btn1:hover
	{
		background:none;
		transition:1s;
	}
	.imgzoom
	{
		transform:scale(1,1);
		transition:1s;
	}
	.imgzoom:hover
	{
		
		transform:scale(1.5,1.5);
		transition:1s;
		
	}
	.imgItem
	{
	margin:auto;
	width:80%;
	height:15em;
	overflow:hidden;
	}
	#map
{
	width:100%;
}


	nav select {
  display: none;
}
	.staff
	{
		vertical-align: middle;
  width: 150px;
  height: 150px;
  border-radius: 50%;
	}
	.spic
	{
		 width:30%;
		 float:left;
		 height:70%;
		 text-align:center;
		 position:relative;
		 top:0px;
		 left:50px;
	}
	.picview
	{
		position:absolute;
		width:70%;
		height:70%;
		left:15%;
		top:15%;
	}
	.parallax {
    /* The image used */
    background-image: url('../../../../Users/rutsh/Desktop/Rameen Template/pic.jpg');

    /* Full height */
    height: 400px; 
	
    /* Create the parallax scrolling effect */
    background-attachment: fixed;
    background-repeat: no-repeat;
    background-size: cover;
	opacity:0.5;
}
#close
{
	cursor:pointer;
}
</style>

</head>

<body>

<div id="Home">
	<nav id="n1" class="nav navbar-default navbar-fixed-top ">
 		 <div class="container-fluid">
   			 <div class="navbar-header">
     			 <a class="navbar-brand" href="#" style="color:white"><img src="../../../../Users/rutsh/Desktop/Rameen Template/logo.png" style="height:50px; position:absolute; top:0px"/> <b>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Hamdard University</b></a>
                 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        			<span class="icon-bar"></span>
       			    <span class="icon-bar"></span>
        			<span class="icon-bar"></span> 
			      </button>
   			 </div>
             <div class="collapse navbar-collapse" id="myNavbar">
	   			 <ul class=" navbar-right navbar-nav nav ">
    				<li><a id="home" style="color:white"><b>Home</b></a></li>
            	    <li><a id="staff" style="color:white"><b>Staff</b></a></li>
                     <li><a id="gallery" style="color:white"><b>Gallery</b></a></li>
        			<li><a  style="color:white"data-toggle="modal" data-target="#cntmodal" ><b>Contact Us</b></a></li>
        			<li><a style="color:white"><b>About Us</b></a></li>
   			 	</ul>
             </div>
            	  
  
 		 </div>
	</nav>
</div>

  	<div  >
    	<img src="../../../../Users/rutsh/Desktop/Rameen Template/edu.jpg" height="500px" width="100%" id="im"/>
    </div>
    
   <div class="parallax"></div>
   
    <div class="divbtn" style="text-align:center; position: relative; top:-50px;">
  		<button  id="btn1" data-toggle="modal" data-target="#myModal">Admission Open</button>
 		<button  id="btn2">Read More</button>
	</div>
    
    <h1  id="Gallery" align="center">Gallery</h1>
    
    <div class="row">
	    <div class="col-sm-4 " >
	        <div class="imgItem" >

        	    	<img class="imgzoom" src="../../../../Users/rutsh/Desktop/Rameen Template/1.jpg" style=" height:100%; width:100%" />
			</div>
        </div>
        <div class="col-sm-4">
        	<div class="imgItem">
        	    	<img  class="imgzoom" src="../../../../Users/rutsh/Desktop/Rameen Template/2.jpg" style=" height:100%; width:100%"  />
			</div>
        </div>
        
        <div class="col-sm-4">
        	<div class="imgItem">
        	    	<img class="imgzoom" src="../../../../Users/rutsh/Desktop/Rameen Template/3.jpg" style=" height:100%; width:100%" />
			</div>
        </div>
    </div>
    
    <br/>
    
    <div class="row">
	    <div class="col-sm-4">
        	<div class="imgItem">
        	    	<img class="imgzoom" src="../../../../Users/rutsh/Desktop/Rameen Template/4.jpg" height="100%" width="100%"/>
			</div>
        </div>
        
        <div class="col-sm-4">
        	<div class="imgItem">
        	    	<img class="imgzoom" src="../../../../Users/rutsh/Desktop/Rameen Template/5.jpg" height="100%" width="100%" />
			</div>
        </div>
        
        <div class="col-sm-4">
        	<div class="imgItem">
        	    	<img class="imgzoom" src="../../../../Users/rutsh/Desktop/Rameen Template/6.jpg" height="100%" width="100%"/>
			</div>
        </div>
    </div>
    

   <div class="parallax"></div>
    <!-- Modal -->
<div id="myModal" class="modal fade">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <p>text</p>
        <h4 class="modal-title ">ADMISSION FORM</h4>
      </div>
      <div class="modal-body">
        
        
        <label>Name</label>
        <input type="text" class="form-control" placeholder=""/>
        
        <label>F.Name</label>
        <input type="text" class="form-control" placeholder=""/>
        
        <label>Contact</label>
        <input type="text" class="form-control" placeholder=""/>
        
        <label>Email id</label>
        <input type="text" class="form-control" placeholder=""/>
        
        <label>Address</label>
        <input type="text" class="form-control" placeholder=""/>
        
      </div>
      <div class="modal-footer">
        <p class="text-center">By clicking Admission, I agree to your terms</p>
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       
        <br/>
        <p>text</p>
      </div>
    </div>

  </div>
</div>

    <!--Contact Modal-->
    
<!-- Modal -->
<div id="cntmodal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content" >
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title text-center">Contact form</h4>
      </div>
      <div class="modal-body">
      <form>
         <label>Name</label>
        <input type="text" class="form-control" placeholder="" required/>
        <label>Email</label>
        <input type="text" class="form-control" placeholder="" required/>
        <label>Subject</label>
        <input type="text" class="form-control" placeholder="" required/>
        <label>Your Message</label>
        <textarea class="form-control" placeholder="type your text here" required style="height:100px"></textarea>
        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
       <input type="submit" class="btn btn-default" value= "Send"/>
       
      </div>
    </div>

  </div>
</div>
    <br>
    <br>
    
<h1 id="Staff" style=" text-align:center">Staff</h1>
<div style=" background-color:#333; height:230px; color:white;">

<br><h4 style="color:orange;text-align:center;font:'Lucida Sans Unicode', 'Lucida Grande', sans-serif"><i><b>“Our Teacher Our Pride”</b></i></h4>
    <div class="spic">
    	<img src="../../../../Users/rutsh/Desktop/Rameen Template/HOD.png" class="staff"/>
    </div>
    <div class="spic" >
    	<img src="../../../../Users/rutsh/Desktop/Rameen Template/sir.jpg" class="staff"/>
    </div>
    <div class="spic">
    	<img src="../../../../Users/rutsh/Desktop/Rameen Template/teacher.png" class="staff"/>
    </div>
</div>

    <br><br>
    <div>
   <!-- <iframe id="map" src="" width="400" height="300" frameborder="0" style="border:0" allowfullscreen></iframe>-->
    <iframe id="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d115631.31845001537!2d66.93918815820314!3d25.085652!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3eb3429afcf1836b%3A0x336aa33d7030e57!2sHamdard+University!5e0!3m2!1sen!2s!4v1546802203456" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
    </div>
    <br><br>

<div id="view" style=" height:100%; width:100%; background:rgba(0,0,0,0.9); position:fixed; top:0; z-index:2; display:none; color:white; ">

	<div style="font-size:400%;text-align:right; color:white;"><span id="close">&times;</span></div>
	<img class="picview"/>
    
</div>



</body>
</html>
