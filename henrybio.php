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

</style>
<body>

<?php include('nav.html'); ?>
</br>

<div id="tree"></div></br></br>
  
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
                { id: 1, name: "Henry Liyanage", title: "CEO", img: "henry1.jpg" },
                { id: 2, pid: 1,  tags: ["hide"], name: "<a href='henrychildhood.php' onclick='section(this);'>Childhood</a>", img: "henry2.jpg"},
                { id: 3, pid: 1,  tags: ["hide"], name: "<a href='henryeducation.php' onclick='section(this);'>Education</a>", img: "st.png" },
                { id: 4, pid: 1,  tags: ["hide"], name: "<a href='henrycareer.php' onclick='section(this);'>Career & Work</a>", img: "liyanage-transport-truck.png" },
                { id: 5, pid: 1,  tags: ["hide"], name: "<a href='henrywedding.php' onclick='section(this);'>My Wedding</a>", img: "Henry-and-Srima.jpg" },
                { id: 6, pid: 1,  tags: ["hide"], name: "<a href='henry60.php' onclick='section(this);'>60 Plus</a>", img: "sixtyplus.jpg" },
                { id: 7, pid: 1,  tags: ["hide"], name: "<a href='henryhobbies.php' onclick='section(this);'>Hobbies & Interests</a>", img: "henry-on-bike1.jpg" },
            ]
        });    

</script>
 
</body>

</html>
