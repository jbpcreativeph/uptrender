<?php

namespace App\Controllers;

class Members extends BaseController{
    public function index() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

        return view('common/header')
        	. view('common/sidebar')
            . view('affiliate/members')
            . view('common/subfooter')
            . view('common/footer');
    }

    public function suspended() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

        return view('common/header')
            . view('common/sidebar')
            . view('affiliate/suspended')
            . view('common/subfooter')
            . view('common/footer');
    }

    public function pendingclose() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

        return view('common/header')
            . view('common/sidebar')
            . view('affiliate/pendingclose')
            . view('common/subfooter')
            . view('common/footer');
    }
}