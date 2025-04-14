<?php
namespace App\Http\Controllers\site;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

Class HomeController extends Controller {

    public function home(Request $request) {
        $mostSells= Article::All();    
        return view('welcome', compact('mostSells'));
    }

    public function homme(Request $request){
        $mostSells = Article::where('genre','=','2')->get();
        //dd($mostSells);
        return view('Homme', compact('mostSells'));
        
    }
    public function femme(Request $request){
        $mostSells = Article::where('genre','=','1')->get();
        //dd($mostSells);
        return view('Femme', compact('mostSells'));
    }
}