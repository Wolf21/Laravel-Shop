<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Services\ProductService;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public static function index()
    {
        $productOnSale = ProductService::getProductOnSale();
        $productRate = ProductService::getProductBestRate();
        $productDeals = ProductService::getProductDeals();
        $productIOSNew = ProductService::getProductNewByOS('IOS');
        $productAndroidNew = ProductService::getProductNewByOS('Android');
        $productWindowNew = ProductService::getProductNewByOS('Window'); //TODO: add window phone or s.t like this
        return view('index',
            [
                'productOnSale' => $productOnSale,
                'productRate' => $productRate,
                'productDeals'=> $productDeals,
                'productIOSNew'=> $productIOSNew,
                'productAndroidNew'=> $productAndroidNew,
                'productWindowNew'=> $productWindowNew,
            ]);
    }
}
