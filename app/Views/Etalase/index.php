
<?= $this->extend('layout_view_not') ?>
<?= $this->section('content') ?>

<?php 
	$session = session();
	
	if (session()->getFlashdata('pesan')){
		echo '<div class="alert alert-dark fixed-top" role="alert">';
		echo session()->getFlashdata('pesan');
		echo '</div>';
	}

	
?>
<div class="container-fluid">
    <div class="row">
      <div class="col-md-2">
        <aside class="d-flex flex-column">
          <div class="categories d-flex flex-column ">
          <p class="text-bold">CATEGORIES</p>
           <a href="">Basic Tee</a>
           <a href="">Oversize Tee</a>
          </div>

          <div class="filter flex-column d-flex  ">
              <p class="filter-text">Filter</p>
              <a href="">SIZE</a>
              <a href="">PRICE</a>
              <a href="">COLOR</a>
              <a href="">FABRIC</a>
          </div>

          <div class="sort">
              <a href="">SORT</a>
              <a href="">NEWEST</a>
          </div>
          
      </aside>
      </div>





 
	<div class="col-10">
        <div class="russun-etalase-content d-flex  flex-row align-content-start">
     
		<?php foreach($model as $m => $value): ?>
 <?php 
	echo form_open('home/add');
	echo form_hidden('id',$value->id);
	echo form_hidden('price', $value->harga);
	echo form_hidden('name', $value->nama);


	echo form_hidden('gambar', $value->gambar);
	echo form_hidden('stok', $value->stok);

	?>
          <div class="product d-flex">
			    <a href="<?= site_url('etalase/beli/'.$value->id)?>">
            <img src="<?= base_url('uploads/'.$value->gambar) ?>" alt="">
			</a>
			
		  </div>
		  <div class="text-etalse-fixed">
		  <p class="bold"><?= $value->nama ?></p>
		  <p class="text-kecil"><?= number_to_currency($value->harga , 'IDR' ); ?></p>
		  </div>	
		  <?php 
	echo form_close();
	?>
		
		<?php endforeach ?>
         </div>
          
          </div>
    </div>
  </div>

	
	













<?= $this->endSection() ?>