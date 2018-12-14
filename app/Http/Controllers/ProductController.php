<?php

namespace App\Http\Controllers;


use App\Services\ProductService;

class ProductController extends Controller
{
    public static function productDetails($product_id)
    {
        list($productDetails, $productImg) = ProductService::getProductDetails($product_id);
        $data = [
            'productDetails' => $productDetails,
            'productImg' => $productImg
        ];
        return view('product', $data);
    }

}