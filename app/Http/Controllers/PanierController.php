<?php

namespace App\Http\Controllers;

use App\Models\Panier;
use App\Http\Requests\StorePanierRequest;
use App\Http\Requests\UpdatePanierRequest;
use Illuminate\Support\Facades\Request;

class PanierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $paniers = panier::orderBy('updated_at', 'desc')->get();
        
        
        return view('site.panier.index', compact('paniers'));
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.panier.create');
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorePanierRequest $request)
    {
        //
        $data = $request->getData();

        Panier::create($data);
        return redirect()->route('panier.index');
    }
      

    /**
     * Display the specified resource.
     */
    public function show(Panier $panier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $panier = panier::findOrfail($id);
        return view('admin.panier.edit', compact('panier.edit'));
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePanierRequest $request, Panier $panier)
    {
        $data = $request->getData();

        Panier::create($data);
        return redirect()->route('panier.index');
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Panier $panier)
    {
        //
    }

    public function add(StorePanierRequest $request) {
        try {
            // Récupérer les données validées à partir des champs définis dans getData()
            $data = $request->only($request->getData());
            
            // Définir l'état à 0 (par exemple : panier en cours)
            $data['etat'] = 0;
            
            // Créer un nouvel enregistrement dans la table Panier
            $panier = Panier::where([
                ['user_id', '=', $data['user_id']],
                ['etat', '=', 0]
            ])->first();
            if ($panier) {
                $panier->quantite +=$data['quantite'];
                $panier->save();
            }else {
                $panier = Panier::createOrUpdate($data);
            }
            
            // Compter le nombre d'articles dans le panier pour l'utilisateur avec etat = 0
            $num = Panier::where([
                ['user_id', '=', $data['user_id']],
                ['etat', '=', 0]
            ])->count();
            
            // Si la création s'est bien déroulée, renvoyer une réponse JSON positive
            if ($panier) {
                return response()->json([
                    'message' => 'Article ajouté au panier avec succès !!!',
                    'num' => $num
                ], 200);
            }
            
            // Sinon, renvoyer une réponse indiquant l'échec de l'opération
            return response()->json([
                'message' => 'Un problème est survenu lors de l\'ajout de l\'article'
            ], 500);
            
        } catch (\Throwable $th) {
            // En cas d'erreur, retourner l'erreur en réponse JSON
            return response()->json([
                'error' => $th->getMessage()
            ], 500);
        }
    }

    public function paye(Request  $request, $id){
        $panier = Panier::findOrFail($id);
        $panier->etat = 2;
        $panier->save();
        return redirect()->route('panier.index');
    }
    public function annule(Request  $request, $id){
        $panier = Panier::findOrFail($id);
        $panier->etat = 3;
        $panier->save();
        return redirect()->route('panier.index');
    }
}
