<?= $this->extend('layout_view_not') ?>
<?= $this->section('content') ?>
<?php
foreach($cart->contents() as $key => $value)
$id_barang = [
    'name' => 'id_barang',
    'id' => 'id_barang',
    'value' => $value['id'],
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
    'max' => $value['id'],
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
<?php  foreach($cart->contents() as $key => $value){ ?>


    <div class="container">
	<div class="row">
		<div class="col">
			<div class="card">
				<div class="card-body">
					<img class="img-fluid" src="<?= base_url('uploads/'.$value['options']['gambar']) ?>" />
					<h1 class="text-success"><?= $value['name'] ?></h1>
					<h4> Harga : <?= $value['price'] ?></h4>
					<h4> Stok : <?= $value['options']['stock'] ?></h4>
				</div>
			</div>
		</div>

    <?php } ?>

		<div class="col">

        <h4>Pengiriman</h4>
			<div class="form-group">
				<label for="provinsi">Pilih Provinsi</label>
				<select class="form-control" id="provinsi">
                    <option>Select Provinsi</option>
                    <?php foreach($provinsi as $p): ?>
                        <option value="<?= $p->province_id ?>"><?= $p->province ?></option>
                        <?php endforeach ?>
				</select>
			</div>
			<div class="form-group">
				<label for="kabupaten">Pilih Kabupaten/Kota</label>
				<select class="form-control" id="kabupaten">
					<option>Select Kabupaten/kota</option>
				</select>
			</div>
			<div class="form-group">
				<label for="service">Pilih Service</label>
				<select class="form-control" id="service">
					<option>Select Service</option>
				</select>
			</div>

			<strong>Estimasi : <span id="estimasi"></span></strong>
			<hr>
			
			<?= form_open('Etalase/beli') ?>
				<?= form_input($id_barang) ?>
				<?= form_input($id_pembeli) ?>
				<div class="form-group">
					<?= form_label('Jumlah Pembelian', 'jumlah') ?>
					<?= form_input($jumlah) ?>
                </div>
                <div class="form-group">
					<?= form_label('Ongkir', 'ongkir') ?>
					<?= form_input($ongkir) ?>
				</div>
				<div class="form-group">
					<?= form_label('Total Harga', 'total_harga') ?>
					<?= form_input($total_harga) ?>
				</div>
				<div class="form-group">
					<?= form_label('Alamat', 'alamat') ?>
					<?= form_input($alamat) ?>
				</div>
				<div class="text-right">
					<?= form_submit($submit) ?>
				</div>
			<?= form_close() ?>
		</div>
	</div>
</div>




<?= $this->endSection() ?>

<?= $this->section('script') ?>
<script>
	$('document').ready(function(){
		var jumlah_pembelian = 1;
		var harga = <?= $value['price'] ?>;
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
</script>
<?= $this->endSection() ?>