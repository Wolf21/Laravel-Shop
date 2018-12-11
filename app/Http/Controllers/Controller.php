<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function index()
    {
        $products = Products::all();
        dd($products);
        return view('index')->with('products', $products);
    }
}
