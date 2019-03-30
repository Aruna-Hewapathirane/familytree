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
<div class="container"></div>  

  
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
                { id: 1, name: "Doreen Sriyalatha", title: "2nd Born", img: "doreen.jpg" },
                { id: 2, pid: 1,  tags: ["hide"], name: "<a href='#'>Babyhood</a>", img: "dlbabyhood.jpg"},
                { id: 3, pid: 1,  tags: ["hide"], name: "<a href='#'>Childhood</a>", img: "dlchildhood.jpg"},
                { id: 4, pid: 1,  tags: ["hide"], name: "<a href='#'>Education</a>", img: "Anula-Vidyalaya.jpg" },
                { id: 5, pid: 1,  tags: ["hide"], name: "<a href='#'>My Wedding</a>", img: "dlwedding.jpg" },
                { id: 6, pid: 1,  tags: ["hide"], name: "<a href='#'>My Kids</a>", img: "dlkids.jpg"},
                
            ]
        });    
</script>
 
</body>

</html>
