<?php include('header.php');?>


<div class="PageBody">
<div class="fOptions">
<div>
    <button class="button" id="button"><span>Sign In</span></button>
</div>
<div class="fRegister"><h2>New User ?</h2>
    <button type="button" class="button"><span>Sign Up!</span></button>
</div>
<!-- <div class = "login">
<center>
<form id="textForm" name="register" method="POST" action="register.php">
<table class = "table" border = "5px">
<tr>
<td> Username </td>
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
    <p>Don't have an account? <a href="/login.html" id="alreadyUser">Register</a></p>
</div> -->
<!--Modal section -->
<div class="bg-modal" style="display:none;">
    <div class="modal-content">
        <h3>Account Login</h3>
    <div class="close">+</div>
    <img src="./user-icon.png" alt="icon" width="100px" height="100px">
    <form action="register.php" method="POST" name="register">
        <input class="fLogin" type="text" name="userName" placeholder="Username">
        <input class="fLogin" type="password" name="password" placeholder="Password">
        <!-- <button class="fSubmit" type="submit" value="Submit">Submit</button>-->
        <button type="button" class="btn btn-primary" aria-pressed="true">Submit</button>
    </form>
    </div>

//    <td style="text-align:center"> <input type = "submit" value = "Register" /></td>
//    <td style="text-align:center"> <input type = "reset" value = "Reset" /></td>
//    <a href="/login.html" id="alreadyUser">Already have an account?</a>
</div>
<!-- </tr>
</table>
</form>
</center> -->
</div>
</div>
<script src="./forumLogin.js"></script>

<?php include('footer.php');?>