<?php 

include __DIR__ . '/data.php';
$result = [];
 if(isset($_GET['category'])){
   foreach($dischi as $value){
       if($value['genre'] == $_GET['category']){
           $result[] = $value;
       } 
   }
 }else{
     $result = $dischi;
 }

  header('Content-Type: application/json');
  
  echo json_encode($result);

?>