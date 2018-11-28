<?php

function register(){
$usernames = ["billgates","johndoe","stevejobs"];

if(empty($_POST['username'])){
    print '<div class="error">Username should not be empty</div>';
}
if(empty($_POST['password']) and empty($_POST['conpassword'])){
    print '<div class="error">Password and Confirm password should not be empty</div>';
}

for($i=0; $i<count($usernames); $i++){
    
    if($_POST['username'] == $usernames[$i]){
        print '<div class="error">Username '.$usernames[$i].' is already reserved</div>';
    }
}
if($_POST['password'] != $_POST['conpassword']){
    print "<div class='error'>Password and Confirm password doesn't equal to each other</div>";
}
}
if(isset($_POST['username'])){
    register();
}
?>
<html>
<head><style>
.error{
	border:1px solid red;
	font-weight:bold;
	padding:5px;
	width:400px;
	margin:4px;
}
.input input[type='text'],input[type='password']{
    margin: 5px;
        
}
</style></head>
<body>
<form action="index.php" method="post">
<div class="input">
Username:<input type="text" name="username"><br>
Password:<input type="password" name="password"><br>
Confirm Password:<input type="password" name="conpassword"><br>
<input type="submit"/></div>
</form>
</body>
</html>