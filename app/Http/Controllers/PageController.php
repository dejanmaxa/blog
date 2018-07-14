<?php 

namespace App\Http\Controllers;
class PageController extends Controller {

	public function getIndex(){
		return view ('pages.welcome');


	}

		public function getAbout(){
			$first = 'Dejan';
			$last = 'Maksimovic';

			$fullname = $first . " " . $last;
			$email = 'dejanmaxa@hotmail.com';
			$data = [];
			$data ['email'] = $email;
			$data['fullname'] = $fullname;
			return view('pages.about')->withData($data);

	}

	public function getContact() {
		return view('pages.contact');

	}

}