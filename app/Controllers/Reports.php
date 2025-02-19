<?php

namespace App\Controllers;

class Reports extends BaseController {

    public function index() {

                    if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }


        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/reports')
            . view('common/footer');
    }

    public function commission() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/commission')
            . view('common/footer');
    }
}