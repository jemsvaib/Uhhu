<?php

try{
  $dbconnection = new PDO('sqlite:vhs.db');
  
  $result = $dbconnection->query("SELECT nachname FROM vhs_teilnehmer");
  
  foreach($result as $row){
    print $row['nachname'] . "\n";
  }
  
}
catch (Exception $e){
  echo 'Caught expression: ' . $e->getMessage() . "\n";
}

?>