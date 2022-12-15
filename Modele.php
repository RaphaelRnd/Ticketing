<?php

// Renvoie la liste de tous les billets, triés par identifiant décroissant
function getTicket() {
  $bdd = new PDO('mysql:host=localhost;dbname=Ticketing;charset=utf8', 'administrateur', 'simone');
  $tickets = $bdd->query('select * from T_TICKET LEFT JOIN T_ETAT ON T_TICKET.TIC_ID = 
  T_ETAT.id order by TIC_ID desc');
  return $tickets;
}

// Effectue la connexion à la BDD
// Instancie et renvoie l'objet PDO associé
function getBdd() {
  $bdd = new PDO('mysql:host=localhost;dbname=Ticketing;charset=utf8', 'adminisitrateur', 'simone', 
  array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));;
  return $bdd;
}