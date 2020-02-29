<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <!-- CSS -->
    <title><?php echo $judul; ?></title>
  </head>
  <style media="screen">
    a{
      color:#fff;
    }
  </style>
  <body>
    <nav class="navbar navbar-expand-lg bg-primary">
      <div class="container">
        <a class="navbar-brand" href="<?= base_url(); ?>">CodeIgniter-Inponow</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
          <div class="navbar-nav">
            <a class="nav-item nav-link active" href="<?= base_url(); ?>">Home <span class="sr-only">(current)</span></a>
            <a class="nav-item nav-link" href="<?php echo base_url('tampildata'); ?>">Data</a>
            <a class="nav-item nav-link" href="<?php echo base_url('tampildata'); ?>">About</a>
          </div>
        </div>
      </div>
    </nav>
