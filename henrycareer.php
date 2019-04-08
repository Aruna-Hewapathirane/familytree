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

<p style="text-align:center;font-size:26px;font-family:Great Vibes;text-shadow:1px 1px 4px black">Henry Liyanage Career & Work</p>
<div id="card" class="card" style="margin-left: 15px;margin-right: 15px;">	  
	  	<!--<div class="card-header" id="header"></div>--></br></br></br>		
		<!--<img id="henry" class="card-img-top center" src="st.png" alt="Card image" style="height:100px;width:100px;text-align:center;top:10px;position:relative;margin-left:10px;">-->
		<div class="card-body">      
			<p class="card-text" style="font-family: Lato, serif;font-size:16px;">I joined my father’s company Liyanage Transport as soon as I left school. I must have been around 17 years old at the time. We had a thriving transport business with at least ten lorries that we owned, ran and maintained. I spent time at the Ports and at the clients site. I worked long, tiring hours initially as an apprentice. My father believed in us earning our keep. Being ambitious, I eventually, left when I was around 27 and started my own automotive business with a friend which was a success but we eventually ran out of steam, we needed to change the business model but we could not envisage the change and the future state at this time.</br></br>
Eventually, with requests from the client and my father, I took over the running of the family business when I was around 33 years of age. </br></br>
My father mentored me from behind the scenes as he gradually groomed me to take over the business. </br>
Of course, the journey between the generations is always a challenge. My father was used to being in control and in ....I finally took over the running of the business.</br></br>
As you would expect from a dutiful son and to show my unshakable respect for my dad, I reported back each day on progress.</br></br>
Running a transport business comes with many challenges, these include:</br></br>
Maintanance of the trucks;</br>
Managing all the people who drive and maintain the trucks;</br>
Managing cashflow; and </br>
Making sure we delivered as per the time agreed with the client;</br>
Generally provide a very good service whilst taking good care of our employees; and</br>
Keeping abreast of all government regulations that impact our industry.</br></br>

Then in 19.. we changed the model. I have continued to run this business for the past 45+ years. Through the changing climate of polictics and economic conditions in Sri Lanka.

</br>
                 
			</p>
		</div>	      
	   <div class="card-footer">
		   <!--<a href="henrybio.php" class="btn btn-primary">Henry Liyanage</a>-->
	   </div>
      
</div> 

<div class="picture-frame">
	<div class="matte">
		<img class="art" src="henrycareer2.jpg">
	</div>
</div>

<div class="picture-frame">
	<div class="matte">
		<img class="art" src="henrycareer3.jpg">
	</div>
</div>

<div class="picture-frame">
	<div class="matte">
		<img class="art" src="henrycareer1.jpg">
	</div>
</div>

<div class="picture-frame">
	<div class="matte">
		<img class="art" src="henrycareer4.jpg">
	</div>
</div>

<div class="picture-frame">
	<div class="matte">
		<img class="art" src="henrycareer5.jpg">
	</div>
</div>


 
</body>

</html>
