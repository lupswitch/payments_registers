<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
  	<link rel="icon" href="assets/img/favicon.ico">
  	<link rel="stylesheet" href="<?= base_url('assets/plugins/bootstrap/css/bootstrap.min.css') ?>">
  </head>
  <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
      <a class="navbar-brand" href="/">Payments Notes</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">

        </ul>
      </div>
    </nav>

    <div class="container mt-5">

      <?php
        $this->load->view($view);
      ?>

      <script src="<?= base_url('assets/plugins/jquery.min.js') ?>"></script>
      <script src="<?= base_url('assets/plugins/popper.min.js') ?>"></script>
      <script src="<?= base_url('assets/plugins/bootstrap/js/bootstrap.min.js') ?>"></script>
      <script src="https://unpkg.com/vue"></script>
    </div>

  </body>
</html>
