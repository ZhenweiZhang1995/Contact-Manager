<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<!-- check if an array was just updated, if so, show up a notification -->
<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="notification is-warning">
  <p><strong>Contact updated! </strong> Old data has been overridden.</p>
</div>
<?php endif; ?>

<!-- check if an array was just created, if so, show up a notification -->
<?php if (array_key_exists('created', $_GET)) : ?>
<div class="notification is-success">
  <p><strong class ="is-white">Contact created!</strong> Your contact was successfully created.</p>
</div>
<?php endif; ?>

<!-- <a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a> -->

<!-- delete contact button -->
<a href="/delete.php?id=<?= $contact['id']; ?>" class="button is-danger is-outlined is-pulled-right nounderline" >
    <span>Delete Contact</span>
    <span class="icon is-small">
      <i class="fa fa-times"></i>
    </span>
</a>



<h1 class ="title">Edit Contact</h1>

<!-- Get data from user input and post it using update.php -->
<form method="POST" action="/update.php">
  <input type="hidden" name="id" id="contact_id" value="<?= $contact['id']; ?>" />

  <div class="form-group">
    <label for="first_name">First Name</label>
    <input class="form-control" type="text" name="first_name" id="first_name" value="<?= $contact['first_name']; ?>" />
  </div>

  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input class="form-control" type="text" name="last_name" id="last_name" value="<?= $contact['last_name']; ?>" />
  </div>

  <div class="form-group">
    <label for="title">Title</label>
    <select name="title" id="title" value="<?= $contact['title']; ?>" class="form-control">
      <option value="Mr."<?= ($contact['title'] == "Mr.") ? ' selected' : '' ?>>Mr.</option>
      <option value="Mrs."<?= ($contact['title'] == "Mrs.") ? ' selected' : '' ?>>Mrs.</option>
      <option value="Miss"<?= ($contact['title'] == "Miss") ? ' selected' : '' ?>>Miss</option>
    </select>
  </div>

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address"><?= $contact['address']; ?></textarea>
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input class="form-control" type="text" name="city" id="city" value="<?= $contact['city']; ?>" />
  </div>

  <div class="form-group">
    <label for="state">State</label>
    <input class="form-control" type="text" name="state" id="state" value="<?= $contact['state']; ?>" />
  </div>

  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="zip" value="<?= $contact['zip']; ?>" />
  </div>

  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="phone" value="<?= $contact['phone']; ?>" />
  </div>

  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes"><?= $contact['notes']; ?></textarea>
  </div>


  <button class="button is-info is-medium">Save Contact</button>
</form>

<?php include 'footer.php'; ?>
