<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contactSubmit(Request $request){
       return 0;
    }
    public function sendSubmit(Request $request){
        return response()->json([
    		'name' => 'Abigail',
    		'state' => 'CA'
		]);
    }
}
