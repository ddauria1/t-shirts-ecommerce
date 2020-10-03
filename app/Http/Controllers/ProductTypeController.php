<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ProductType;

class ProductTypeController extends Controller 
{
    
    public function GetAllProductTypes()
    {
        //Dump and Die dd();
        dd(ProductType::all());        
    }

    public function GetProductType($id)
    {
        dd(ProductType::find($id));
    }

    public function CreateProductType($productType)
    {
        $productTypeDAO = new ProductType();
        $productTypeDAO->fill(['name'=>$productType]);
        $productTypeDAO->save();
        dd(ProductType::find($productType));
    }

    public function UpdateProductType(Request $request)
    {
        $productType = $request->all();
        $productTypeDAO = ProductType::find($productType['id']);
        $productTypeDAO->fill($productType);
        $productTypeDAO->save();
        return redirect()->route('all-productTypes');
    }

    public function DeleteProductType($id)
    {
        $productTypeDAO = ProductType::find($id);
        $productTypeDAO->delete();
        return redirect()->route('all-productTypes');
    }
}
