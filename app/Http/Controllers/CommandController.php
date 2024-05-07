<?php

namespace App\Http\Controllers;

use App\Models\Command;
use App\Http\Requests\StoreCommandRequest;
use App\Http\Requests\UpdateCommandRequest;
use App\Models\Product;
use Illuminate\Support\Facades\Auth;

class CommandController extends Controller
{

    public function __construct()
    {
        // $this->middleware('admin')->except(['index', 'show']);
        $this->middleware('auth')->except(['index', 'show']);
    }    
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user_id = Auth::id();
        $commands = Command::where('user_id', 'like', '%' . $user_id . '%')->with('products')->get();
        $products = Product::all();
        // $commands = Command::with('products')->get();
        return view('command.shoppingCart', compact( ['commands', 'products'] ));
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
    public function store(StoreCommandRequest $request)
    {
        $user_id = auth()->user()->id;
        $product = Product::findOrFail($request->product_id);
        $product_id = $product->id;
        $quantity = $request->quantity;
        $price = $product->price;
        $total_price = $quantity * $price;
        
        Command::create([
            'user_id' => $user_id,
            'product_id' => $product_id,
            'quantity' => $quantity,
            'total_price' => $total_price
        ]);

        $stock_reset = $product->quantity - $quantity;

        // dd($stock_reset);

        $product->update([
            'quantity' => $stock_reset
        ]);

        return to_route('command.index')->with('success', 'command added to your panel');
    }

    /**
     * Display the specified resource.
     */
    public function show(Command $command)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Command $command)
    {
        return view('command.edit', compact('command'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommandRequest $request, Command $command)
    {
        $quantity = $request->quantity;
        $product = Product::findOrFail($request->product_id);
        $differece = 0;

        if($request->quantity > $command->quantity){
            $differece = $request->quantity - $command->quantity;
            $newQ = $product->quantity - $differece;
        }
        elseif($command->quantity > $request->quantity){
            $differece = $command->quantity - $request->quantity;
            $newQ = $product->quantity + $differece;
        }

        $product->update([
            'quantity' => $newQ
        ]);

        $command->update([
            'quantity' => $quantity
        ]);

        return to_route('command.index')->with('success', 'command updated !');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Command $command)
    {
        $product = Product::findOrFail($command->product_id);
        $newQ = $product->quantity + $command->quantity;
        $product->update([
            'quantity' => $newQ
        ]);
        $command->delete();
        return to_route('command.index')->with('success', 'command deleted from panel !');
    }
}
