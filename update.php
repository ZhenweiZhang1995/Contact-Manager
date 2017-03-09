<?php

include 'database.php';

$stmt = $db->prepare('UPDATE contacts SET first_name = :first_name, last_name = :last_name, title = :title, address = :address, city = :city, state = :state, zip = :zip, phone = :phone, notes = :notes WHERE id = :id');
//$stmt->bindParam
$stmt->execute(array(
  ':id' => $_POST['id'],
  ':first_name' => $_POST['first_name'],
  ':last_name' => $_POST['last_name'],
  ':title' => $_POST['title'],
  ':address' => $_POST['address'],
  ':city' => $_POST['city'],
  ':state' => $_POST['state'],
  ':zip' => $_POST['zip'],
  ':phone' => $_POST['phone'],
  ':notes' => $_POST['notes']
  // ':description' => $_POST['description'],
  // ':priority' => $_POST['priority'],
  // ':completed' => array_key_exists('completed', $_POST) ? $_POST['completed'] : 0
));

header('Location: http://localhost:8080/edit.php?updated=true&id=' . $_POST['id']);