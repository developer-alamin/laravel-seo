<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;

class loginController extends Controller {
	function WebLogin() {
		return view("frontend.page.login");
	}
}
