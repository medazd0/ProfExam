<?php
$db=new mysqli("localhost:3307","root","","ensadb");
//check
if($db->connect_errno){
  echo "Failed connect to db";
  exit();
}
else {
  echo "yessss" ;
}


?>


