<?php
class Userlogin{
  private $db,$password,$username;
   public function getusername(){return $this->username;}
public function __construct($db,$username,$password){
$this->db=$db;$this->username=$username;$this->password=$password;
}
private function auth(){
  $query=$this->db->prepare("SELECT * FROM users WHERE username=?");
$query->bind_param("s",$this->username);
$query->execute();
$result=$query->get_result();
if($result->num_rows>0){
  $user=$result->fetch_assoc();
  $password=$user["password"];
$statuts=password_verify($this->password,$password);
 return [$statuts,$user["id"],$user["username"]];

}else return false; 

}
public function Login(){
if ($this->auth()[0]){
  $_SESSION["id"]=$this->auth()[1];
  $_SESSION["username"]=$this->auth()[2];
  return true;
}else false;
} 

}












?>