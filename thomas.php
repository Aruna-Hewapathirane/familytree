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
       scaleInitial: 0.56,
	   
            nodeBinding: {
                field_0: "name",                
                img_0: "img0"                
            },
            
             tags: {
				Parents: familyGroupTag,				
                "hide": {
					state: BALKANGraph.COLLAPSE
				},
			},
            nodes: [

                { id: 1, tags: ["Parents"],name: "<a href='thomasbio.php'>Thomas Liyanage</a>", img0:"thomas.jpg" },
                { id: 2, tags: ["Parents"],name:"Emala Liyanage", img0:"Emala.jpg"},
                { id: 3, tags:["hide"],pid: 1, name: "Harriet Sunethra", img0: "harriet.jpg" },
                { id: 4, tags:["hide"],pid: 1, name: "Doreen",img0: "doreen.jpg"  },
                { id: 5, tags:["hide"],pid: 1, name: "Edward Siripala",img0:"edward.jpg" },
                { id: 6, tags:["hide"],pid: 1, name: "George",img0:"george.jpg" },
                { id: 7, tags:["hide"],pid: 1, name: "Henry Nayanananda",img0:"papa.png" },
                { id: 8, tags:["hide"],pid: 1, name: "Herbert",img0:"herbert.jpg" },
                { id: 9, tags:["hide"],pid: 1, name: "Beatrice",img0:"beatrice.jpg" },
                { id: 10, tags:["hide"],pid: 1, name: "Primrose",img0:"primrose.jpg" },
                { id: 11, tags:["hide"],pid: 1, name: "Celia",img0:"celia.jpg" },
                { id: 12, tags:["hide"],pid: 1, name: "Harold",img0:"harold.jpg" },
                { id: 13, tags:["hide"],pid: 1, name: "Elaine",img0:"elaine.jpg" }
                
            ]
        });

    </script>
 
</body>
</html>
