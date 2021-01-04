<?php namespace App\Controllers;

class Home extends BaseController
{

	public function __construct()
	{
		helper('form');
		helper('number');
    }
	

	public function index()
	{
		return view('layouting_view',[
			'cart'=> \Config\Services::cart(),
		]);
	}

	
	public function cek(){
		$cart = \Config\Services::cart();
		$response = $cart->contents();
		
		echo '<pre>';
		print_r($response);
		echo '</pre>';
	}

	public function add(){	
		$cart = \Config\Services::cart();
		$cart->insert(array(
			'id'      => $this->request->getPost('id'),
			'qty'     => 1,
			'price'   => $this->request->getPost('price'),
			'name'    => $this->request->getPost('name'),
			'options' => array(
				'gambar' => $this->request->getPost('gambar'), 
				'stock' => $this->request->getPost('stok')
				)
		 ));
		session()->setflashdata('pesan' , 'Successfully Added To Bag !');
		return redirect() ->to(base_url('etalase/index'));	
	}
	
	public function clear(){
		$cart = \Config\Services::cart();
		$cart->destroy();
	}

	public function cart(){
		return view('Checkout/index',[
			'cart'=> \Config\Services::cart(),
		]);
	}

	public function delete($rowid){
		$cart = \Config\Services::cart();
		$cart->remove($rowid);

		session()->setflashdata('pesan' , 'Successfully Remove !');
		return redirect() ->to(base_url('home/cart'));	
	}


	//--------------------------------------------------------------------

	




}

