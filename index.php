<html>

<script language="javascript">

	function yz(){
	
		alert("Log in first...");

	}

	function jk(){
		
		var ag = document.login.email.value;
		if(ag==""){
			alert("Please enter Your valid email-id...");
			document.login.email.focus();
			return false;
		}

		var pas = document.login.pass.value;
		if(pas==""){
			alert("Please enter Your a/c password...");
			document.login.pass.focus();
			return false;
		}

		return true;
	
	}

</script>



	<title>I S A</title>
	<body background="minimal-red-flowers-1366-768-6716.jpg"></body>
	<head><center><h1><i><u><font color="white" face="Gabriola" size="7">Welcome to ISA membership login.</font></u></i></h1></center></head>


		<?php
			if(isset($_GET['msg'])=="1")
			{
				echo"<body onload='yz();'></body>";
			}
		?>



		<form action="check.php" method="POST" name="login" ONSUBMIT="return jk();">
		<font face='Jokerman' color='white' size='5'>E-mail Id:<br> 
		<input type="text" name="email"><br><br>
		password: <br><input type="password" name="pass"><br><br>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="sub" value="Log in"><br><br></font>
		<small><font color="white">New User&nbsp;?</font> <br></small>
		<a href="signup_from.php">Sign up &raquo;</a>

		</form>
	</body>
</html>
