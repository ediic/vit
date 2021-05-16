<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderMail;
use App\Models\Command;

class OrderMailController extends Controller
{
    public function sendMail(Request $request)
    {
    	//$order = Command::findOrFail($request->order_id);

	    Mail::to('dediic@yahoo.com')->send(new OrderMail());
    }
}
