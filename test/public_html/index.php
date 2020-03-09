<h1>Hello Cloudreach!</h1>
<h4>Attempting MySQL connection from php...</h4>
<?php
$host = 'db';
$db = 'electroshop';
$user = 'root';
$pass = 'root';
//$conn = new mysqli($host, $user, $pass);
//$conn = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);


	try{
		$bdd = new PDO('mysql:host='.$host.';dbname='.$db.';charset=utf8',$user,$pass);
	}
	catch (Exception $e){
		die('Erreur : ' . $e->getMessage());
	}

?>