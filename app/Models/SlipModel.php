<?php namespace App\Models;

use CodeIgniter\Model;

class slipModel extends Model
{
	protected $table = 'transaksi_slip';
	protected $primaryKey = 'id';
	protected $allowedFields = [
		'id','bukti','bank',
	];
	protected $returnType = 'App\Entities\Slip';
	protected $useTimestamps = false;
}