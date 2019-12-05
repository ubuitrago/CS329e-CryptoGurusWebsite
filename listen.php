<?php
/* Determines if user is logged in and redirects them
*  to the login page if not
*/
if(isset($_COOKIE["loggedIn"]) && $_COOKIE["loggedIn"]=="yes") {
    // check valid user
    $user = $_COOKIE["loggedIn"];
    $suFile = fopen("passwd.txt","r");
    while(!feof($suFile)) {
      $line = fgets($suFile);
      $field_array  = preg_split("/:/", $line);
      $name = $field_array[0];   
      $pass = $field_array[1];
      if ($user == $name && ($pass != '' && $pass != NULL)){
        break;
      }

    }
    fclose($suFile);
  
} 

else {
  header('Location: forumLogin.php');
}
?>