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
       //scaleInitial: 0.56,
	   
            nodeBinding: {
                field_0: "name",                
                field_1: "title",
                img_0: "img0"                
            },
            
             
            nodes: [
                { id: 1, name: "Edward Liyanage", title:"Deceased", img0:"edward.jpg" },                         
            ]
        });

    </script>
 
</body>
</html>
