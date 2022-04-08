
<!DOCTYPE html>
<html>
<head>
	<title>Beazikaesteveaqui</title>
</head>
<body>

 <form method="POST">
 	Digite seu nome:<input type="text" name="nome">
 	<button>entrar</button>
 </form>

<?php
 if ($_POST) {
 	setcookie('optanonConsent','Consent', time()+30);
 	header('location: page2.php');
 }
?>
</body>
</html>