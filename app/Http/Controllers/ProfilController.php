<?php

namespace App\Http\Controllers;

use App\Models\Profil;
use Illuminate\Http\Request;

class ProfilController extends Controller
{
    public function index() {
        $url = config('app.url');
        $profils = Profil::all();
        $title = 'Liste profils';
        return view('profil_liste', compact('profils', 'title', 'url'));
    }

    public function auth(Request $request) {
        $profil = Profil::where('email', '=', $request['email'])
                  ->where('password', '=', md5($request['password']))
                  ->first();
        if ($profil == null) {
            $this->auth_form();
        }
        $title = 'Dashboard';
        return view('back.stats', compact('title'));
    }

    public function getStats() {
        $title = 'Dashboard';
        return view('back.stats', compact('title'));
    }

    public function auth_form()
    {
        $url = config('app.url');
        $title = 'Login profil';
        return view('back.profil_login', compact('title', 'url'));
    }

    public function store(Request $request)
    {
        $url = config('app.url');
        $profils = Profil::create($request->all());
        $title = 'Ajout profil';
        return view('profil_creer', compact('profils', 'title', 'url'));
    }

    public function store_form()
    {
        $url = config('app.url');
        $title = 'Ajout profil';
        return view('profil_creer', compact('title', 'url'));
    }

    public function show($id)
    {
        $url = config('app.url');
        $profils = Profil::find($id);
        $title = 'Fiche profil';
        return view('profil_fiche', compact('profils', 'title', 'url'));
    }

    public function update(Request $request, $id)
    {
        $url = config('app.url');
        $profils = Profil::find($id);
        $profils->update($request->all());
        $title = 'Fiche profil';
        return view('profil_fiche', compact('profils', 'title', 'url'));
    }

    public function destroy($id)
    {
        $url = config('app.url');
        $profils = Profil::find($id);
        $profils->delete();
        $title = 'Fiche profil';
        return view('profil_fiche', compact('profils', 'title', 'url'));
    }

    public function logout() {

    }
}
