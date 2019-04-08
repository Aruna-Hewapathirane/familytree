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
            HRs: {
                group: true,
                groupName: "HR Team",
                groupState: BALKANGraph.COLLAPSE,
                template: "group_grey"
            },
            Sales: {
                group: true,
                groupName: "Prassana Family",
                groupState: BALKANGraph.EXPAND,
                template: "group_grey"
            },
            Devs: {
                group: true,
                groupName: "Ruwan & Badra",
                groupState: BALKANGraph.EXPAND,
                template: "group_grey"
            },
            ruwankids: {
                group: true,
                groupName: "Ruwan Children",
                groupState: BALKANGraph.EXPAND,
                template: "group_grey"
            }
        },
        nodes: [
            //{ id: 1, tags: ["Parents"], name: "Doreen Sriyalatha", title: "CEO", img: "doreen.jpg" },
            //{ id: 2, tags: ["Parents"], name: "Ariyapala Gunartna", title: "Director", img: "ariyapala.png" },
            { id: 1, tags: ["Parents"], name: "<a href='doreenbio.php'>Doreen Sriyalatha</a>",  img: "doreen.jpg" },
			{ id: 2, tags: ["Parents"], name: "Ariyapala Gunartna", img: "ariyapala.png" },
            
            { id: 5, pid: 1, tags: ["Devs"], name: "Ruwan", /* title: "JS Developer", */ img: "ruwan.jpg" },
            { id: 6, pid: 1, tags: ["Devs"], name: "Badra", /* title: "JS Developer", */ img: "noimage.jpg" },
            
            { id: 7, pid: 1, tags: ["Sales"], name: "Dr.Prasanna", /* title: "node.js Developer", */ img: "prasanna.jpg" },
            { id: 8, pid: 1, tags: ["Sales"], name: "Pras Wife", /* title: "C# Developer", */ img: "noimage.jpg" },

            { id: 9, pid: 5,  tags:["hide"],name: "Manisha", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 10, pid: 6,  tags:["hide"], name: "Mojitha", /* title: "Sales", */ img: "noimage.jpg" },
            
            { id: 11, pid: 7,  tags:["hide"], name: "Akith", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 12, pid: 7,  tags:["hide"],name: "Manul", /* title: "Sales", */ img: "noimage.jpg" },
            { id: 13, pid: 7,  tags:["hide"], name: "Kisal", /* title: "Sales", */ img: "noimage.jpg" }
            
        ]
    });    
};
    </script>
 
</body>
</html>
