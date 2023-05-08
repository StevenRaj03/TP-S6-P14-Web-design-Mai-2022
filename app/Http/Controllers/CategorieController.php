<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use Illuminate\Http\Request;

class CategorieController extends Controller
{
    public function index() {
        $url = config('app.url');
        $categories = Categorie::all();
        $title = 'Liste categories';
        return view('categorie_list', compact('categories', 'title', 'url'));
    }

    public function store(Request $request)
    {
        $url = config('app.url');
        $categories = Categorie::create($request->all());
        $title = 'Ajout categorie';
        return view('categorie_creer', compact('categories', 'title', 'url'));
    }

    public function store_form()
    {
        $url = config('app.url');
        $title = 'Ajout categorie';
        return view('categorie_creer', compact('title', 'url'));
    }

    public function show($id)
    {
        $url = config('app.url');
        $categories = Categorie::find($id);
        $title = 'Fiche categorie';
        return view('categorie_details', compact('categories', 'title', 'url'));
    }

    public function update(Request $request, $id)
    {
        $url = config('app.url');
        $categories = Categorie::find($id);
        $categories->update($request->all());
        $title = 'Fiche categorie';
        return view('categorie_details', compact('categories', 'title', 'url'));
    }

    public function destroy($id)
    {
        $url = config('app.url');
        $categories = Categorie::find($id);
        $categories->delete();
        $title = 'Fiche categorie';
        return view('categorie_details', compact('categories', 'title', 'url'));
    }
}
