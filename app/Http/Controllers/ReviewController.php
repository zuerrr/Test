<?php
namespace App\Http\Controllers;

use App\Models\Review;
use Illuminate\Http\Request;

class ReviewController extends Controller
{
    public function index($productId)
    {
        $reviews = Review::where('product_id', $productId)->get();
        return response()->json($reviews);
    }

    public function store(Request $request, $productId)
    {
        $request->validate([
            'review' => 'required|string',
            'rating' => 'required|integer|min:1|max:5',
        ]);

        $review = Review::create([
            'product_id' => $productId,
            'review' => $request->review,
            'rating' => $request->rating,
        ]);

        return response()->json($review, 201);
    }
}
