<?php

	namespace App\Controllers;

	class Thankyou extends BaseController {

		public function index(): string {
            return view('common/header')
                . view('thankyou')
                . view('common/footer');
		}

	}