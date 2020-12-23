<?= $this->extend('layout_view') ?>
<?= $this->section('content') ?>
<?php
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
		<?php if($errors != null): ?>
			
		<div class="alert alert-danger" role="alert" >
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
	
	<link href="<?= base_url('vendor/select2/select2.min.css') ?>" rel="stylesheet">
	<link href="<?= base_url('style_form.css') ?>" rel="stylesheet">
	<div class="page-wrapper  p-t-180 p-b-100 font-poppins">
        <div class="wrapper wrapper--w780">
            <div class="card card-3">
                <div class="card-heading"></div>
                <div class="card-body">
                    <h2 class="title">Registration Info</h2>
                    <form method="POST">
                        <div class="input-group">
                            <?= form_label("Username", "username") ?>
                            <?= form_input($username) ?>
                        </div>
                        <div class="input-group">
                    
                            <?= form_label("Password", "password") ?>
		                	<?= form_password($password) ?>
                        </div>

                        <div class="input-group">
                           
                            <?= form_label("Repeat Password", "repeatPassword") ?>
                            <?= form_password($repeatPassword) ?>
                        </div>

                        
                        <div class="p-t-10">
						<?= form_submit('submit', 'Submit',['class'=>'btn btn--pill btn--green']) ?>
                        </div>
                    </form>
                </div>
            </div>
        </div>
	</div>
	
	<script src="<?= base_url('app_form.js') ?>"></script>
		
	<?= form_close() ?>





<?= $this->endSection() ?>