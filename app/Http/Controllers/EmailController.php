<?php

namespace App\Http\Controllers;

use App\Models\Email;
use App\Http\Requests\StoreEmailRequest;
use App\Http\Requests\UpdateEmailRequest;

class EmailController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(StoreEmailRequest $request)
    {
        $email = $request->email;

        Email::create([
            'email' => $email
        ]);
        return to_route('home')->with('success', 'we will contact you soon');
    }

    /**
     * Display the specified resource.
     */
    public function infos()
    {
        return to_route('contact')->with('success', 'thank you, we will contact you soon');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Email $email)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEmailRequest $request, Email $email)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Email $email)
    {
        //
    }
}
