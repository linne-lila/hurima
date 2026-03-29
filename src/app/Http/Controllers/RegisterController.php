<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\RegisterRequest;
use App\Models\Item;

class ItemController extends Controller
{
    public function confirm(RegisterRequest $request){
        $register = $request->only(['name', 'email', 'tel', 'content']);
        return view('confirm', ['contact' => $contact]);
    }

    public function store(RegisterRequest $request){
        $register = $request->only(['name', 'email', 'tel', 'content']);
        Contact::create($contact);
    }
}