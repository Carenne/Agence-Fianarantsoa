<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\propriete;
use App\Http\Requests\RequettePourPropriete;

class ProprieteControleur extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.proprietes.index', [
            'proprietes' => propriete::orderBy('created_at', 'desc')->paginate(10)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $propriete = new propriete();
        return view('admin.proprietes.form', [
            'propriete' => new propriete(),
       ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(RequettePourPropriete $request)
    {
        //
    }

   
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
