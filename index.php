<?php include 'header.php';
  // get data from database and name it contacts
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
?>

<!-- check if an array was just deleted, if so, show up a notification -->
<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="notification is-danger">
  <p><strong class ="is-white">Contact Deleted!</strong> The contact was removed.</p>
</div>
<?php endif; ?>

<h1 class = "title">All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>

<!-- creat the table -->
<div class="contact-form" style="overflow-x:auto;">
<table class="table table-responsive table-hover">
  <thead>
    <th>ID</th>
    <th>Name</th>
    <th> </th>
    <th>Address</th>
    <th>City</th>
    <th>State</th>
    <th>Zip</th>
    <th>phone</th>
    <th>Notes</th>
  </thead>
  <tbody>

    <!-- Use loop to dynamically add contact data to table row -->
    <?php foreach($contacts as $contact) : ?>
    <tr>

      <td><?= $contact['id']; ?></td>
      <td><?= $contact['first_name']; ?></td>
      <td><?= $contact['last_name']; ?></td>
      <td><?= $contact['address']; ?></td>
      <td><?= $contact['city']; ?></td>
      <td><?= $contact['state']; ?></td>
      <td><?= $contact['zip']; ?></td>
      <td><?= $contact['phone']; ?></td>
      <td><?= $contact['notes']; ?></td>

      <!-- button for edit -->
      <td class = "withoutBorder">
        <button type="button" class="button is-info "><a href="/edit.php?id=<?= $contact['id']; ?>" class ="nounderline white"><i class="fa fa-wrench" aria-hidden="true"></i></a></button>
      </td>

      <!-- button for delete -->
      <td class = "withoutBorder">
        <button type="button" class="button is-danger red"><a href="/delete.php?id=<?= $contact['id']; ?>" class ="nounderline white"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
      </td>

    <!-- end of loop -->
    <?php endforeach; ?>
  </tbody>
</table>
</div>


<?php include 'footer.php'; ?>
