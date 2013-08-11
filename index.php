<?php
require_once('config.php');

$sitename = $sql->query("SELECT * FROM config WHERE var = 'sitename'");
$sitename->setFetchMode(PDO::FETCH_OBJ);

while( $enregistrement = $sitename->fetch() )
{
  echo $enregistrement->value;
}

echo '<br />Version: '.$version;
?>