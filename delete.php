<?php

  include 'database.php';
  // delete data by selecting the corresponding id

  $stmt = $db->prepare('DELETE from contacts WHERE id = :id');
  $stmt->execute(array(
    ':id' => $_GET['id']
  ));

  header('Location: http://localhost:8888/index.php?deleted=true');

?>
