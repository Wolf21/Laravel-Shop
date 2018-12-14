<?php

namespace App\Services;


use App\Models\Products;

class ProductService
{

    /**
     * @param $product_id
     * @return mixed
     */

    public static function getProductDetails($product_id)
    {
        $productDetails = Products::join('product_details', 'products.product_id', '=', 'product_details.product_id')
            ->join('product_information', 'products.product_id', '=', 'product_information.product_id')
            ->join('details_img', 'products.product_id', '=', 'details_img.product_id')
            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
            ->select(
                'products.*',
                'product_details.*',
                'product_information.*',
                'details_img.images_url',
                'categories.name AS cat_name'
            )
            ->where('products.product_id', $product_id)
            ->first();

        $productImg = Products::join('details_img', 'products.product_id', '=', 'details_img.product_id')
            ->select(
                'details_img.images_url'
            )
            ->where('products.product_id', $product_id)
            ->get();
        return [$productDetails, $productImg];
    }

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

    /**
     * @return mixed
     */
    public static function getTop10BestSell()
    {
        return Products::join('order_details', 'products.product_id', '=', 'order_details.product_id')
            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
            ->groupby('order_details.product_id')
            ->select(
                'products.product_id',
                'products.name AS product_name',
                'products.sale AS sale',
                'products.price AS price',
                'products.images AS images',
                'categories.name AS cat_name'
            )->selectRaw('SUM(order_details.quantity) as quantity')
            ->orderby('quantity', 'DESC')
            ->limit(10)
            ->get();
    }

    /**
     * @param $cat_id
     * @return mixed
     */
    public static function getProductBestSellByCategory($cat_id)
    {
        return Products::join('order_details', 'products.product_id', '=', 'order_details.product_id')
            ->join('categories', 'products.cat_id', '=', 'categories.cat_id')
            ->groupby('order_details.product_id')
            ->select(
                'products.product_id',
                'products.name AS product_name',
                'products.sale AS sale',
                'products.price AS price',
                'products.images AS images',
                'categories.name AS cat_name'
            )->selectRaw('SUM(order_details.quantity) as quantity')
            ->where('products.cat_id', $cat_id)
            ->orderby('quantity', 'DESC')
            ->limit(10)
            ->get();
    }

}
