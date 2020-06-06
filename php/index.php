<?php 
  $json = file_get_contents('en.json');
  $translation = json_decode($json, true);
  echo $translation['en']['hello'];
?>
