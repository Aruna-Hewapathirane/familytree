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
                { id: 1, name: "Harriet Liyanage", title: "Eldest (Deceased)", img: "harriet.jpg" },
                //{ id: 2, pid: 1,  tags: ["hide"], name: "<a href='hlchildhood.php'>Childhood</a>", img: "hlchildhood.jpg"},
                { id: 2, pid: 1,  tags: ["hide"], name: "<a href='hlchildhood.php' onclick='section(this);'>Childhood</a>", img: "hlchildhood.jpg"},
                
                { id: 3, pid: 1,  tags: ["hide"], name: "<a href='hleducation.php'>Education</a>", img: "Anula-Vidyalaya.jpg" },
                { id: 4, pid: 1,  tags: ["hide"], name: "<a href='hl20-30.php'>My 20-30's</a>", img: "hl2030.jpg" },
                
            ]
        });    
        
//"<a href='hlchildhood.php' onclick='section(this);'>Childhood</a>"
        
        
        
</script>
 
</body>

</html>


