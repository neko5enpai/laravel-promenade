<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Promenade;

class PromenadesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $promenades = Promenade::orderBy('ID', 'desc')->paginate(2);
        return view('promenades.index')->with('promenades', $promenades);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('promenades.creer');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'titre' => 'required',
            'descr' => 'required',
            'pays' => 'required',
            'ville' => 'required',
            'codePostal' => 'required',
            'depart' => 'required',
            'arrivee' => 'required',
            'descr' => 'required'
        ]);
    

    // Créer Promenade
    $promenade = new Promenade;
    $promenade->titre = $request->input('titre');
    $promenade->auteur = $request->input('auteur');
    $promenade->pays = $request->input('pays');
    $promenade->ville = $request->input('ville');
    $promenade->codePostal = $request->input('codePostal');
    $promenade->depart = $request->input('depart');
    $promenade->arrivee = $request->input('arrivee');
    $promenade->descr = $request->input('descr');
    $promenade->save();

    return redirect('/promenades')->with('success', 'Promenade créée');

    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $promenade = Promenade::find($id);
        return view('promenades.show')->with('promenade', $promenade);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $promenade = Promenade::find($id);
        return view('promenades.editer')->with('promenade', $promenade);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'titre' => 'required',
            'descr' => 'required',
            'pays' => 'required',
            'ville' => 'required',
            'codePostal' => 'required',
            'depart' => 'required',
            'arrivee' => 'required',
            'descr' => 'required'
        ]);
    

    // Créer Promenade
    $promenade = Promenade::find($id);
    $promenade->titre = $request->input('titre');
    $promenade->auteur = $request->input('auteur');
    $promenade->pays = $request->input('pays');
    $promenade->ville = $request->input('ville');
    $promenade->codePostal = $request->input('codePostal');
    $promenade->depart = $request->input('depart');
    $promenade->arrivee = $request->input('arrivee');
    $promenade->descr = $request->input('descr');
    $promenade->save();

    return redirect('/promenades')->with('success', 'Promenade mise à jour');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
