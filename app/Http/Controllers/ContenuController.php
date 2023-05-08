<?php

namespace App\Http\Controllers;

use App\Models\Contenu;
use Illuminate\Http\Request;

class ContenuController extends Controller
{
    public function index($isFront) {
        $url = config('app.url');
        $contents = Contenu::all();
        $title = 'Liste contents';
        if ($isFront == 0) {
            return view('back.content_list', compact('contents', 'title', 'url'));
        } else {
            return view('front.content_list', compact('contents', 'title', 'url'));
        }

    }

    public function store(Request $request)
    {
        $url = config('app.url');
        $contents = Contenu::create($request->all());
        $title = 'Ajout content';
        return view('front.content_creer', compact('contents', 'title', 'url'));
    }

    public function store_form()
    {
        $url = config('app.url');
        $title = 'Ajout content';
        return view('front.content_creer', compact('title', 'url'));
    }

    public function show($id)
    {
        $url = config('app.url');
        $contents = Contenu::find($id);
        $title = 'Fiche content';
        return view('front.content_details', compact('contents', 'title', 'url'));
    }

    public function update(Request $request, $id)
    {
        $url = config('app.url');
        $contents = Contenu::find($id);
        $contents->update($request->all());
        $title = 'Fiche content';
        return view('front.content_details', compact('contents', 'title', 'url'));
    }

    public function destroy($id)
    {
        $url = config('app.url');
        $contents = Contenu::find($id);
        $contents->delete();
        $title = 'Fiche content';
        return view('front.content_details', compact('contents', 'title', 'url'));
    }
}
