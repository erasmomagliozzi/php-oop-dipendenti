<?php
 require_once __DIR__ . '/classes/Dipendenti.php';

 $director = new Dirigente('06','Mario','De Angelis','Gaeta','05/09/1999','Gaeta');

 var_dump($director);

 try {
   $director->setBonus(5)
 } catch (Exception $e) {
   echo 'errore' . $e->getMessage();
 }
 var_dump($director);
