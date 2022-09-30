<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style3.css">
 <script src="script.js" async ></script>
	<title>Document</title>
</head>
<body  id="log">
	<div class="container" id="reg1"> 
	<header> <a href="home.html">
    <h4 class="logo">Petition.tn</h4>
    </a>
    <nav>
      <ul>
        <li><a href="voir.php">voir petition	</a></li>
        <li><a href="register.php">cree un compte</a></li>
        <li> <a href="login.php">se connecter</a></li>
      </ul>
    </nav>
  </header>
<div class="contact" >
<form action="test_log.php" >
	<h2>LOGIN</h2>
	<div class="inputbox">
	<input id="mail" required="required" type="text" name="T1" size="20" onkeyup="ValidateEmail()" autocomplete="off">
	<span>E-MAIL</span>
	<span id="msg" class="msgs"></span>
	</div>
	<br><div class="inputbox">
	<input required="required" type="password" name="T2" size="20">
	<span>PASSWORD</span></div>
	<br>
	<button>Send</button>
</form>
</div>
</div>
<footer>
	<div class="copyright">&copy;2022- <strong>Sarra Aloui & Youssef mahfoudhi</strong></div>
</footer>
</body>
</html>