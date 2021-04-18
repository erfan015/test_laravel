<?php

namespace App\Http\Controllers;

use App\Models\Product;
use App\Models\VariationOption;
use App\Models\Variation;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use function GuzzleHttp\Promise\all;


class ProductController extends Controller
{
    public function index()
    {

          $variation = Product::query()->with(['variation','variationOption'])->get();

//        $result= array([$variation->variation1->name],
//            [$variation->variationOption->name]);

                return response()->json(['products us:'=>$variation]);



    }

//    public function listofproducts()
//    {
//        $products=product::all();
//        return response()->json(['products us:'=>['product'=>$products]]);
//    }

//
}
