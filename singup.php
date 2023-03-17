<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Form</title>
	<META HTTP-EQUIV="Pragma" CONTENT="no-cache">
	<META HTTP-EQUIV="Expires" CONTENT="-1">
  <?php session_start(); require 'secure/notForLog.php'; ?>
  <link rel="stylesheet" type="text/css" href="css/form.css">
  
  <script src="js/validateRegister.js"></script>
  <script src="js/validateEmail.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
</head>
<body>
	<img loading="lazy" draggable="false" onclick="window.location.href='index.php'" src="img/logo_login.svg" class="logo">
	<div class="box-form">
	    <a href="#register" id="aSignup" >SIGN-UP</a>

	<div id="register" class = "form-action show">
	    
	    <form name="signupForm" id="signupForm" onsubmit="return validateRegister()" action="mod_signup.php" method="post">
				<span <?php if(isset($_SESSION['erroR'])){
		          			echo "class='erro'";
		          		}
		          	?> id="resR"><?php if(isset($_SESSION['erroR'])){ echo $_SESSION['erroR']; } ?></span>
		    <?php 
		    	if(isset($_SESSION['erroR'])){ echo "<script>setTimeout(function(){ document.getElementById('resR').removeAttribute('class') }, 5000);</script>"; }
		     	unset($_SESSION['erroR']);
		    ?>
		    <br>
		    <input type="text" name="firstname" placeholder="Nome*" required>
		    <br>
		    <input type="text" name="lastname" placeholder="Cognome*" required>
		    <br>
		    <input type="email" name="email" placeholder="Email*" required>
		    <br>
		    <input type="password" id="paswR" name="pass" placeholder="Password*" required><div id="showPaswR" class="mostra" onclick="showPaswR()">Mostra</div>
		    <br>
		    <input type="password" id="conf" name="confirm" placeholder="Conferma la password*" required><div id="showConfR" class="mostra" onclick="showConfR()">Mostra</div>
		    <br>
				<div id="footerLogin">
					<input type="checkbox" id="robot" name="robot" required> <label for="robot"> Non sono un robot</label>
					<br><br>
					<input type="checkbox" id="dati" name="dati" required> <label for="dati"> Autorizzo il trattamento dei dati</label>
					<br>
					<input type="submit" name="submit" value="REGISTRATI" class="button reg" rel="noopener noreferrer">
				</div>
				
			</form>
	</div>
	</div>

	<footer id="footer">@diritti riservati al Gruppo 2</footer>
		
	<script src="js/form.js"></script>
</body>
</html>