<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\Categorie;
use App\Models\Marque;
use COM;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $paniers = Article::orderBy('created_at', 'desc')->get();
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        $marques = Marque::all();
        $categories = Categorie::all();
        
        return view('admin.article.create', compact('categories', 'marques'));

    
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $validated = $request->validate([
            'intitule' => 'required|max:255',
            'taille' => 'required|max:50',
            'genre' => 'required',
            'prix_unitaire' => 'required',
            'largeur' => 'nullable',
            'description' => 'nullable',
            'image_principale' => 'nullable',
            'categorie_id'=>'nullable',
            'marque_id' => 'nullable'
        ]);
        
        if ($request->hasFile('image_principale')) {
            $imageName= time().'.'.$request->image_principale->extension();
            $request->image_principale->move(public_path('upload_images'),$imageName);
            $validated['image_principale']= $imageName;
            # code...
        }
        Article::create($validated);

        return redirect()->route('article.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Article $article)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        //
        $article=Article::findOrFail($id);
        // dd($article);
        $categories= Categorie::all();
        $marques= Marque::all();

        return view('admin.article.edit', compact('article', 'categories', 'marques'));

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  $id)
    {
        //
        $validated = $request->validate([
            'intitule' => 'required|max:255',
            'taille' => 'required|max:50',
            'genre' => 'required',
            'prix_unitaire' => 'required',
            'largeur' => 'nullable',
            'description' => 'nullable',
            'image_principale' => 'nullable',
            'categorie_id'=>'nullable',
            'marque_id' =>'nullable'
        ]);
        $article = Article::findOrFail($id);
        if ($request->hasFile('image_principale')) {
            $imageName= time().'.'.$request->image_principale->extension();
            $request->image_principale->move(public_path('upload_images'),$imageName);
            $validated['image_principale']= $imageName;
            # code...
        }
        $article->update($validated);
        return redirect()->route("article.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Article $article)
    {
        //
    }
}
