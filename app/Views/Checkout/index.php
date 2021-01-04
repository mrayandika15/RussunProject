<?= $this->extend('layout_view_not') ?>
<?= $this->section('content') ?>

<?php 
$keranjang = $cart->contents(); 
$jml_item = 0;
foreach($keranjang as $key => $value){
  $jml_item = $jml_item + $value['qty'];
}
if (session()->getFlashdata('pesan')){
    echo '<div class="alert alert-dark fixed-top" role="alert">';
    echo session()->getFlashdata('pesan');
    echo '</div>';
}
?>

<?php echo form_open('home/add') ?>

<div class="main-view justify-content-center d-flex align-items-center flex-column">
    <div class="content-main d-flex flex-column">
        <div class="bag-text d-flex">
            <h3>BAG</h3>
            <p>Item</p>
        </div>

        <?php 
    foreach($cart->contents() as $key => $value){   ?>

        <div class="container-model d-flex">
            <div class="model-image">
                <img src="<?= base_url('uploads/'.$value['options']['gambar']) ?>" alt="">
            </div>
            <div class="text-desc">
                <p><?= $value['name'] ?></p>
                <p><?= number_to_currency($value['price'] , 'IDR' ); ?>

                <p>Quantity :  <?= $jml_item ?></p>
            </div>
        </div>
        <div class="remove-russun">
            
            <a href="<?= base_url('home/delete/' .$value['rowid']) ?>">

                <button type="button" class="btn-close btn-close-white btn-russun-remove" aria-label="Close"><p>REMOVE</p></button>
            </a>
        </div>

        <?php } ?>


    </div>
    <div class="total">
        <h4>Total  <?= number_to_currency($cart->total() , 'IDR' ); ?> </h4>
    </div>
    <div class="button-container">
        <a href="<?= site_url('etalase/proceed') ?>">
            <button type="button" class="btn btn-primary btn-lg button-russun-check">PROCEED TO CHECKOUT</button>
        </a>
    </div>

</div>

<?php echo form_close() ?>

<?= $this->endSection() ?>