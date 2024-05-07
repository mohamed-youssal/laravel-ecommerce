<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Command;
use App\Models\Product;
use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct() {
        $this->middleware('admin');
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::with('products')->paginate('5');
        $products = Product::with('category')->paginate('5');
        $commands = Command::with(['user', 'products'])->paginate('5');
        $users = User::where('is_admin', 'like', 0)->with('commands')->paginate('5');

        //for head
        $categories_head = Category::all();
        $products_head = Product::all();
        $commands_head = Command::all();
        $users_head = User::where('is_admin', 'like', 0)->get();

        return view('admin.index', compact(['categories', 'products', 'commands', 'users', 'categories_head', 'products_head', 'commands_head', 'users_head']));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        //
    }



    public function users()
    {
        $users = User::where('is_admin', 'like', 0)->with('commands')->paginate(10);
        return view('admin.users', compact('users'));
    }
    public function products()
    {
        $products = Product::with('category')->paginate(10);
        return view('admin.products', compact('products'));
    }
    public function categories()
    {
        $categories = Category::with('products')->paginate(10);
        return view('admin.categories', compact('categories'));
    }
    public function commands()
    {
        $commands = Command::with(['products', 'user'])->paginate(10);
        $products = Product::paginate(10);
        return view('admin.commands', compact([ 'commands', 'products' ]));
    }
}
