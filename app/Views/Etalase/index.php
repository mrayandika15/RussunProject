
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
            <img src="<?= base_url('uploads/'.$value->gambar) ?>" alt="">
            <div class="hover-text d-flex flex-column">
               <div class="text-desc-russun bold">
                <p><?= $value->nama ?></p>
                <p><?= number_to_currency($value->harga , 'IDR' ); ?></p>
                <p>Stok : <?= $value->stok ?></p>
              </div>
              <button type="submit" class="btn btn-success btn-russun-etalase">Add To Basket</button>
            </div>
          </div>

		  <?php 
	echo form_close();
	?>
		
		<?php endforeach ?>
         </div>
          
          </div>
    </div>
  </div>

	
	









<!-- 

<div class="container">
	<div class="row">
	
		<div class="col-4">
			<div class="card text-center">
				<div class="card-header">
					<span class="text-success"><strong><?= $value->nama ?></strong></span>
				</div>
				<div class="card-body">
					<img class="img-thumbnail" style="max-height: 200px" src="<?= base_url('uploads/'.$value->gambar) ?>" />
					<h5 class="mt-3 text-success"><?= "Rp ".number_format($value->harga,2,',','.') ?></h5>
					<p class="text-info">Stok : <?= $value->stok ?></p>
				</div>
				<div class="card-footer">
					<a href="<?= site_url('etalase/beli/'.$value->id)?>" style="width:100%" class="btn btn-success">Beli</a>
				</div>
			</div>
		</div>
	
	</div>
</div> -->




<?= $this->endSection() ?>