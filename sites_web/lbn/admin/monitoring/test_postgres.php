<?php
/*
TODO : voir le TODO present dans le test_mysql
*/
// Connexion, s�lection de la base de donn�es
$dbconn = pg_connect("host=dial-bdd1 dbname=maf user=postgres password=foo")
   or die('Connexion impossible : ' . pg_last_error());
 
 
// Ex�cution de la requ�te SQL
$query = 'SELECT count(*) FROM login';
$result = pg_query($query) or die('�chec requ�te : ' . pg_last_error());
 
// Lib�re le resultset
pg_free_result($result);
 
// Ferme la connexion
pg_close($dbconn);
echo "REPONSE_CORRECTE";
?>
