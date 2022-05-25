<?php 
include 'server.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/vue@2/dist/vue.js"></script>
    <title>Document</title>
</head>
<body>
    



 <header>
    <nav class="row g-0 align-items-center">
        <img class="spoty" src="img/spotify.png" alt="">
    </nav>
 </header>

 <div class="container my-5">
  
    <div class="row">
      <?php
       foreach($dischi as $value){
      ?>  
        <div class="col-6 col-md-4 col-lg-3 mb-3">
           <div class="bg-card">
              <img class="w-75" src="<?php echo $value['poster'] ?>" alt="" />
              <h5><?php echo $value['title'] ?></h5>
              <span class="d-block"><?php echo $value['author'] ?></span>
              <span><?php echo $value['year'] ?></span>
            </div>
        </div>
       <?php } ?> 
    </div>
 </div>


</body>
</html>