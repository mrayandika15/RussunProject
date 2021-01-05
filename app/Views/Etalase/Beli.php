<?= $this->extend('layout_view_not') ?>
<?= $this->section('content') ?>
<?php
$id_barang = [
    'name' => 'id_barang',
    'id' => 'id_barang',
    'value' => $model->id,
    'type' => 'hidden'
];

$id_pembeli = [
    'name' => 'id_pembeli',
    'id' => 'id_pembeli',
    'value' => session()->get('id'),
    'type' => 'hidden'
];
$jumlah = [
    'name' => 'jumlah',
    'id' => 'jumlah',
    'value' => 1,
    'min' => 1,
    'class' => 'form-control',
    'type' => 'number',
    'max' => $model->stok,
];
$total_harga = [
    'name' => 'total_harga',
    'id' => 'total_harga',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];

$alamat = [
    'name' => 'alamat',
    'id' => 'alamat',
    'class' => 'form-control',
    'value' => null,
];

$submit = [
    'name' => 'submit',
    'id' => 'submit',
    'type' => 'submit',
    'value' => 'Beli',
    'class' => 'btn btn-success',
];

$ongkir = [
    'name' => 'ongkir',
    'id' => 'ongkir',
    'value' => null,
    'class' => 'form-control',
    'readonly' => true,
];


?>


<div class="breadcumb d-flex russun_container">
    <ol class="breadcrumb">
      <li class="breadcrumb-item"><a href="#">Shop</a></li>
      <li class="breadcrumb-item"><a href="#">Collection</a></li>
      <li class="breadcrumb-item active" aria-current="page">Data</li>
    </ol>
  </div>

  <!-- breadcumb -->


	<?php 
	echo form_open('home/add');
	echo form_hidden('id', $model->id);
	echo form_hidden('price', $model->harga);
	echo form_hidden('name', $model->nama);	

	echo form_hidden('gambar', $model->gambar);
	echo form_hidden('stok', $model->stok);

	?>

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-8 container-product-img russun_image">
        <div class="img1 mr-n5">
          <img src="<?= base_url('uploads/'.$model->gambar) ?>" alt="">
        </div>
      </div>
     
      <div class="col-md-4 container-product russun-product-rightside d-flex flex-column">

        <div class="name-product">
          <!-- Product -->
          <p class="bold"><?= $model->nama ?></p>
          <!-- Prize -->
          <p><?= number_to_currency($model->harga , 'IDR' ); ?></p>
          <p class="color1">Pre-Order</p>
        </div>

        <div class="color-container mt-4">
          <!-- color -->
          <p class="color2">Color</p>
          <div class="color">
            <div class="kotak"></div>
          </div>

          <!-- Size -->
          <div class="size-container mt-4">
            <p class="color2">Size</p>
            <div class="size d-flex">
              <li><a href="">S</a></li>
              <li><a href="">M</a></li>
              <li><a href="">L</a></li>
              <li><a href="">XL</a></li>
            </div>
          </div>

          <!-- button -->
          <div class="button-container-product mt-5 d-flex">
            <button type="submit" class="btn btn-light button-russun">ADD TO BAG</button>
           

          </div>
		  <?php 
	echo form_close();
	?>
		  
		
          <!-- Desc -->
          <div class="desc d-flex flex-column mt-5">

            <div class="desc-column dec1">
              <div class="active d-flex desc-russun ">
                <div class="min"></div>
                <p>PRODUCT DESCRIPTION</p>
              </div>

              <div class="non-active-container">
                <div class="non-active">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolores rem eligendi reprehenderit
                  dolor quae.
                </div>
              </div>

            </div>

            <div class="desc-column dec2">
              <div class="active d-flex desc-russun">
                <div class="min"></div>
                <p>SHIPPING & RETURNS</p>
              </div>

              <div class="non-active-container">
                <div class="non-active">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolores rem eligendi reprehenderit
                  dolor quae.
                </div>
              </div>

            </div>

            <div class="desc-column dec3">
              <div class="active d-flex desc-russun">
                <div class="min"></div>
                <p>FABRIC COMPOSITION</p>
              </div>

              <div class="non-active-container">
                <div class="non-active">
                  Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet dolores rem eligendi reprehenderit
                  dolor quae.
                </div>
              </div>

            </div>







		  </div>

		

		

		  
          


        </div>
      </div>
	</div>
	

	<div class="container-fluid rususn-view-container">
		<div class="row">
		<div class="col-md-2 d-flex justify-content-center align-items-center">
		<div class="text-desc-russun-view ">
			<h3 class="bold">Complete</h3>
			<h3 class="bold">the look</h3>
		</div>
		</div>
		<div class="col-md-10 d-flex">
		<div class="img-russun-view">
			<img src="<?= base_url('asset/product-item-1.png') ?>" alt="">
		<img src="<?= base_url('asset/product-item-2.png') ?>" alt="">
		</div>
	</div>
	</div>

	<div class="container-fluid mt-5">
		<div class="row">
			<div class="col-md-12">
			<div class="text-center mt-2">
			<p class="bold text-russun">YOU MAY ALSO LIKE</p>
			</div>	
			</div>
		</div>
		<div class="row">
			<div class="col-md-4">
			<div class="img-russun-view img-also-like">
				<img src="<?= base_url('asset/black-1 1.png') ?>" alt="">
			</div>
			</div>
			<div class="col-md-4">
			<div class="img-russun-view img-also-like">
			<img src="<?= base_url('asset/olive-1.png') ?>" alt="">
			</div>
			</div>
			<div class="col-md-4">
			<div class="img-russun-view img-also-like">
			<img src="<?= base_url('asset/white-1.png') ?>" alt="">
			</div>
			</div>
			
		
			
	
	</div>








	<script src="<?= base_url('App.js') ?>"></script>


	

<?= $this->endSection() ?>

<?= $this->section('script') ?>
<!-- 
<script>
	$('document').ready(function(){
		var jumlah_pembelian = 1;
		var harga = <?= $model->harga ?>;
		var ongkir = 0;
		$("#provinsi").on('change', function(){
			$("#kabupaten").empty();
			var id_province = $(this).val();
			$.ajax({
				url : "<?= site_url('etalase/getcity') ?>",
				type : 'GET',
				data : {
					'id_province': id_province,
				},
				dataType : 'json',
				success : function(data){
					console.log(data);
					var results = data["rajaongkir"]["results"];
					for(var i=0; i<results.length; i++)
					{
						$("#kabupaten").append($('<option>',{
							value : results[i]["city_id"],
							text : results[i]['city_name']
						}));
					}
				},
				
			});
		});

		$("#kabupaten").on('change', function(){
			var id_city = $(this).val();
			$.ajax({
				url : "<?= site_url('etalase/getcost') ?>",
				type : 'GET',
				data : {
					'origin': 154,
					'destination' : id_city,
					'weight' : 1000,
					'courier' : 'jne'
				},
				dataType : 'json',
				success : function(data){
					console.log(data);
					var results = data["rajaongkir"]["results"][0]["costs"];
					for(var i = 0; i<results.length; i++)
					{
						var text = results[i]["description"]+"("+results[i]["service"]+")";
						$("#service").append($('<option>',{
							value : results[i]["cost"][0]["value"],
							text : text,
							etd : results[i]["cost"][0]["etd"]
						}));
					}
				},
				
			});
		});

		$("#service").on('change', function(){
			var estimasi = $('option:selected', this).attr('etd');
			ongkir = parseInt($(this).val());
			$("#ongkir").val(ongkir);
			$("#estimasi").html(estimasi +" Hari");
			var total_harga = (jumlah_pembelian*harga)+ongkir;
			$("#total_harga").val(total_harga);
		});

		$("#jumlah").on("change", function(){
			jumlah_pembelian = $("#jumlah").val();
			var total_harga = (jumlah_pembelian*harga)+ongkir;
			$("#total_harga").val(total_harga);
		});
	});
</script> -->
<?= $this->endSection() ?>

