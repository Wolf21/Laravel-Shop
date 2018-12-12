<?php

namespace App\Services;


use App\Models\Products;

class ProductService
{
    /**
     * @return mixed
     */
    public static function getProductOnSale()
    {
        return Products::where('sale', '!=', 0)
            ->orderby('sale', 'DESC')
            ->get();
    }

    /**
     * @return mixed
     */
    public static function getProductBestRate()
    {
        return Products::where('rate', '!=', 0)
            ->orderby('rate', 'DESC')
            ->get();
    }

    /**
     * @return mixed
     */
    public static function getProductDeals()
    {
        return Products::join('product_details', 'products.product_id', '=', 'product_details.product_id')
            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
            ->where('products.deal', 1)
            ->where('products.sale', '>', 0)
            ->where('product_details.quantity', '>', 0)
            ->select(
                'products.product_id AS product_id',
                'products.name AS product_name',
                'products.sale AS sale',
                'products.price AS price',
                'products.images AS images',
                'product_details.quantity as quantity',
                'categories.name AS cat_name')
            ->orderby('products.sale', 'DESC')
            ->get();
    }

    /**
     * @param $os
     * @return mixed
     */
    public static function getProductNewByOS($os)
    {
        return Products::join('product_details', 'products.product_id', '=', 'product_details.product_id')
            ->where('product_details.os', 'LIKE', $os . '%')
            ->select(
                'products.product_id AS product_id',
                'products.name AS name',
                'products.sale AS sale',
                'products.price AS price',
                'products.images AS images',
                'product_details.os as os'
            )->orderby('products.product_id', 'ASC')
            ->get();
    }
}
