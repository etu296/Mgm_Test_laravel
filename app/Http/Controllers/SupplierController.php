<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Supplier;

class SupplierController extends Controller
{
    public function supplierLanding()
    {
      $suppliers = Supplier:: all();
      return view('admin\supplier\supplierLanding',compact('suppliers'));
    }
    public function createSupplier()
    {
      return view('admin\supplier\createSupplier');
    }
    public function storeSupplier(Request $request)
    {
      Supplier::create([
      'supplierName'=>$request->supplierName,
      'supplierPhn'=>$request->supplierPhn,
      'supplierAddress'=>$request->supplierAddress
      ]);
      return redirect()->route('admin.supplier.supplierLanding');   
    }
}
