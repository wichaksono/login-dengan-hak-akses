<?php
session_start();

if( isset($_SESSION['akses']) )
{
	header('location:'.$_SESSION['akses']);
	exit();
}

if( isset($_SESSION['error']) ) {

 	$_SESSION['error']; 

 	unset($_SESSION['error']);
} else {
    $error = '';
}?>

<?php echo $error;?>
<h3>Form Login</h3>
<form action="check-login.php" method="post">
username : <br/>
<input type="text" name="usernamemu" /> <br>
password : <br/>
<input type="password" name="passwordmu" />
<br>
<button>Login</button>
</form>
