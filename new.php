<?php  include 'header.php';?>

<h1 class="title">Create Contact</h1>

<!-- Get new data from user input and post through create.php -->
<form method="POST" action="/create.php">

  <div class="form-group">
    <label for="first_name">First Name</label>
    <input class="form-control" type="text" name="first_name" id="first_name" value="" placeholder="First Name" />
  </div>

  <div class="form-group">
    <label for="last_name">Last Name</label>
    <input class="form-control" type="text" name="last_name" id="last_name" value="" placeholder="Last Name" />
  </div>

  <div class="form-group">
    <label for="titile">Title</label>
    <select name="title" id="title" value="Mr." class="form-control">
      <option value="Mr." selected>Mr.</option>
      <option value="Mrs.">Mrs.</option>
      <option value="Miss">Miss</option>
    </select>
  </div>

  <!-- <div class="form-group">
    <label for="address">Address</label>
    <input class="form-control" type="text" name="address" id="address" value="" placeholder="Address" />
  </div> -->

  <div class="form-group">
    <label for="address">Address</label>
    <textarea class="form-control" name="address" id="address" placeholder="Enter your address"></textarea>
  </div>

  <div class="form-group">
    <label for="city">City</label>
    <input class="form-control" type="text" name="city" id="city" value="" placeholder="City" />
  </div>

  <div class="form-group">
    <label for="state">State</label>
    <input class="form-control" type="text" name="state" id="state" value="" placeholder="State" />
  </div>

  <div class="form-group">
    <label for="zip">Zip Code</label>
    <input class="form-control" type="text" name="zip" id="zip" value="" placeholder="Zip Code" />
  </div>

  <div class="form-group">
    <label for="phone">Phone Number</label>
    <input class="form-control" type="text" name="phone" id="phone" value="" placeholder="Phone" />
  </div>

  <div class="form-group">
    <label for="notes">Notes</label>
    <textarea class="form-control" name="notes" id="notes" placeholder="Enter notes if you have"></textarea>
  </div>

  <button class="button is-info is-medium">Create New Contact</button>
</form>

<?php include 'footer.php'; ?>
