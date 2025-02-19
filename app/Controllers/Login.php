<?php

	namespace App\Controllers;

	use App\Models\AffiliateDb;
	use CodeIgniter\Controller;

	class Login extends BaseController {

		public function index(): string {
            return view('common/header')
                . view('login')
                . view('common/footer');
		}

		public function authenticate() {

			if ($this->request->isAJAX()) {
				$affiliate = new AffiliateDb();
				$postData = $this->request->getPost();

				$email = $postData['emailaddress'];
	            $password = $postData['password'];

	            $user = $affiliate->where('emailaddress', $email)->first();

	            $securePass = md5($password);

	            if ($securePass == $user['password']) {
	            	session()->set(['user_id' => $user['idtblAffiliates'], 'logged_in' => true]);
	            	return $this->response->setJSON(['success' => true]);
	            }else{
	            	return $this->response->setJSON(['success' => false, 'message' => 'Invalid email or password.']);
	            }
	            
			}

		}

	}