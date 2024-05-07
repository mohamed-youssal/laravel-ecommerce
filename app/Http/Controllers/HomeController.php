<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth')->except([ 'index', 'contact' ]);
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::paginate(8);
        $products = Product::paginate(8);
        return view('home', compact('categories', 'products'));
    }

    public function contact()
    {
        return view('product.contact');
    }

    public function profil()
    {
        // $user_id = Auth::id();
        // $user = User::findOrFail($user_id);
        // return view('profil.index', compact('user'));
    }
}
