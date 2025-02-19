<?php

	namespace App\Controllers;
	
	use App\Models\AffiliateModel;
	use App\Models\AffiliateDb;
	use App\Models\CompanyDb;
	use App\Models\MarketingSoftwareDb;
	use CodeIgniter\Controller;

	class Register extends BaseController {

		public function index(): string {

			$marketingSoftware = new AffiliateModel();
        	$data['marketingsoftware'] = $marketingSoftware->getMarketingSoftwares();


            return view('common/header')
                . view('register',$data)
                . view('common/footer');
		}

	    public function registerAffiliate() {
	        if ($this->request->isAJAX()) {
	            $affiliate = new AffiliateDb();
	            $company = new CompanyDb();

	            // Retrieve data from AJAX request
	            $postData = $this->request->getPost();

	            // Generate a random password
	            $password = bin2hex(random_bytes(5));
	            $hashedPassword = md5($password);

	            $affiliateData = [
	                'firstname' => $postData['firstname'],
	                'lastname'  => $postData['lastname'],
	                'emailaddress'	=> $postData['emailaddress'],
	                'phonenumber'	=> $postData['phonenumber'],
	                'streetaddress'	=> $postData['streetaddress'],
	                'zipcode'	=> $postData['zipcode'],
	                'city'	=> $postData['city'],
	                'state'	=> $postData['state'],
	                'password' => $hashedPassword,
	                'initialpassword' => $password
	            ];

	            // Insert into main table
	            $affiliateID = $affiliate->insert($affiliateData);

	            if ($affiliateID) {
	                // Data for child table
	                $companyData = [
	                    'companyname' => $postData['businessname'],
	                    'title'	=> $postData['title'],
		                'streetaddress'	=> $postData['streetaddress'],
		                'city'	=> $postData['city'],
		                'state'	=> $postData['state'],
	                    'zipcode'	=> $postData['zipcode'],
	                    'companystartdate'	=> $postData['zipcode'],
	                    'marketingsoftware'	=> $postData['marketingsoftware'],
	                    'affiliateid'	=> $postData['zipcode']
	                ];

	                // Insert into child table
	                $company->insert($companyData);

	                // Return success response with redirect to Thank You page
	                return $this->response->setJSON([
	                    'status' => 'success',
	                    'redirect' => base_url('thankyou') // Change to thank-you page
	                ]);

	                // Send email with username and password
	                //$this->sendEmail($postData['emailaddress'], $postData['emailaddress'], $password);
	            } else {
	                return $this->response->setJSON([
	                    'status' => 'error',
	                    'message' => 'Failed to save data.'
	                ]);
	            }
	        }
	    }

	    private function sendRegistrationDetails($to, $username, $password){
	        $email = \Config\Services::email();

	        $email->setFrom('your@email.com', 'Your Name');
	        $email->setTo($to);
	        $email->setSubject('Your Account Details');
	        $email->setMessage("
	            <p>Dear <strong>$username</strong>,</p>
	            <p>Your account has been created successfully. Below are your login details:</p>
	            <p><strong>Username:</strong> $username</p>
	            <p><strong>Password:</strong> $password</p>
	            <p>For security reasons, please change your password after logging in.</p>
	            <p>Thank you!</p>
	        ");

	        if ($email->send()) {
	            return true;
	        } else {
	            log_message('error', 'Email failed: ' . $email->printDebugger(['headers']));
	            return false;
	        }
	    }


	}