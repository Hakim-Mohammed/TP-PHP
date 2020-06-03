<!-- Exercice 3 : SQL Requêtes SQL Afficher les résultats d’une requête qui permet de mettre en capitales le champ ‘nom’ d’une table jeux_vidéo, développer le fichier games.php. -->

<?php
$reponse = $bdd->query('SELECT UPPER(nom) AS nom_maj FROM jeux_video');

while ($donnees = $reponse->fetch())
{
	echo $donnees['nom_maj'] . '<br />';
}

$reponse->closeCursor();

?>