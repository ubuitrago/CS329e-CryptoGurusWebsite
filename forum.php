<?php include('header.php');?>
<?php include('listen.php');?>
<div class = "PageBody">
<?php $user = $_COOKIE["user"];
print<<<Logout
<button class=open-button onclick= openForm()>$user, logged in</button>
Logout;
?>
<style>
.form-popup {
  display: none;
  position: fixed;
  bottom: 0;
  right: 15px;
  border: 3px solid gold;
  z-index: 10;
  background: gray;
}
.open-button {
    margin:5.5px;
    align:right;
}
.form-container .btn:hover, .open-button:hover {
  opacity: 1;
}
</style>
<script type="text/javascript">
function openForm() {
  document.getElementById("myForm").style.display = "block";
}

function closeForm() {
  document.getElementById("myForm").style.display = "none";
}
</script>

<div class="form-popup" id="myForm">
  <form action="./action_page.php" class="form-container">
    <h1>Need to Logout?</h1>
    <button type="submit" class="btn">Logout</button>
    <button type="button" class="btn cancel" onclick="closeForm()">Stay Logged In</button>
  </form>
</div>

<img src="./forumExample.JPG" width="95%" height="45%" style="margin-left:auto; margin-right:auto;"/>
</div>
<?php include('footer.php');?>