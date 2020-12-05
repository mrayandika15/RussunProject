
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
<link href="<?= base_url('css/bootstrap.min.css') ?>" rel="stylesheet">

<script src="<?= base_url('js/jquery-3.5.1.min.js') ?>"></script>


<meta name="msapplication-config" content="/docs/4.5/assets/img/favicons/browserconfig.xml">
<meta name="theme-color" content="#563d7c">


    <style>


body {
  padding-top: 5rem;
}
.starter-template {
  padding: 3rem 1.5rem;
  text-align: center;
}
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
    
    
  </head>
  <body>

  <?= $this->include('navbar_view') ?>
    
<main role="main" class="container">

<?= $this->renderSection('content') ?>


  

</main>
<script src="<?= base_url('js/bootstrap.bundle.min.js') ?>"></script>
</html>
