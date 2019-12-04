<?php
$suFile = fopen("passwd.txt","a+");
$users = array();

while(!feof($suFile)) {
    $line = fgets($suFile);
    $field_array  = preg_split("/:/", $line);
    $users[$field_array[0]] = trim($field_array[1]);
  }
$username = $_POST["userName"];
$uPass = $_POST["password"];
$rePass = $_POST["rePassword"];

  if (array_key_exists($username,$users)){
    if ($uPass == $users[$username] && $uPass == $rePass) {
      // set cookie for five days
      setcookie ('loggedIn', 'yes', time()+ (60*60*24*5));
      setcookie('user',$username, time()+ (60*60*24*5));
      header('Location: ./forum.php'); 
    }

    else {
    header('Location: ./forumLogin.php'); 
    }
}

  else{
    $new = $username.':'.$uPass."\n";
    fwrite($suFile,$new);
    setcookie ('loggedIn', 'yes', time()+ (60*60*24*5));
    setcookie('user',$username, time()+ (60*60*24*5));
    header('Location: ./forum.php'); 
  }

fclose($suFile);
?>

