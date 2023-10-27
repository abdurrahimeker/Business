<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Products;
use Illuminate\Support\Facades\Hash;

class ProductController extends Controller
{
    public function create(Request $request) {
        $user = new Products;
        $user->productName = $request->input('productName');
        $user->category = $request->input('category');
        $user->color = $request->input('color');
        $user->price = $request->input('price');
        $user->piece = $request->input('piece');
        $user->save();

        return response()->json($user, 201);
    }
}

