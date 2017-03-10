<?php include 'header.php';
  $contacts = $db->query('SELECT * FROM contacts')->fetchAll(PDO::FETCH_ASSOC);
?>

<?php if (array_key_exists('deleted', $_GET)) : ?>
<div class="alert alert-danger">
  <p><strong>Contact Deleted!</strong> The contact was removed.</p>
</div>
<?php endif; ?>

<h1 class = "title">All Contacts <span class="text-muted">(<?= count($contacts); ?>)</span></h1>

<table class="table table-hover">
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

      <td class = "withoutBorder">
        <button type="button" class="button is-info "><a href="/edit.php?id=<?= $contact['id']; ?>" class ="nounderline white"><i class="fa fa-wrench" aria-hidden="true"></i></a></button>

      </td>

      <!-- <td class = "withoutBorder">
        <button type="button" class="btn btn-danger "><a href="/delete.php?id=<?= $contact['id']; ?>">Delete</a></button>
      </td> -->

      <td class = "withoutBorder">
        <button type="button" class="button is-danger red"><a href="/delete.php?id=<?= $contact['id']; ?>" class ="nounderline white"><i class="fa fa-trash" aria-hidden="true"></i></a></button>
      </td>
      <!-- <td><a href="/edit.php?id=<?= $contact['id']; ?>"><?= ($contact['completed'] == 1) ? '&check;' : ''; ?></a></td>
    </tr> -->
    <?php endforeach; ?>
  </tbody>
</table>


<?php include 'footer.php'; ?>
