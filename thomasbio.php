<?php include('config.php'); ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liyanage Family Tree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <link href="https://fonts.googleapis.com/css?family=ZCOOL+XiaoWei" rel="stylesheet"> 
  
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src="orgchart.js"></script>
</head>

<body>

<?php include('nav.html'); ?>

<div id="tree"></div>
<!--<div class="container">
</div>  
  <div class="card" style="margin-left: 15px;margin-right: 15px; height:85vh;padding-top:5px;">	  
	  	<div class="card-header" style="background-color:#039be5"></div>
		<img class="card-img-top" src="henrymama.png" alt="Card image" style="width:80%;border-radius:50%;margin:0 auto;padding-top:15px;height:300px;width:300px;">
		<div id="tree" style="position:relative;"></div>
		<div class="card-body">      
			<p class="card-text" style="font-family: 'ZCOOL XiaoWei', serif;font-size:12px;">This site is a dedication to the Liyanage family from Henry Liyanage.</br></br>
                  Thank you to all in my family who participated to make this site a reality.My grandfather, Apuhami Thegis Liyanage born in the 19th Century – his drive and savvy to provide for his family saw him set-up the foundations of a transport business which has kept the family provided-for to this date.
                  This site has enabled me to journey through the changes of this, my beloved country and to share the joys, despair and the love of my family with thanks for loving and excepting me with all my flaws. </br></br>I leave this story to be picked up by the generations to come…
			</p>
		</div>	      

<a href="henry.php" class="btn btn-primary">Henry Liyanage</a>      
      <a href="henry.php" class="btn btn-primary">Henry Liyanage</a>
</div>-->


  
<script>

var chart = new OrgChart(document.getElementById("tree"), {
            template: "ana",
            enableSearch: false,
            
            tags: {
            "hide": {
                state: BALKANGraph.COLLAPSE
            }
        },
            
            nodeBinding: {
                field_0: "name",
                field_1: "title",
                img_0: "img"
            },
            nodes: [
                { id: 1, name: "Thomas Liyanage",  img: "thomas.jpg" },
                { id: 2, pid: 1,  tags: ["hide"], name: "Education", img: "schoolthomas.png" },
                { id: 3, pid: 1,  tags: ["hide"], name: "40-60", img: "tl4060.jpg" },
                { id: 4, pid: 1,  tags: ["hide"], name: "60 Plus", img: "tl60plus.jpg" },
                { id: 5, pid: 1,  tags: ["hide"], name: "My Wedding", img: "tlwedding.jpg" }
                
            ]
        });    

</script>
 
</body>

</html>
