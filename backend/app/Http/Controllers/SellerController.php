<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Sellers;
use Illuminate\Support\Facades\Hash;

class SellerController extends Controller
{
    public function create(Request $request) {
        $user = new Sellers;
        $user->name = $request->input('username');
        $user->companyname = $request->input('companyname');
        $user->email = $request->input('email');
        $user->companyemail = $request->input('companyemail');
        $user->password = Hash::make($request->input('password'));
        $user->save();

        return response()->json($user, 201);
    }
}
