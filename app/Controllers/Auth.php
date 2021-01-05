<?php namespace App\Controllers;

class Auth extends BaseController{


    public function __construct()
	{
		helper('number');
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
	}

    public function register(){

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $validate = $this->validation->run($data, 'register');
            $errors = $this->validation->getErrors();


            if(!$errors){
				$userModel = new \App\Models\UserModel();

				$user = new \App\Entities\User();

				$user->username = $this->request->getPost('username');
				$user->password = $this->request->getPost('password');

				$user->created_by = 0;
				$user->created_date = date("Y-m-d H:i:s");

				$userModel->save($user);

				return view('layouting_view',[
					'cart'=> \Config\Services::cart(),
				]);
            }
            $this->session->setFlashdata('errors', $errors);
        }
		return view('layouting_view',[
			'cart'=> \Config\Services::cart(),
		]);
    }

    public function login(){
        if($this->request->getPost())
		{
			//lakukan validasi untuk data yang di post
			$data = $this->request->getPost();
			$validate = $this->validation->run($data, 'login');
			$errors = $this->validation->getErrors();
			

			if($errors)
			{
				return view('layouting_view',[
					'cart'=> \Config\Services::cart(),
				]);
			
			}

			$userModel = new \App\Models\UserModel();

			$username = $this->request->getPost('username');
			$password = $this->request->getPost('password');

			$user = $userModel->where('username', $username)->first();
			
			if($user)
			{
				$salt = $user->salt;
				if($user->password!==md5($salt.$password))
				{
					$this->session->setFlashdata('errors', ['Password Salah']);
				}else{
					$sessData = [
						'username' => $user->username,
						'id' => $user->id,
						'role' => $user->role,
						'isLoggedIn' => TRUE
					];

					$this->session->set($sessData);

					return redirect()->to(site_url('Home/index'));
				}
			}else{
				$this->session->setFlashdata('errors', ['User Tidak Ditemukan']);
			}
		}
	
		return view('layouting_view',[
			'cart'=> \Config\Services::cart(),
		]);
	
    }

    public function logout(){
        $this->session->destroy();
		return redirect()->to(site_url('home/index'));
	
		
	}
	
	public function home(){
		return view('login',[
			'cart'=> \Config\Services::cart(),
		]);
	}


}






?>