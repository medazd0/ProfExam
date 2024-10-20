<?php
class form{
  public static function Loginform(){
echo form::hederwebsite();
echo form::Startform();
echo form::LoginTitle("CONNECT TO YOUR ACC");
echo form::UsernameInput();
echo form::PasswordInput();
echo form::SignUp("SIGN UP");
echo form::Endform();
  }
 // public static function createacc(){
   // echo form::Startcreatform();
    //echo form::LoginTitle("create acc");
    //echo form::UsernameInput();
    //echo form::PasswordInput();
    //echo form::SignUp("cret acc");
    //echo form::Endform();
      //}

  static function hederwebsite(){
echo  ' <nav class="grid grid-cols-4 bg-transparent  shadow-2xl fixed top-0 right-0 left-0  ">
<img class="w-1/2 mt-7 ml-9"  src="logoENSA.png">
<div class="button justify-self-center mt-8 z-1 p-2" >About </div>
<div class="button justify-self-center mt-8" >Login</div>

<div class="grid grid-cols-3 gap-10 content-center">
<button id="btn0">
  <a href="#">
    <img fill="currentColor" id="facebook" src="Instagram-Logo.wine.svg">         
     </a>
</button>
<button id="btn0">
<a href="#">
  <img fill="currentColor" id="facebook" src="Instagram-Logo.wine.svg">         
   </a>
</button>
<button id="btn0">
<a href="#">
<svg viewBox="0 0 16 16" fill="currentColor" id="facebook">
                   <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"></path>
               </svg>
 </a>
</button>
</div>
</nav>';
}
private static function Startcreatform(){
  return '
  <div class="grid grid-cols-1 ">
  <div class="cont mt-20 justify-self-center ">
  <form action="classes/register.php" class="form" method="post">';
}
private static function Startform() {
  return '
  <div class="grid grid-cols-1 mt-100 ">
      <div class="cont mt-20 justify-self-center ">
          <form action="' . htmlspecialchars($_SERVER['PHP_SELF']) . '" class="form" method="post">';
}



private static function LoginTitle($title){
return ' <div class="Sign-up">'.$title.'</div>';
}
private static function UsernameInput(){
  return  '    <input required="" class="inputinfo" type="" name="username" id="email" placeholder="User">';
}
private static function PasswordInput(){
  return  '<input required="" class="inputinfo" type="password" name="password" id="password" placeholder="Password">';
}
private static function SignUp($signup){
  return '<input class="login-button" type="submit" value='.$signup.'>' ;
}
private static function Endform(){
  return ' </form>
  <div>@2024 all right reserved/div>
  </div>
  </div>';
}
}
