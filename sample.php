<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $co = $_POST["cmd"];
  if (strcmp($co, "cd bitbucket")==0) {
  	header("Location: https://bitbucket.org/product");
  }
  if (strcmp($co, "cd w3schools")==0) {
  	header("Location: https://www.w3schools.com/");
  }
  if (strcmp($co, "cd Stack_Overflow")==0) {
  	header("Location: http://stackoverflow.com/");
  }
  if (strcmp($co, "linkedin.out")==0) {
  	header("Location: https://www.linkedin.com");
  }
  if (strcmp($co, "email.out")==0) {
  	header("Location: mailto:ajpatterson1@myseneca.ca");
  }
  if (strcmp($co, "github.out")==0) {
  	header("Location: https://github.com");
  }
}
?>

<!DOCTYPE html>
<html lang="en">
	<head>
	<meta content="text/html;charset=utf-8" http-equiv="Content-Type">
	<title>Home</title>
	<link href='https://fonts.googleapis.com/css?family=Oswald:400' rel='stylesheet' type='text/css'>
	<link href='https://fonts.googleapis.com/css?family=Oswald:300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="style.css" type="text/css" />
	<!-- Original Design: kopri@unixhub.net | Recode/enhancement: evolution@unixhub.net -->
	</head>
	<body>
	<h1 style="padding-top: 2%; font-weight: lighter;">Welcome to my Website! </h1>
		<div id="container" style="	margin-right: auto; margin-left: auto;">
			<div class="PS1"><p class="at">Guest@Aaron-Patterson&nbsp</p><p class="amper">~</p><p class="inp">$ cd /home </p></div>
				<div id="links">
				<ul class="main">
					<li>Directory Links</li>
					<li><a class="main" href="http://stackoverflow.com/">Stack_Overflow/</a><li>
					<li><a class="main" href="https://bitbucket.org/product">bitbucket/</a><li>
					<li><a class="main" href="https://www.w3schools.com/">w3schools/</a><li>
					
				</ul>
				<ul class="contact" style="padding-left: 100px;">
					<li>Executable Links</li>
					<li><a class="contact" href="mailto:ajpatterson1@myseneca.ca">email.out</a><li>
					<li><a class="contact" href="https://github.com">github.out</a><li>
					<li><a class="contact" href="https://www.linkedin.com">linkedin.out</a><li>
				</ul>
				<br><br><br><br>
				<p>Click on one of the options listed above. For the CS nerds: You may also type in a command in the command line. For example: cd Videos</p>
				</div>
				
				<div class="PS1"><p class="at" style="margin-bottom: 5px;">Guest@Aaron-Patterson&nbsp</p><p class="amper" style="margin-bottom: 10px;"> ~</p><p class="inp" style="float: left; margin-top: 10px;">$&nbsp </p></div>

				<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>"> 
	  			<input type="hidden" name="hl" value="cz" /> 
	  			<input type="text" maxlength="250" size="40" tabindex="1" name="cmd" value="" /> 
	 			<input type="submit" value="go" name="btnG" /> 
				</form>
				</div>
		</div>

	</body>
</html>
