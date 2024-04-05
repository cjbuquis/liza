<?php

namespace App\Http\Controllers\Api;

use Illuminate\Http\Request;
use App\Models\Prompt;
use App\Http\Controllers\Controller;
use App\Http\Requests\PromptsRequest;



class PromptsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return Prompt::all();
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
    public function store(PromptsRequest $request)
    {
        $validated = $request->validated();

        $Prompt = Prompt::create($validated);

        return $Prompt;
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
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
        $Prompt = Prompt::findOrFail($id);
 
        $Prompt->delete();
        
        return $Prompt;
    }
}
