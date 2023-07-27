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

    public function itemTypesLanding()
    {
      return view('admin\item\itemTypesLanding');
    }
    public function createItemTypes()
    {
      return view('admin\item\createItemTypes');
    }
    public function itemCategoryLanding()
    {
      $itemCetagories = Item::all();
      return view('admin\item\itemCategoryLanding',compact('itemCetagories'));
    }
    public function createItemCategory()
    {
      return view('admin\item\createItemCategory');
    }
    public function storeItemCategory(Request $request)
    {
      Item::create([
        'categoryCode'=>$request->categoryCode,
        'categoryName'=>$request->categoryName,
      ]);
      return redirect()->route('admin.item.itemCategoryLanding');
    }

}
