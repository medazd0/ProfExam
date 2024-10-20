<?php
require_once('dbcon.php');

class User{
  private $db;
  private $error=array();
  public function __construct($db){
    $this->db=$db;
  }
  
  private function verifyUsername($username){

    if(empty($username)){
        array_push($this->error,"Empty username");
       
    }else{
        if(!preg_match("/^[a-zA-Z0-9]+$/",$username)){
            array_push($this->error,"Username error form");
            
        }
      
        if(is_numeric($username[0])){
            array_push($this->error,"Username numeric error");
        }
    
        if(strlen($username) > 25 || strlen($username) < 5 ){
            array_push($this->error,"Username: 5 & 25");
           
        
        }
    
        $query = $this->db->prepare("SELECT username FROM users WHERE username = ? ");
        $query->bind_param("s", $username);
        $query->execute();
        $result = $query->get_result();
    
        if($result->num_rows > 0 ){
            array_push($this->error,"Username already exist");
            
            
        } 
        return false;
    }
   

}
 
public function getError(){
  echo "<ul>";
  foreach($this->error as $e){
    echo "<li>".$e."</li>";
  }
  echo "</ul>";
}
private function insertUser($username,$password,$firstname,$lastname,$email,$matiere,$category){
  $password =password_hash($password,PASSWORD_BCRYPT);
  $query = $this->db->prepare("INSERT INTO users(username,password,nom,prenom,email,Matiere,category) VALUES(?,?,?,?,?,?,?) ");
  $query->bind_param("sssssss",$username,$password,$firstname,$lastname,$email,$matiere,$category);
  return $query->execute();
}

 
  
public function register($username,$password,$firstname,$lastname,$email,$matiere,$category){
  $this->verifyusername($username);
  if(empty($this->error)){
  
    return $this->insertUser($username,$password,$firstname,$lastname,$email,$matiere,$category);
  }
     



}






}