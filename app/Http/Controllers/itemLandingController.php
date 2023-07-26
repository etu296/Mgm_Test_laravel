<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;


class itemLandingController extends Controller
{
    public function itemLanding()
    {
    //   $items=Item::all();
      return view('admin\item\itemLnding');  
    }
    public function createItem()
    {
        return view('admin\item\createItem');
    }
}
