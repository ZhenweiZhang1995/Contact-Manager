<?php

  // save new data into database
  include 'database.php';

  $stmt = $db->prepare("INSERT INTO contacts
    (first_name, last_name, title, address, city, state, zip, phone, notes)
    VALUES
    (:first_name, :last_name, :title, :address, :city, :state, :zip, :phone, :notes)
  ");

  $stmt->execute(array(
    ':first_name' => $_POST['first_name'],
    ':last_name' => $_POST['last_name'],
    ':title' => $_POST['title'],
    ':address' => $_POST['address'],
    ':city' => $_POST['city'],
    ':state' => $_POST['state'],
    ':zip' => $_POST['zip'],
    ':phone' => $_POST['phone'],
    ':notes' => $_POST['notes']
    // ':completed' => array_key_exists('completed', $_POST) ? $_POST['completed'] : 0
  ));

  $id = $db->lastInsertId();

  header('Location: http://localhost:8888/edit.php?id=' . $id . '&created=true');
?>
