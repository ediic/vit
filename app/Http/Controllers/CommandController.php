<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;

class CommandController extends Controller
{
   public function store(Request $request)
   {
		$validated = $request->validate([
			'username' => 'required|max:255',
			'location' => 'required|max:255',
			'destination' => 'required|max:255',
			'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:20',
			'email' => 'nullable|email|max:255',
			'message' => 'alpha_num|max:1000',
		]);

      Command::create($validated);

		return back()->with('status', 'Comanda a fost plasata cu succes');
   }

   
   public function index()
   {

   	return view('command_index', ['commands' => Command::all()]);
   }


   public function destroy($id, Request $request)
   {
      Command::destroy($id);
      $request->session()->flash('status', 'Comanda a fost stearsa');

      return redirect(route('commands.index'));
   }

}
