<?php

require 'Modele.php';

try {
  $tickets = getTicket();
  require 'vueAccueil.php';
}
catch (Exception $e) {
  $msgErreur = $e->getMessage();
  require 'vueErreur.php';
}