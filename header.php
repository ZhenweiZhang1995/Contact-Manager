<?php
include 'database.php';
?>
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
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bulma/0.3.1/css/bulma.min.css">
    <link rel="stylesheet" href="/css/style.css">
  </head>
  <body>

    <section class="hero is-info is-small">
  <!-- Hero header: will stick at the top -->
  <div class="hero-head">
    <header class="nav">
      <div class="container">
        <div class="nav-left">
          <a class="nav-item" href="/index.php">Contact Manager</a>
        </div>
        <label class="nav-toggle" for="nav-toggle-state">
          <span></span>
          <span></span>
          <span></span>
        </label>

        <!-- This checkbox is hidden -->
        <input type="checkbox" id="nav-toggle-state" />

        <div class="nav-right nav-menu">

          <a class="nav-item" href="/index.php">All Contacts</a>
          <a class="nav-item" href="/new.php">New Contacts</a>
          <span class="nav-item">
            <a class="button is-primary is-inverted">
              <span class="icon">
                <i class="fa fa-github"></i>
              </span>
              <span>Download</span>
            </a>
          </span>
        </div>
      </div>
    </header>
  </div>

  <!-- Hero content: will be in the middle -->
  <div class="hero-body">
    <div class="container has-text-centered">
      <h1 class="title">
        Contact Manager
      </h1>

      <h2 class="subtitle">
        Useful tool to Edit and Creat your contacts
      </h2>
    </div>
  </div>

</section>

    <div class="container">




  <nav class="navbar navbar-default">
        <div class="container-fluid">


          <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="/index.php">Contact Manager</a>
          </div>



          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="/index.php">All Contacts</a></li>
              <li><a href="/new.php">New Contacts</a></li>
            </ul>
          </div>


        </div>
      </nav>


      <div class="row">

        <div class="col-md-10 col-md-offset-1">
