<?php

namespace App\Http\Controllers;

use App\Models\ProductType;
use Illuminate\Http\Request;

class ProductTypeController extends Controller
{
    /*
        index
        show
        store
        update
        destroy
    */

    public function index(){
        return response()->json(ProductType::all());
    }

    public function show($id){
        return response()->json(ProductType::find($id));
    }

    public function store(Request $request){
        $product_type = new ProductType();
        $product_type->name = $request->name;
        $product_type->description = $request->description;
        $product_type->cost = $request->cost;
        $product_type->save();
    }

    public function update(Request $request, $id){
        $product_type = ProductType::find($id);
        $product_type->name = $request->name;
        $product_type->description = $request->description;
        $product_type->cost = $request->cost;
        $product_type->save();
    }

    public function destroy($id){
        ProductType::find($id)->delete();
    }

}
