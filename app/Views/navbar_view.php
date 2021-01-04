<?php
$session = session();
?>

<?php 
$keranjang = $cart->contents(); 
$jml_item = 0;
foreach($keranjang as $key => $value){
  $jml_item = $jml_item + $value['qty'];
}
?>

<nav class="navbar navbar-expand-lg navbar-light nav-russun fixed-top">
  <a class="navbar-brand" href="<?= site_url('home/index') ?>"><img src="<?= base_url('asset/logo.png') ?>" alt=""></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav"
    aria-expanded="false" aria-label="Toggle navigation">
    <div class="dropdown-russun">
    </div>
  </button>
  <div class="collapse navbar-collapse" id="navbarNav">
    <ul class="navbar-nav">

      <li class="nav-item">
        <a class="nav-link" href="#">New Arival</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('etalase/index') ?>">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">About Us</a>
      </li>
    </ul>
    <?php if($session->get('isLoggedIn')): ?>


    <ul class="navbar-nav ml-auto">

      <li class="nav-item">
        <a class="nav-link" href="#">search</a>
      </li>

      <li class="nav-item">
        <a class="nav-link" href="#" id="russun-bag">Bag(<?= $jml_item ?>) </a>
      </li>

      
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('Auth/logout') ?>">Logout</a>
      </li>

      <?php else: ?>
        <ul class="navbar-nav ml-auto">

    <li class="nav-item">
     <a class="nav-link" href="#">search</a>
    </li>

     <li class="nav-item">
   <a class="nav-link" href="#" id="russun-bag">Bag(<?= $jml_item ?>) </a>
    </li>


        <li class="nav-item">
        <a class="nav-link" href="<?= site_url('Auth/Login') ?>">Sign in</a>
      </li>

      <?php endif ?>

      
    </ul>

  </div>
</nav>


<div class="bag-russun">
  <div class="bag-container">
    <div class="bag">
      <p>Bag(<?= $jml_item ?>)</p>
      <button type="button" class="btn-close btn-close-russun" aria-label="Close"></button>
    </div>
<?php 
  if(empty($keranjang)){ ?>
    <h1>Empty Bag</h1>
<?php } else { ?>
  <div class="total">
      <p class="bold">TOTAL : <?= number_to_currency($cart->total() , 'IDR' ); ?></p>
    </div>
  </div>
 
  <div class="container-button-model">
    <div class="button-russun">
    <a href="<?= base_url('home/cart') ?>">
        <button type="button" class="btn btn-outline-success">VIEW BAG</button>    
    </a>
    <a href="">
      <button type="button" class="btn btn-outline-success button-russun-checkout">CHECKOUT</button>
    </a>
    </div>
    <?php foreach($keranjang as $key => $value){ ?>
      

      
      
  <?php } ?>
    
  
  
<?php } ?>


    
</div>
</div>


<script>
  const bag = document.querySelector('#russun-bag');
  const bagClick = document.querySelector('.bag-russun');
  const bagClose = document.querySelector('.btn-close-russun')
  bag.addEventListener('click' , function(){
    bagClick.classList.add('bag-click');
  });
  bagClose.addEventListener('click' , function(){
    bagClick.classList.remove('bag-click');
  });
</script>