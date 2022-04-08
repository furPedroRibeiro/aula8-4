<?php
	session_start();
	$resposta = $_SESSION['resposta'];
	echo "Resposta correta: 0 <br> Sua resposta: ".$resposta;
?>