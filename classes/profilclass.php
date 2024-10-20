<?php

class profil{
  static public function hederprofil(){
echo profil::startheder();
echo profil::endheder("Utilistaeur Non definie");

echo profil::slidebar();
  }
  static public function table(){
    echo profil::slidebar();
echo profil::startheder();
echo profil::endheder("Utilistaeur Non definie");
//echo profil::endheder($_SESSION["username"]);
echo profil::starttable();

  }
 
static public function starttable(){
  return '<div class=" c relative overflow-x-auto shadow-md sm:rounded-lg  my-36 ml-60 ">
  <table class=" - w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
      <thead class=" text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
          <tr>
              <th scope="col" class="p-1">
                Nom
              </th>
              <th scope="col" class="px-2 py-2">
                 prenom
              </th>
              <th scope="col" class="px-2 py-2">
                  username
              </th>
              <th scope="col" class="px-2 py-2">
              email
              </th>
              <th scope="col" class="px-2 py-2">
                 category
              </th>

              <th scope="col" class="px-2 py-2">
                 action
              </th>
              
          </tr>
          </thead>';
}


static public function startheder(){
  return ' <nav class="grid grid-cols-4 bg-white   shadow-2xl fixed top-0 right-0 left-0 z-10  ">
  <img class="w-100 "  src="logoENSA.png">
  <div></div>
  <div></div>';
}
static public function endheder($username){
  
  return '<div class="ml-9 ">     '.$username.'</div>
  </nav>';
}
public static function slidebar(){
return '
<div class="  fixed left-0 top-28">
      <input type="checkbox" id="check">
      <label for="check">
      <i class="fas fa-bars " id="btn" ></i>
      <i class="fas fa-times " id="cancel"></i>
      </label>
      <div class="sidebar">
        <a href="Allusers.php" class="active">
          <i class="fas fa-qrcode"></i>
          <span>ALL USERS</span>
        </a>
        <a href="addUser.php">
          <i class="fas fa-link"></i>
          <span>ADD USER</span>
        </a>
        <a href="examen.php">
           <i class="fas fa-calendar"></i>
          <span>EXAMEN</span>
        </a>
        <a href="salle.php">
          <i class="far fa-question-circle"></i>
          <span>SALLE et PROFESSEUR</span>
        </a>
        <a href="#">
          <i class="fas fa-sliders-h"></i>
          <span>PLANING</span>
        </a>
        <a href="profile.php">
          <i class="fas fa-stream"></i>
          <span>ACCEUIL</span>
        </a>
      </div>
    </div>
' ;
}
public static function addnewuser(){
 echo '
 <form action="register.php" method="POST" class=" mx-96 my-52 ">
      
 <div class="grid grid-cols-1 gap-x-7 gap-y-3 sm:grid-cols-2 relative z-0">
   <div>
     <label for="first-name" class="block text-sm font-semibold leading-6 text-black">First name</label>
     <div class="mt-2.2">
       <input type="text" name="firstname" id="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     </div>
   </div>
   <div>
     <label for="last-name" class="block text-sm font-semibold leading-6 text-black">Last name</label>
     <div class="mt-2.2">
       <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     </div>
   </div>
   <div class="sm:col-span-2">
     <label for="company" class="block text-sm font-semibold leading-6 text-black">username</label>
     <div class="mt-2.2">
       <input type="text" name="username" id="username" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     </div>
   </div>
   <div class="sm:col-span-2">
     <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Email</label>
     <div class="mt-2.2">
       <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     </div>
   </div>
   <div class="sm:col-span-2">
     <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Categorie</label>
   <select name="category" class="  w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     <option value="">--select--</option>
     <option value"Etudiant"=>Etudiant</option>
     <option value="Enseignant">Enseignant</option>
     <option value="other">other</option>
   </select>
     </div>

     <div class="sm:col-span-2">
     <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Metiere</label>
     <div class="mt-2.2">
       <input type="text" name="Matiere" id="Matiere" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     </div>
   </div>

     <div class="sm:col-span-2">
     <label for="email" class="block text-sm font-semibold leading-6 text-red-600">password</label>
     <div class="mt-2.5">
       <input type="password" name="password" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
     </div>
   </div>
   </div>
  
       <div class="mt-8">
   <button type="submit"  class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">ADD</button>
 </div>
</form>

';
}

public static function edituser(){
  echo '
  <form action="" method="POST" class=" mx-96 my-52 ">
       
  <div class="grid grid-cols-1 gap-x-7 gap-y-3 sm:grid-cols-2 relative z-0">
    <div>
      <label for="first-name" class="block text-sm font-semibold leading-6 text-black">First name</label>
      <div class="mt-2.2">
        <input type="text" name="firstname" id="firstname" autocomplete="given-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm shadow-blue-500 ring-1 ring-inset ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      </div>
    </div>
    <div>
      <label for="last-name" class="block text-sm font-semibold leading-6 text-black">Last name</label>
      <div class="mt-2.2">
        <input type="text" name="lastname" id="lastname" autocomplete="family-name" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      </div>
    </div>
    <div class="sm:col-span-2">
      <label for="company" class="block text-sm font-semibold leading-6 text-black">username</label>
      <div class="mt-2.2">
        <input type="text" name="user_name" id="username" autocomplete="organization" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      </div>
    </div>
    <div class="sm:col-span-2">
      <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Email</label>
      <div class="mt-2.2">
        <input type="email" name="email" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      </div>
    </div>
    <div class="sm:col-span-2">
      <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Categorie</label>
    <select name="category" class="  w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      <option value="">--select--</option>
      <option value"Etudiant"=>Etudiant</option>
      <option value="Enseignant">Enseignant</option>
      <option value="other">other</option>
    </select>
      </div>
 
      <div class="sm:col-span-2">
      <label for="email" class="block text-sm font-semibold leading-6 text-red-600">Metiere</label>
      <div class="mt-2.2">
        <input type="text" name="Matiere" id="Matiere" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      </div>
    </div>
 
      <div class="sm:col-span-2">
      <label for="email" class="block text-sm font-semibold leading-6 text-red-600">password</label>
      <div class="mt-2.5">
        <input type="password" name="password" id="email" autocomplete="email" class="block w-full rounded-md border-0 px-3.5 py-2 text-gray-900 shadow-sm ring-1 ring-inset shadow-blue-500 ring-blue-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-blue-400 sm:text-sm sm:leading-6">
      </div>
    </div>
    </div>
   
     <div class="mt-8">
    <button type="submit" name="update" class="block w-full rounded-md bg-cyan-600 px-3.5 py-2.5 text-center text-sm font-semibold text-white shadow-sm hover:bg-green-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">UPDATE</button>
  </div>
 </form>
 
 ';
 }

 public static function detailuser(){
  echo '<div class="card">
  <div class="card__img"><svg width="100%" xmlns="http://www.w3.org/2000/svg"><rect height="450" width="540" fill="#ffffff"></rect><defs><linearGradient gradientTransform="rotate(222,648,379)" y2="100%" y1="0" x2="0" x1="0" gradientUnits="userSpaceOnUse" id="a"><stop stop-color="#ffffff" offset="0"></stop><stop stop-color="#FC726E" offset="1"></stop></linearGradient><pattern viewBox="0 0 1080 900" y="0" x="0" height="250" width="300" id="b" patternUnits="userSpaceOnUse"><g fill-opacity="0.5"><polygon points="90 150 0 300 180 300" fill="#444"></polygon><polygon points="90 150 180 0 0 0"></polygon><polygon points="270 150 360 0 180 0" fill="#AAA"></polygon><polygon points="450 150 360 300 540 300" fill="#DDD"></polygon><polygon points="450 150 540 0 360 0" fill="#999"></polygon><polygon points="630 150 540 300 720 300"></polygon><polygon points="630 150 720 0 540 0" fill="#DDD"></polygon><polygon points="810 150 720 300 900 300" fill="#444"></polygon><polygon points="810 150 900 0 720 0" fill="#FFF"></polygon><polygon points="990 150 900 300 1080 300" fill="#DDD"></polygon><polygon points="990 150 1080 0 900 0" fill="#444"></polygon><polygon points="90 450 0 600 180 600" fill="#DDD"></polygon><polygon points="90 450 180 300 0 300"></polygon><polygon points="270 450 180 600 360 600" fill="#666"></polygon><polygon points="270 450 360 300 180 300" fill="#AAA"></polygon><polygon points="450 450 360 600 540 600" fill="#DDD"></polygon><polygon points="450 450 540 300 360 300" fill="#999"></polygon><polygon points="630 450 540 600 720 600" fill="#999"></polygon><polygon points="630 450 720 300 540 300" fill="#FFF"></polygon><polygon points="810 450 720 600 900 600"></polygon><polygon points="810 450 900 300 720 300" fill="#DDD"></polygon><polygon points="990 450 900 600 1080 600" fill="#AAA"></polygon><polygon points="990 450 1080 300 900 300" fill="#444"></polygon><polygon points="90 750 0 900 180 900" fill="#222"></polygon><polygon points="270 750 180 900 360 900"></polygon><polygon points="270 750 360 600 180 600" fill="#DDD"></polygon><polygon points="450 750 540 600 360 600"></polygon><polygon points="630 750 540 900 720 900"></polygon><polygon points="630 750 720 600 540 600" fill="#444"></polygon><polygon points="810 750 720 900 900 900" fill="#AAA"></polygon><polygon points="810 750 900 600 720 600" fill="#666"></polygon><polygon points="990 750 900 900 1080 900" fill="#999"></polygon><polygon points="180 0 90 150 270 150" fill="#999"></polygon><polygon points="360 0 270 150 450 150" fill="#444"></polygon><polygon points="540 0 450 150 630 150" fill="#FFF"></polygon><polygon points="900 0 810 150 990 150"></polygon><polygon points="0 300 -90 450 90 450" fill="#222"></polygon><polygon points="0 300 90 150 -90 150" fill="#FFF"></polygon><polygon points="180 300 90 450 270 450" fill="#FFF"></polygon><polygon points="180 300 270 150 90 150" fill="#666"></polygon><polygon points="360 300 270 450 450 450" fill="#222"></polygon><polygon points="360 300 450 150 270 150" fill="#FFF"></polygon><polygon points="540 300 450 450 630 450" fill="#444"></polygon><polygon points="540 300 630 150 450 150" fill="#222"></polygon><polygon points="720 300 630 450 810 450" fill="#AAA"></polygon><polygon points="720 300 810 150 630 150" fill="#666"></polygon><polygon points="900 300 810 450 990 450" fill="#FFF"></polygon><polygon points="900 300 990 150 810 150" fill="#999"></polygon><polygon points="0 600 -90 750 90 750"></polygon><polygon points="0 600 90 450 -90 450" fill="#666"></polygon><polygon points="180 600 90 750 270 750" fill="#AAA"></polygon><polygon points="180 600 270 450 90 450" fill="#444"></polygon><polygon points="360 600 270 750 450 750" fill="#444"></polygon><polygon points="360 600 450 450 270 450" fill="#999"></polygon><polygon points="540 600 630 450 450 450" fill="#666"></polygon><polygon points="720 600 630 750 810 750" fill="#222"></polygon><polygon points="900 600 810 750 990 750" fill="#FFF"></polygon><polygon points="900 600 990 450 810 450" fill="#222"></polygon><polygon points="0 900 90 750 -90 750" fill="#DDD"></polygon><polygon points="180 900 270 750 90 750" fill="#444"></polygon><polygon points="360 900 450 750 270 750" fill="#FFF"></polygon><polygon points="540 900 630 750 450 750" fill="#AAA"></polygon><polygon points="720 900 810 750 630 750" fill="#FFF"></polygon><polygon points="900 900 990 750 810 750" fill="#222"></polygon><polygon points="1080 300 990 450 1170 450" fill="#222"></polygon><polygon points="1080 300 1170 150 990 150" fill="#FFF"></polygon><polygon points="1080 600 990 750 1170 750"></polygon><polygon points="1080 600 1170 450 990 450" fill="#666"></polygon><polygon points="1080 900 1170 750 990 750" fill="#DDD"></polygon></g></pattern></defs><rect height="100%" width="100%" fill="url(#a)" y="0" x="0"></rect><rect height="100%" width="100%" fill="url(#b)" y="0" x="0"></rect></svg></div>
  <div class="card__avatar"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 128 128"><circle r="60" fill="#ff8475" cy="64" cx="64"></circle><circle r="48" opacity=".4" fill="#f85565" cy="64" cx="64"></circle><path fill="#7f3838" d="m64 14a32 32 0 0 1 32 32v41a6 6 0 0 1 -6 6h-52a6 6 0 0 1 -6-6v-41a32 32 0 0 1 32-32z"></path><path opacity=".4" fill="#393c54" d="m62.73 22h2.54a23.73 23.73 0 0 1 23.73 23.73v42.82a4.45 4.45 0 0 1 -4.45 4.45h-41.1a4.45 4.45 0 0 1 -4.45-4.45v-42.82a23.73 23.73 0 0 1 23.73-23.73z"></path><circle r="7" fill="#fbc0aa" cy="65" cx="89"></circle><path fill="#4bc190" d="m64 124a59.67 59.67 0 0 0 34.69-11.06l-3.32-9.3a10 10 0 0 0 -9.37-6.64h-43.95a10 10 0 0 0 -9.42 6.64l-3.32 9.3a59.67 59.67 0 0 0 34.69 11.06z"></path><path opacity=".3" fill="#356cb6" d="m45 110 5.55 2.92-2.55 8.92a60.14 60.14 0 0 0 9 1.74v-27.08l-12.38 10.25a2 2 0 0 0 .38 3.25z"></path><path opacity=".3" fill="#356cb6" d="m71 96.5v27.09a60.14 60.14 0 0 0 9-1.74l-2.54-8.93 5.54-2.92a2 2 0 0 0 .41-3.25z"></path><path fill="#fff" d="m57 123.68a58.54 58.54 0 0 0 14 0v-25.68h-14z"></path><path stroke-width="14" stroke-linejoin="round" stroke-linecap="round" stroke="#fbc0aa" fill="none" d="m64 88.75v9.75"></path><circle r="7" fill="#fbc0aa" cy="65" cx="39"></circle><path fill="#ffd8c9" d="m64 91a25 25 0 0 1 -25-25v-16.48a25 25 0 1 1 50 0v16.48a25 25 0 0 1 -25 25z"></path><path fill="#bc5b57" d="m91.49 51.12v-4.72c0-14.95-11.71-27.61-26.66-28a27.51 27.51 0 0 0 -28.32 27.42v5.33a2 2 0 0 0 2 2h6.81a8 8 0 0 0 6.5-3.33l4.94-6.88a18.45 18.45 0 0 1 1.37 1.63 22.84 22.84 0 0 0 17.87 8.58h13.45a2 2 0 0 0 2.04-2.03z"></path><path style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1" d="m62.76 36.94c4.24 8.74 10.71 10.21 16.09 10.21h5"></path><path style="fill:none;stroke-linecap:round;stroke:#fff;stroke-miterlimit:10;stroke-width:2;opacity:.1" d="m71 35c2.52 5.22 6.39 6.09 9.6 6.09h3"></path><circle r="3" fill="#515570" cy="62.28" cx="76"></circle><circle r="3" fill="#515570" cy="62.28" cx="52"></circle><ellipse ry="2.98" rx="4.58" opacity=".1" fill="#f85565" cy="69.67" cx="50.42"></ellipse><ellipse ry="2.98" rx="4.58" opacity=".1" fill="#f85565" cy="69.67" cx="77.58"></ellipse><g stroke-linejoin="round" stroke-linecap="round" fill="none"><path stroke-width="4" stroke="#fbc0aa" d="m64 67v4"></path><path stroke-width="2" stroke="#515570" opacity=".2" d="m55 56h-9.25"></path><path stroke-width="2" stroke="#515570" opacity=".2" d="m82 56h-9.25"></path></g><path opacity=".4" fill="#f85565" d="m64 84c5 0 7-3 7-3h-14s2 3 7 3z"></path><path fill="#f85565" d="m65.07 78.93-.55.55a.73.73 0 0 1 -1 0l-.55-.55c-1.14-1.14-2.93-.93-4.27.47l-1.7 1.6h14l-1.66-1.6c-1.34-1.4-3.13-1.61-4.27-.47z"></path></svg></div>
  <div class="card__title">Administrateur</div>
  <div class="card__subtitle">WELCOM Admin</div>
  <div class="card__wrapper">
      <button class="card__btn">Button</button>
      <button class="card__btn card__btn-solid">Button</button>
  </div>';
}

}


?>