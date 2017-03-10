<?php
include 'database.php';
?>

<!-- header part, show up on every page -->
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Contact Manager</title>
    <!-- charset -->
    <meta charset="utf-8">

    <!-- responsive -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- bootstrap -->
    <!-- bulma -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Tangerine">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <section class="hero is-info is-small">

  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item nounderline" href="/index.php"><strong class = "main-icon">Contact Manager</strong></a>
        </div>
        <label class="nav-toggle" for="nav-toggle-state">
          <span></span>
          <span></span>
          <span></span>
        </label>

        <!-- This checkbox is hidden -->
        <input type="checkbox" id="nav-toggle-state" />

        <div class="nav-right nav-menu">

          <span class="nav-item">
            <a class="button is-info is-inverted is-outlined nounderline" href="/index.php">
              <span>All Contacts</span>
            </a>
          </span>

          <span class="nav-item">
            <a class="button is-info is-inverted is-outlined nounderline" href="/new.php">
              <span>New Contacts</span>
            </a>
          </span>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title maintitle Prociono">
        Contact Manager
      </h1>

      <h2 class="subtitle Prociono">
        Useful tool to Edit and Creat your contacts
      </h2>
    </div>
  </div>

</section>

    <div class="container">

      <div class="row">

        <div class="col-md-10 col-md-offset-1">
