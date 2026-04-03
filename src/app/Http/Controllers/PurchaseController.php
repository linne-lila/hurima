<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class PurchaseController extends Controller
{
    public function purchase($item_id){
        $item = Item::find($item_id);
        return view('purchase', compact('item'));
    }

    public function store(Request $request,$item_id){
        $user = $request ->user();
        
    }
}