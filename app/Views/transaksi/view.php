<?php
$session = session();
?>



<?php if($session->get('isLoggedIn')): ?>

<?php if(session()->get('role')==1): ?>

<?= $this->extend('layout_view_not') ?>
<?= $this->section('content') ?>
<div class="d-flex flex-column container-table-in">
	<div class="container-table-russun flex-column">
		<h2 class="d-flex justify-content-center align-items-center transaction-completed">TRANSACTION COMPLETED</h2>
		<h4 class="bold text-trans">Transaksi No <?= $transaksi->id_trans ?></h4>
		<table class="table table-russun">
			<tr>
				<td>Barang</td>
				<td><?= $transaksi->nama ?></td>
			</tr>
			<tr>
				<td>Pembeli</td>
				<td><?= $transaksi->username ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?= $transaksi->alamat ?></td>	
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><?= $transaksi->jumlah ?></td>
			</tr>
			<tr>
				<td>Total Harga</td>
				<td><?= $transaksi->total_harga ?></td>
			</tr>
		</table>
		<div class="button-confirm">
			<a href="<?= site_url('transaksi/payment/'.$transaksi->id_trans) ?>">
			<button type="button" class="btn btn-success btn-confirm">Success</button>
			</a>
		</div>

	</div>
</div>
<?= $this->endSection() ?>

<?php endif ?>


<?php if(session()->get('role')==0): ?>

<?= $this->extend('layoutAdmin') ?>
<?= $this->section('content_admin') ?>
<div class="d-flex flex-column container-table-in">
	<div class="container-table-russun flex-column">
		<h4 class="bold text-trans">Transaksi No <?= $transaksi->id_trans ?></h4>
		<table class="table table-russun">
			<tr>
				<td>Barang</td>
				<td><?= $transaksi->nama ?></td>
			</tr>
			<tr>
				<td>Pembeli</td>
				<td><?= $transaksi->username ?></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><?= $transaksi->alamat ?></td>
			</tr>
			<tr>
				<td>Jumlah</td>
				<td><?= $transaksi->jumlah ?></td>
			</tr>
			<tr>
				<td>Total Harga</td>
				<td><?= $transaksi->total_harga ?></td>
			</tr>
		</table>
		<!-- BUTTON PEMBAYARAN -->
		
	

	</div>
</div>
<?= $this->endSection() ?>

<?php endif ?>


<?php endif ?>