<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SupplierController extends Controller
{
    public function supplierLanding()
    {
      return view('admin\supplier\supplierLanding');
    }
    public function createSupplier()
    {
      return view('admin\supplier\createSupplier');
    }
}
