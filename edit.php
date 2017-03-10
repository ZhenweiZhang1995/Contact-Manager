<?php

  include 'header.php';
  $id = $_GET['id'];

  $stmt = $db->prepare('SELECT * from contacts WHERE id = :id LIMIT 1');
  $stmt->bindParam(':id', $id);
  $stmt->execute();

  $contact = $stmt->fetch(PDO::FETCH_ASSOC);

?>

<?php if (array_key_exists('updated', $_GET)) : ?>
<div class="notification is-success">
  <p><strong class ="is-white">Update successful!</strong> Your contact was updated.</p>
</div>
<?php endif; ?>

<?php if (array_key_exists('created', $_GET)) : ?>
<div class="notification is-success">
  <p><strong class ="is-white">Contact created!</strong> Your contact was successfully created.</p>
</div>
<?php endif; ?>

<!-- <a href="/delete.php?id=<?= $contact['id']; ?>" class="btn btn-danger btn-xs pull-right btn-delete">Delete Contact</a> -->

<a href="/delete.php?id=<?= $contact['id']; ?>" class="button is-danger is-outlined is-pulled-right nounderline" >
    <span>Delete Contact</span>
    <span class="icon is-small">
      <i class="fa fa-times"></i>
    </span>
</a>



<h1 class ="title">Edit Contact</h1>


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

  <!-- <div class="checkbox">
    <label>
      <input type="checkbox" name="completed" value="1"<?= ($task['completed'] == 1) ? ' checked' : ''; ?>> Completed
    </label>
  </div> -->

  <button class="btn btn-primary">Save Contact</button>
</form>

<?php include 'footer.php'; ?>
