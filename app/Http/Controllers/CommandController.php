<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandController extends Controller
{
   public function store(Request $request)
   {
   		$validated = $request->validate([
   			'username' => 'required|max:255',
   			'location' => 'required|max:255',
   			'destination' => 'required|max:255',
   			'phone' => 'required|numeric|max:25',
   			'email' => 'email|max:255',
   			'message' => 'alpa_num|max:1000',
   		]);

   		return back();
   }
}
