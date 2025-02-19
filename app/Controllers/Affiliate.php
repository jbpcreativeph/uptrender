<?php

namespace App\Controllers;

class Affiliate extends BaseController {

    public function index() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/affiliate')
            . view('common/subfooter')
            . view('common/footer');
    }

    public function links() {

                    if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }


        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/mylinks')
            . view('common/subfooter')
            . view('common/footer');    	
    }

}