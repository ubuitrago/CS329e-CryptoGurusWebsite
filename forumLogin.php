<?php include('header.php');?>
<div class="PageBody">
<div class = "login">
<center>
<form id="textForm" name="register" method="POST" action="register.php">
<table class = "table" border = "5px">
<tr>
<td> User Name </td>
<td> <input type = "text" name = "userName" /></td>
</tr>
<tr>
<td> Password </td>
<td> <input type = "text" name = "password" /></td>
</tr>
<tr>
<td> Re-enter Password </td>
<td> <input type = "text" name = "rePassword" /></td>
</tr>
<tr>
<div class = "loginButtons">
    <td> <input type = "submit" value = "Register" /></td>
    <td> <input type = "reset" value = "Reset" /></td>
    <a href="/login.html" id="alreadyUser">Already have an account?</a>
</div>
</tr>
</table>
</form>
</center>
</div>
</div>

<?php include('footer.php');?>