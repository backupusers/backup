<?php
/*
TODO : voir le TODO present dans le test_mysql
*/
// Connexion, sélection de la base de données
$dbconn = pg_connect("host=dial-bdd1 dbname=maf user=postgres password=foo")
   or die('Connexion impossible : ' . pg_last_error());
 
 
// Exécution de la requête SQL
$query = 'SELECT count(*) FROM login';
$result = pg_query($query) or die('Échec requête : ' . pg_last_error());
 
// Libère le resultset
pg_free_result($result);
 
// Ferme la connexion
pg_close($dbconn);
echo "REPONSE_CORRECTE";
?>
