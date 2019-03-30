<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liyanage Family Tree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

  <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet"> 

<!--  <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet"> -->
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src="orgchart.js"></script>

  
  <script>
  $(document).ready(function(){
      $("#card").hide().fadeIn(12500);
     // $('#henry').hide().delay(4000).slideDown(2000);
  });
  
  </script>
  
</head>
<style>
.center {
  display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

#header{
	/*background: url("floral.jpg");*/
	background-color:#039be5;
	}

</style>
<body>

<?php include('nav.html'); ?>
</br>

  <div id="card" class="card" style="margin-left: 15px;margin-right: 15px;">	  
	  	<div class="card-header" id="header"></div></br></br></br>
		
		<img id="henry" class="card-img-top center" src="henrymama.png" alt="Card image" style="height:200px;width:200px;border-radius:50%;text-align:center;top:10px;position:relative;">
		<div class="card-body">      
			<p class="card-text" style="font-family: 'Great Vibes', serif;font-size:28px;">This site is a dedication to the Liyanage family from Henry Liyanage.</br></br>
                  Thank you to all in my family who participated to make this site a reality.My grandfather, Apuhami Thegis Liyanage born in the 19th Century.</br>His drive and savvy to provide for his family saw him set-up the foundations of a transport business which has kept the family provided-for to this date.
                  This site has enabled me to journey through the changes of this, my beloved country and to share the joys, despair and the love of my family with thanks for loving and excepting me with all my flaws. </br></br>I leave this story to be picked up by the generations to come…
                  
			</p>
		</div>	      
	   <div class="card-footer">
		   <a href="henrybio.php" class="btn btn-primary">Henry Liyanage</a>
	   </div>
      
</div> 
</body>
</html>
