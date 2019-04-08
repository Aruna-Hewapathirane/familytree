<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liyanage Family Tree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=Lato|Great Vibes" rel="stylesheet"> 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src="orgchart.js"></script>

<style>
.picture-frame {
	background-color:blue;
	width: 55%;
	border:black solid 40px;
	-webkit-box-shadow: 4px 13px 59px 8px rgba(0,0,0,0.75);
	-moz-box-shadow: 4px 13px 59px 8px rgba(0,0,0,0.75);
	box-shadow: 4px 13px 59px 8px rgba(0,0,0,0.75);
	margin:auto;
	margin-top:20px;
	margin-bottom:30px;
	text-align: center;
}
.matte {
	background-color:#d3d3d3;
	height:100%;
	-webkit-box-shadow: inset 10px 10px 37px 0px rgba(0,0,0,0.75);
	-moz-box-shadow: inset 10px 10px 37px 0px rgba(0,0,0,0.75);
	box-shadow: inset 10px 10px 37px 0px rgba(0,0,0,0.75);
}

.art {
	width:80%;
	margin:10% 10% 10% 10%;
}	
</style>

<script>
 
  $(document).ready(function(){
      $(".picture-frame").hide().delay(50).fadeIn(2000);
      //$(".matte").hide().fadeIn(1000);
      //$(".art").hide().delay(2000).fadeIn(1500);
  });
  
  </script>
  
</head>




<body>

<?php include('nav.html'); ?>

</br>
<p style="text-align:center;font-size:26px;font-family:Great Vibes;text-shadow:1px 1px 4px black">Henry Liyanage Education</p>

<div id="card" class="card" style="margin-left: 15px;margin-right: 15px;">	  
	  	<!--<div class="card-header" id="header"></div>--></br></br></br>
		
		<img id="henry" class="card-img-top center" src="st.png" alt="Card image" style="height:100px;width:100px;text-align:center;top:10px;position:relative;margin-left:10px;">
		<div class="card-body">      
			<p class="card-text" style="font-family: Lato, serif;font-size:16px;">I attended St John's Nugegoda from nursery - school now known as pre-school.</br></br>
Later conversation on the subject with my parents and observations of my siblings showed me that: </br></br>
 We learned how the world works around them through play and communication. We learnt how to properly express ourselves, share, communicate with our friends and fellow nursery folk, follow classroom rules, proper hygiene and how to sleep during naptime. </br>
We learnt how to write our full name, identify basic shapes, recognize size difference, count to 100, how to trace numbers 1-10 and simple adding & subtracting. </br></br>
We expressed ourselves creativity during Arts & Crafts class by learning the names of the colours, creating craft projects using our imagination, listening to music and learning the different sounds of an instrument. </br>
Our teachers helped by guiding us to share, retain information learned in the classroom and taught us to treat others with respect & kindness. </br>
                 
			</p>
		</div>	      
	   <div class="card-footer">
		   <!--<a href="henrybio.php" class="btn btn-primary">Henry Liyanage</a>-->
	   </div>
      
</div> 
<!--
<div class="picture-frame">
	<div class="matte">
		<img class="art" src="st.png">
	</div>
</div>
-->
 
</body>

</html>
