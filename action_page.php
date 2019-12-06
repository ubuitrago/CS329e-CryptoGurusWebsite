<?php 
// Set the expiration date to one hour ago
setcookie('user', "",time() - 3600);
setcookie('loggedIn', "",time() - 3600); 
header('Location: ./forumLogin.php');
?>