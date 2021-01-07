<?php
$session = session();
?>

<?= $this->extend('layout_view_not') ?>
<?= $this->section('content') ?>
<?php
$bank = [
	'name' => 'bank',
	'id' => 'bank',
	'value' => null,
];

$bukti = [
	'name' => 'bukti',
	'id' => 'bukti',
	'value' => null,
	'class' => 'form-control',
]; 

$submit = [
	'name' => 'submit',
	'id' => 'submit',
	'value' => 'submit',
	'class' => 'btn btn-success btn-validation-russun',
	'type' => 'submit',
];

?>

<!-- <?= form_open_multipart('transaksi/payment/'.$transaksi->id) ?> -->

<form action="<?php echo base_url('transaksi/payment/'.$transaksi->id);?>" method="post" enctype="multipart/form-data">

<div class="form-pembayaran">
	<div class="container-form-pembayaran">
    <div class="text-center mt-3">
        <h4 class="text-title-form">Confirmation Billing</h4>
        <br>
    </div>
        <div class="text-transfer">
                <p class="bold">BANK TRANSFER</p>
                <label for="bank">Pilih Bank</label>
				<select class="form-control" id="bank" name="bank">
					<option>Select Kabupaten/kota</option>
                    <option>BNI(123123123123)</option>
                    <option>BCA(123123123123312)</option>
                    <option>MANDIRI(123123123123)</option>
				</select>

                </div>
            <div class="upload-bukti bold" >
            <input type="file" name="bukti" id="bukti" enctype="multipart/form-data">
		    <!-- <?= form_upload($bukti) ?> -->
            </div>


            <div class="text-center mt-5">
            <?= form_submit($submit) ?>
            </div>

                
    </div>

    </div>

    </form>
<?= $this->endSection() ?>