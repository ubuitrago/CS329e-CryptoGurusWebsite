<?php

$username = $_POST["userName"];
$uPass = $_POST["password"];

$host = "fall-2019.cs.utexas.edu";
$user = "cs329e_mitra_nacson";
$pwd = "dental-marsh8Serial";
$dbs = "cs329e_mitra_nacson";
$port = "3306";

$connect = new mysqli($host, $user, $pwd, $dbs);

if ($connect->connect_errno)
{
  die("mysqli_connect failed: " . mysqli_connect_errno());
}

//print "Connected to ". $connect->host_info . "\n";
$result = mysqli_query($connect, "select * from users where name=$username");

if (($result->num_rows)>0){
	print <<<EXISTING_USER
	<script>
	alert("User already exists");
	</script>
EXISTING_USER;
} else {
	mysqli_query($connect, "insert into users values ('$username','$uPass')");
}

$connect->close();








$suFile = fopen("passwd.txt","a+");
$users = array();

while(!feof($suFile)) {
    $line = fgets($suFile);
    $field_array  = preg_split("/:/", $line);
    $users[$field_array[0]] = trim($field_array[1]);
  }


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

