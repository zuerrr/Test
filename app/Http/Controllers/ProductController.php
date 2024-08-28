<?php
namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index(Request $request)
    {
        $query = Product::query();

        if ($request->has('price_min')) {
            $query->where('price', '>=', $request->price_min);
        }

        if ($request->has('price_max')) {
            $query->where('price', '<=', $request->price_max);
        }

        if ($request->has('attributes')) {
            $attributes = explode(',', $request->attributes);
            foreach ($attributes as $attribute) {
                list($key, $value) = explode(':', $attribute);
                $query->whereHas('attributes', function ($q) use ($key, $value) {
                    $q->where('key', $key)->where('value', $value);
                });
            }
        }

        $products = $query->paginate(10);

        return response()->json($products);
    }

    public function show($id)
    {
        $product = Product::with('reviews', 'attributes')->findOrFail($id);
        return response()->json($product);
    }
}
