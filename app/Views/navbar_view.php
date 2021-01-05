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


<?php
	$username = [
		'name' => 'username',
		'id' => 'username',
		'value' => null,
		'class' => 'form-russun'
	];

		$password = [
		'name' => 'password',
		'id' => 'password',
		'class' => 'form-russun'
	];


  $username = [
    'name' => 'username',
    'id' => 'username',
    'value' => null,
    'class' => 'input--style-3'
  ];

  $password = [
    'name' => 'password',
    'id' => 'password',
    'class' => 'input--style-3'
  ];

  $repeatPassword = [
    'name' => 'repeatPassword',
    'id' => 'repeatPassword',
    'class' => 'input--style-3'
  ];

	$session = session();
	$errors = $session->getFlashdata('errors');

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
        <a class="nav-link" href="<?= site_url('etalase/index') ?>">New Arival</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('etalase/index') ?>">Shop</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('home/aboutus') ?>">About Us</a>
      </li>
    </ul>
    <?php if($session->get('isLoggedIn')): ?>


    <ul class="navbar-nav ml-auto">

     

      <li class="nav-item">
        <a class="nav-link" href="#" id="russun-bag">Bag(<?= $jml_item ?>) </a>
      </li>


      <li class="nav-item">
        <a class="nav-link" href="<?= site_url('Auth/logout') ?>">Logout</a>
      </li>

      <?php else: ?>
      <ul class="navbar-nav ml-auto">

      

        <li class="nav-item">
          <a class="nav-link" href="#" id="russun-bag">Bag(<?= $jml_item ?>) </a>
        </li>


        <li class="nav-item">
          <a class="nav-link" href="#" id="russun-login">Sign in</a>
        </li>

        <?php endif ?>


      </ul>

  </div>
</nav>



<?php if($errors != null): ?>
<div class="login-modal-russun clicked-login">
  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">WRONG PASSWORD</h4>
    <hr>
    <p class="mb-0">
    </p>
  </div>
  <div class="top-login">
    <h4>SIGN-IN</h4>
    <button type="button" class="btn-close btn-close-login btn-close-russun" aria-label="Close"></button>
  </div>
  <?= form_open('Auth/login') ?>
  <div class="text-center">
    <div class="form-group-russun">
      <input name="username" id="username" value="" class="form-russun" placeholder="Username">
    </div>
    <div class="form-group-russun">
      <input type="password" name="password"  id="password" class="form-russun" placeholder="Password">
    </div>
  </div>
  <div class="form-check form-russun-check">
    <input type="checkbox" class="form-check-input formCheckRussun">
    <label class="form-check-label">Remember me</label>
  </div>
  <div class="text-center">
    <?= form_submit('submit', 'Sign-in',['class'=>'btn btn-primary russun-button-login']) ?>
  </div>
  <a href="#" class="link-russun-login">
    <p>DONT HAVE ANY ACCOUNT?</p>
  </a>
  <?= form_close() ?>

</div>

<?php else: ?>
<div class="login-modal-russun">
  <div class="top-login">
    <h4>SIGN-IN</h4>
    <button type="button" class="btn-close btn-close-login btn-close-russun" aria-label="Close"></button>
  </div>
  <?= form_open('Auth/login') ?>
  <div class="text-center">
    <div class="form-group-russun">
      <input name="username" id="username" value="" class="form-russun" placeholder="Username">
    </div>
    <div class="form-group-russun">
      <input type="password" name="password" id="password" class="form-russun" placeholder="Password">
    </div>
  </div>
  <div class="form-check form-russun-check">
    <input type="checkbox" class="form-check-input formCheckRussun">
    <label class="form-check-label">Remember me</label>
  </div>
  <div class="text-center">
    <?= form_submit('submit', 'Sign-in',['class'=>'btn btn-primary russun-button-login']) ?>
  </div>
  <a href="#" class="link-russun-login">
    <p>DONT HAVE ANY ACCOUNT?</p>
  </a>
  <?= form_close() ?>

</div>
<?php endif ?>


<div class="register-modal-russun">
  <?php if($errors != null): ?>

  <div class="alert alert-danger" role="alert">
    <h4 class="alert-heading">Terjadi Kesalahan</h4>
    <hr>
    <p class="mb-0">
      <?php
            foreach($errors as $err){
              echo $err.'<br>';
            }
          ?>
    </p>
  </div>
  <?php endif ?>
  <?= form_open('Auth/register') ?>
  <div class="top-login">
    <h4>CREATE ACCOUNT</h4>
    <button type="button" class="btn-close btn-close-register btn-close-russun" aria-label="Close"></button>
  </div>
  <div class="text-center">
    <div class="form-group-russun">
      <input name="username" id="username" value="" class="form-russun" placeholder="Username">
    </div>
    <div class="form-group-russun">
      <input type="password" name="password" id="password" class="form-russun" placeholder="Password">
    </div>
    <div class="form-group-russun">
      <input type="password" name="repeatPassword" id="repeatPassword" class="form-russun" placeholder="Repeat Password">
    </div>
  </div>
  <div class="text-center">
    <?= form_submit('submit', 'SIGN UP',['class'=>'btn btn-primary russun-button-login russun-button-register']) ?>
  </div>
  <a href="#" class="link-russun-login link-russun-register">
    <p>I HAVE AN ACCOUNT</p>
  </a>
  <?= form_close() ?>
</div>











<div class="bag-russun">
  <div class="bag-container">
    <div class="bag">
      <p>Bag(<?= $jml_item ?>)</p>
      <button type="button" class="btn-close btn-close-russun btn-close-bag" aria-label="Close"></button>
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
      <a href="<?= site_url('etalase/proceed') ?>">
        <button type="button" class="btn btn-outline-success button-russun-checkout">CHECKOUT</button>
      </a>
    </div>
    <?php foreach($keranjang as $key => $value){ ?>

    <div class="model-container-bag">
      <div class="button-remove-item d-flex">
        <a href="<?= base_url('home/delete/' .$value['rowid']) ?>">
          <button type="button" class="btn-close btn-close-russun" aria-label="Close"></button>
          REMOVE
        </a>
      </div>
      <div class="model-image-text-container">
        <img src="<?= base_url('uploads/'.$value['options']['gambar']) ?>" alt="">
        <div class="text-bag">
          <p><?= $value['name']  ?></p>
          <p>QUANTITY :<?= $value['qty']  ?></p>
          <p><?= number_to_currency($value['price'] , 'IDR' ); ?></p>
        </div>
      </div>
    </div>


    <?php } ?>



    <?php } ?>




  </div>
</div>


<script>
  const bag = document.querySelector('#russun-bag');
  const bagClick = document.querySelector('.bag-russun');
  const bagClose = document.querySelector('.btn-close-bag')
  const login = document.querySelector('#russun-login');
  const loginClick = document.querySelector('.login-modal-russun');
  const loginClose = document.querySelector('.btn-close-login');
  const register = document.querySelector('.link-russun-login');
  const registerClick = document.querySelector('.register-modal-russun');
  const registerRemove = document.querySelector('.btn-close-register');
  const Haveaccount = document.querySelector('.link-russun-register');
  bag.addEventListener('click', function () {
    bagClick.classList.toggle('bag-click');
   
  });
  bagClose.addEventListener('click', function () {
    bagClick.classList.remove('bag-click');
  });
  login.addEventListener('click', function () {
    loginClick.classList.toggle('clicked-login');
    registerClick.classList.remove('clicked-register');
  });

  loginClose.addEventListener('click', function () {
    loginClick.classList.remove('clicked-login');
  });
  register.addEventListener('click' , function(){
    registerClick.classList.add('clicked-register');
    loginClick.classList.remove('clicked-login');
  });
  registerRemove.addEventListener('click' , function(){
    registerClick.classList.remove('clicked-register');
    loginClick.classList.remove('clicked-login');
  });
  Haveaccount.addEventListener('click' , function(){
    registerClick.classList.remove('clicked-register');
    loginClick.classList.add('clicked-login');
  });

</script>