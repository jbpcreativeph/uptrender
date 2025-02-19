<?php

namespace App\Controllers;

class Referralprogram extends BaseController {

	public function index() {

                    if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }


        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/referralprogram')
            . view('common/subfooter')
            . view('common/footer');
	}

}