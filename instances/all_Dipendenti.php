<?php
  require_once __DIR__.'/all_Dipendenti/all_Lavapiatti/all_Lavapiatti.php';
  require_once __DIR__.'/all_Dipendenti/all_Camerieri/all_Camerieri.php';
  $all_Dipendenti = [
    $all_Lavapiatti,
    $all_Camerieri,
  ];
  var_dump($all_Dipendenti);
