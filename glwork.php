<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liyanage Family Tree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei|Great Vibes" rel="stylesheet"> 
  
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
<p style="text-align:center;font-size:26px;font-family:Great Vibes;text-shadow:1px 1px 4px black">George Liyanage Career & Work</p>
<div class="picture-frame">
	<div class="matte">
		<img class="art" src="george1.jpg">
	</div>
</div>

 
</body>

</html>
