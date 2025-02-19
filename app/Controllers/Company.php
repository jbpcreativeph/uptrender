<?php

namespace App\Controllers;

class Company extends BaseController {

    public function index() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/companyprofile')
            . view('common/subfooter')
            . view('common/footer');
    }

    public function bank() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }


        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/bankdetails')
            . view('common/subfooter')
            . view('common/footer');
    }

}