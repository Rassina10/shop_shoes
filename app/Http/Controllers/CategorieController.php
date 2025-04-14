<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Categorie::All();
        return view('admin.categorie.index', compact('categories'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.categorie.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'libelle' => 'required|max:255',
            'image_principale' => 'nullable',
        ]);

        if ($request->hasFile('image_principale')) {
            $imageName= time().'.'.$request->image_principale->extension();
            $request->image_principale->move(public_path('upload_images'),$imageName);
            $validated['image_principale']= $imageName;
        //
        }
            categorie::create($validated);

            return redirect()->route ('categorie.index');

    }

    /**
     * Display the specified resource.
     */
    public function show(Categorie $categorie)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $categorie = Categorie::findOrfail($id);

       // dd($categorie);
        return view('admin.categorie.edit', compact('categorie'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $validated = $request->validate([
            'libelle' => 'required|max:255',
            'image_principale' => 'nullable',
        ]);

        if ($request->hasFile('image_principale')) {
            $imageName= time().'.'.$request->image_principale->extension();
            $request->image_principale->move(public_path('upload_images'),$imageName);
            $validated['image_principale']= $imageName;
        //
        }
        $categorie = Categorie::findOrFail($id);
            $categorie->update($validated);

            return redirect()->route ('categorie.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Categorie $categorie)
    {
        //
    }
}
