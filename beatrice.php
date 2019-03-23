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
            { id: 1, tags: ["Parents"], name: "Beatrice Swarnalatha",  img: "beatrice.jpg" },
			{ id: 2, tags: ["Parents"], name: "Karuna Tissa", img: "tissa.jpg" },
            
            { id: 3, pid: 1,  tags:["hide"],name: "Amal", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 4, pid: 1,  tags:["hide"], name: "Ranmal", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 5, pid: 1,  tags:["hide"], name: "Terrance", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 6, pid: 1,  tags:["hide"], name: "Lalith", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 7, pid: 1,  tags:["hide"], name: "Ranjith", /* title: "Sales", */ img: "noimage.jpg" },
            
            
        ]
    });    
};
    </script>
 
</body>
</html>
