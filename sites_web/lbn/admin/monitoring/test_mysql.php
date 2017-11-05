<html>
 <head>
  <title>test mysql</title>
 </head>
 <body>
  <?php
  /*
  TODO: modifier pour que meme si le code s'affiche le mot
  cle ne puisse pas etre trouver. Le mot cle doit etre dans
  la base et pas dans la page, ce qui serait bien aussi avec
  le mdp si php n'est plus interprete
  $lbn_username = 'lbn_monitoring';
  */
  $lbn_username = 'lbn_monit_user';
  $lbn_password = 'lbn_monit_pass@2012';
  $lbn_host = 'sql-master';
  echo ('<table border=1><tr><th>function</th><th>error message');
  echo ('</th></tr><tr><td>mysql_connect</td><td>');
  $lbn_connexion = mysql_connect($lbn_host,$lbn_username,$lbn_password); echo (mysql_error());
  echo ('</td></tr><tr><td>mysql_select_db</td><td>');
  $lbn_database = mysql_select_db("mysql"); echo (mysql_error());
  echo ('</td></tr><tr><td>mysql_query</td><td>');
  $lbn_query = mysql_query('SELECT count(*) from user'); echo (mysql_error());
  echo ('</td></tr><tr><td>mysql_num_rows</td><td>');
  $lbn_resultat = mysql_num_rows($lbn_query); echo (mysql_error());
  echo ('</td></tr></table>');
  if($lbn_resultat > '0') {
    echo "<H1>REPONSE CORRECTE</H1>";
  } else {
    echo "<H1>ERREUR</H1>";
  }
  mysql_close($lbn_connexion);
  ?>
 </body>
</html>
