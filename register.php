<!DOCTYPE html>
<html lang="en">
<head>
	<script src="script.js" async ></script>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="style3.css">
	<title>Document</title>
</head>
<body class="cntct" id="reg" >
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
<div class="contact">
<form action="test_register.php">
	<h2>REGISTER</h2>
	<div class="inputbox">
	<input id="mail" required="required" type="text" name="T1" size="20"onkeyup="ValidateEmail()" autocomplete="off">
	<span>E-MAIL</span><span id="msg" class="msgs"></span></div>
	<br>

	
	<div class="inputbox">
	<input required="required" id="name" type="text" name="T2" size="20" onchange="verifname()">
	<span>FULL NAME</span><span id="msgn" class="msgs"></div>
	<br>

	<div class="inputbox" >
	<input id="pwd1" required="required" type="password" name="T3" size="20"onkeyup="pwdcheck()">
	<span>PASSWORD</span><span id="msgp" class="msgs"></div>
	<br>
	<div  class="inputbox">
	<input id="pwd2" required="required" type="password" name="T4" size="20" onkeyup ="verifpwd()">
	<span>RE-ENTER PASSWORD</span><span id="msgpwd" class="msgs"></div>
	<br>
	<div  class="inputbox">
	<br>Vous-etes?<br><br>	
      	Prof <input type="radio" name="r1" checked value="P"><br>
       	Personnel Asdministratif <input type="radio" value="A" name="r1"> 
        Etudiant <input type="radio" name="r1" value="E">
	</div>
	<br>
	ajoutez votre photo:
	   <div  class="inputbox"> 
		         <input class="file-upload-input" type="file" name="ph" onchange="readURL(this)" accept="Image/*"><br>
	<span>choose img </span><span id="msgpwd" class="msgs"></div>
	<button>Send</button>
</form>
</div>

</div>
<footer>
	<div class="copyright">&copy;2022- <strong>Sarra Aloui & Youssef mahfoudhi</strong></div>
</footer>
</body>
</html>