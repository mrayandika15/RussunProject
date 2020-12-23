
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Jekyll v4.1.1">
    <title>Starter Template · Bootstrap</title>

    <!-- Bootstrap core CSS -->

<script src="<?= base_url('js/jquery-3.5.1.min.js') ?>"></script>

<link href="<?= base_url('vendor/bootstrap/css/bootstrap.css') ?>" rel="stylesheet">
<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    
    
  </head>
  <body>

  <?= $this->include('navbar_view') ?>
    
<main role="main" class="container">

<?= $this->renderSection('content') ?>




</main>

<?= $this->renderSection('script') ?>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</html>
