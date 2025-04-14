<?php

namespace App\Http\Controllers;

use App\Models\Marque;
use Illuminate\Http\Request;

class MarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $marques = marque::All();
        return view('admin.marque.index', compact('marques'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.marque.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)

    {
     
        $validated = $request->validate([
            'libelle' => 'required|max:255',
            'genre' => 'required',
            'image_principale' => 'nullable'

        ]);

        
        if ($request->hasFile('image_principale')) {
            $imageName= time().'.'.$request->image_principale->extension();
            $request->image_principale->move(public_path('upload_images'),$imageName);
            $validated['image_principale']= $imageName;
                
         }

        Marque::create($validated);

        return redirect()->route ('marque.index');
    }
    /**
     * Display the specified resource.
     */
    public function show(Marque $marque)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $marque = marque::findOrfail($id);

        return view('admin.marque.edit', compact('marque'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'libelle' => 'required|max:255',
            'genre' => 'required',
            'image_principale' => 'nullable'

        ]);

        
        if ($request->hasFile('image_principale')) {
            $imageName= time().'.'.$request->image_principale->extension();
            $request->image_principale->move(public_path('upload_images'),$imageName);
            $validated['image_principale']= $imageName;
                
                }
                  $marque= Marque::findOrFail($id);
                   $marque->update($validated);

                return redirect()->route ('marque.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Marque $marque)
    {
        //
    }
}
