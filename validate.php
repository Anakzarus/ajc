<?php
	if(isset($_GET['username']) && isset($_GET['password'])){
		$login = array();
		$login['username'] = $_GET['username'];
		$login['password'] = md5($_GET['password']);
		$arq = fopen('logins.json', 'w');
		fwrite($arq, json_encode($login));
		fclose($arq);
	}
?>