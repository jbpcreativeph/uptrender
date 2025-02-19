<?php

    namespace App\Controllers;

    class Dashboard extends BaseController
    {

        public function index() {

            if (!session()->get('logged_in')) {
                return redirect()->to(base_url('login'));
            }

            return view('common/header')
            	. view('common/sidebar')
                . view('affiliate/dashboard')
                . view('common/subfooter')
                . view('common/footer');
        }
    }