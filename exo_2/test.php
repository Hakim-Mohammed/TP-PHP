<!-- Exercice 2 : PDO Se connecter à MySQL avec PDO, développer le fichier test.php. -->

<!-- connection a MySQL avec PDO  sans la présence d'erreur : -->
<?php

	$pdo = new PDO 	('mysql:host=localhost;dbname=test;charset=UTF8','root','',);
	
?>

<!-- connection a MySQL avec PDO avec la présence d'erreur :  -->
<?php
try
{
	$bdd = new PDO('mysql:host=localhost;dbname=test;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
