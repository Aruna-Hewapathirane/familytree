<!DOCTYPE html>
<html lang="en">
<head>
  <title>Liyanage Family Tree</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  
  <script src="orgchart.js"></script>
</head>

<body>

<?php include('nav.html'); ?>

 <div style="width:100%; height:700px;" id="tree"/>
 <script>
	 
var familyGroupTag = {
        group: true,
        template: "group_grey",
        groupState: BALKANGraph.EXPAND
    };
    	 
   var chart = new OrgChart(document.getElementById("tree"), {
	   //layout: BALKANGraph.tree,
       //align: BALKANGraph.ORIENTATION,
	   
            nodeBinding: {
                field_0: "name",                
                field_1: "bio", 
                img_0: "img0"                
            },
            
             tags: {
				Parents: familyGroupTag,
				 "hide": {
					state: BALKANGraph.COLLAPSE
				},
			},
            nodes: [
                { id: 1, tags: ["Parents"],name: "Srima", img0:"srima.jpg" },
                { id: 2, tags: ["Parents"],name:"Henry Liyanage", img0:"papa.png"},
                { id: 3, tags:["hide"],pid: 1, name: "Deary", img0: "deary.png" },
                { id: 4, tags:["hide"],pid: 1, name: "Jacqueline", bio:"<a href='jacque.php'>Bio</a>", img0: "Jacqueline.jpg" },
                { id: 5, tags:["hide"],pid: 1, name: "Sanuri Liyanage", img0: "noimage.jpg" }                
                
            ]
        });

    </script>
 
</body>
</html>
