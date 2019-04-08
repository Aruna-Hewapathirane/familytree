<?php include('config.php'); ?>

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
	 
window.onload = function () { 
    var chart = new OrgChart(document.getElementById("tree"), {
        template: "ana",
        enableDragDrop: true,
        nodeMouseClickBehaviour: BALKANGraph.action.edit,
        scaleInitial: 0.76,
       
        nodeBinding: {
            field_0: "name",
            field_1: "title",
            img_0: "img"
        },
        tags: {
			 "hide": {
					state: BALKANGraph.COLLAPSE
				},
            Parents: {
                group: true,
                groupName: "Parents",
                groupState: BALKANGraph.EXPAND,
                template: "group_grey"
            },
            
        },
        nodes: [            
            { id: 1, tags: ["Parents"], name: "Herbert Liyanage",  img: "herbert.jpg" },
			{ id: 2, tags: ["Parents"], name: "Herbert's Wife", img: "noimage.jpg" },
            
            { id: 9, pid: 1,  tags:["hide"],name: "Name unknown", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 10, pid: 1,  tags:["hide"], name: "Name unknown", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 11, pid: 1,  tags:["hide"], name: "Name unknown", /* title: "Sales", */ img: "noimage.jpg" },
            
            
        ]
    });    
};
    </script>
 
</body>
</html>
