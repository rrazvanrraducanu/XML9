<?php
$xml=simplexml_load_file("data.xml") or die("Error: Cannot create object");

foreach($xml->children() as $data) {
if(($_POST['nume']==$data->nume) && ($_POST['parola']==$data->parola)){
    
  echo "Welcome ".$data->nume."!";
  exit();
}
}
foreach($xml->children() as $data) {
if(($_POST['nume']!=$data->nume) || ($_POST['parola']!=$data->parola)){
    
  header('location:pagina3.php');
}
}
?> 
