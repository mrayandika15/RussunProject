<?php namespace App\Entities;

use CodeIgniter\Entity;

class Transaksi extends Entity
{
	public function setPembayaran($file)
	{
	  $fileName = $file->getRandomName();
	  $writePath = './uploads';
	  $file->move($writePath, $fileName);
	  $this->attributes['bukti'] = $fileName;
	  return $this;
	}
}

