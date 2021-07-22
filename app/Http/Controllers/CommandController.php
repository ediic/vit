<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Command;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;

class CommandController extends Controller
{
   public function store(Request $request)
   {
		$validated = $request->validate([
			'username' => 'required|max:255',
			'location' => 'required|max:255',
			'destination' => 'required|max:255',
			'phone' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|max:30',
			'email' => 'nullable|email|max:255',
			'message' => 'nullable|alpha_num|max:1000',
		]);

   	Command::create($validated);

   	Mail::to('dediic@yahoo.com')->send(new OrderMail($request));

		return back()->with('status', 'Comanda a fost plasata cu succes');
   }

   
   public function index()
   {
      // if (Gate::allows('is-admin')) {
      // }
   	
      return view('command_index', ['commands' => Command::latest()->paginate(10)]);
   }


   public function destroy($id, Request $request)
   {
      Command::destroy($id);
      $request->session()->flash('status', 'Comanda a fost stearsa');

      return redirect(route('commands.index'));
   }


   public function update(Command $command, Request $request)
   {  
      $checked = $request->check ?? 0;
      $command->checked = $checked;
      $command->save();

      return redirect(route('commands.index'));      
   }

}
