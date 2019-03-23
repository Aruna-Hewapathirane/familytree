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
	 
    	 
   var chart = new OrgChart(document.getElementById("tree"), {
	   
            nodeBinding: {
                field_0: "name",                
                img_0: "img0"                
            },
            
            nodes: [
                { id: 1, name: "Kahandawela Aarachchige Dolly perera", img0:"noimage.jpg" },
                { id: 2, pid: 1, name:"Soma", img0:"noimage.jpg"},
                { id: 3, pid: 1, name: "Hema", img0: "noimage.jpg" },
                { id: 4, pid: 1, name: "Edward", img0: "noimage.jpg" },
                      ]
        });

    </script>
 
</body>
</html>
