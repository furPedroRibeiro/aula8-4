<!DOCTYPE html>
<html>
<head>
	<title>Larissalinda</title>
</head>
<body>
   <form method="POST">
   	Quanto é (3.4³+5-2).0?
   	<input type="number" name="arespostacorreta">
   	<button>Responder</button>
   </form>
   <?php
   $cookie = $_COOKIE['optanonConsent'];
     if($cookie){
     	if($_POST){
     		session_start();
     		$_SESSION['resposta'] = $_POST['arespostacorreta'];
       		header('location: page3.php');
     	}
     }
     else{
     	header('location: index.php');
     }

   ?>

</body>
</html>

