<?php

namespace App\Http\Controllers;

use Exception;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    private static function FindProduct($productId)
    {
        Product::find($productId);
    }

    public function GetAllProducts()
    {
        dd(Product::all());
    }

    /* #region GetProduct */
    public function GetProduct($productId)
    {
        dd(self::FindProduct($productId));
    }
    /* #endregion GetProduct */

    public function RemoveProduct($productId)
    {
        $product = self::FindProduct($productId);
        $product::delete($product);
    }

    public function AddProduct(Request $request)
    {
        $product = $request->all();

        //validation

        //insert database
        $productDAO = new Product();
        $productDAO->fill($product);
        dd($productDAO);
        $productDAO->save();

        return view('product.productlist');
    }

    public function GetUpdateProductPage()
    {
        return view('product.edit');
    }

    public function UpdateProduct(Request $request)
    {
        try {
            $product = $request->all();
            $productDAO = new Product();
            $productDAO->fill($product);
            dd($productDAO);
            $productDAO->save();
        } catch (Exception $e) {
            dd($e);
        }
    }

    public function UpdateProductStock(Request $request)
    {
        try {
            $product = $request->all();
            $productDAO = Product::find($product['id']);
            $productDAO->fill($product);            
            dd($productDAO);
            $productDAO->save();
        } catch (Exception $e) {
            dd($e);
        }
    }
}