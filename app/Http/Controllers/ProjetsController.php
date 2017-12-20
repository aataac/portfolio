<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Projet;
use Auth;
class ProjetsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $projets = Projet::all();
        return view('welcome',compact('projets'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_index()
    {
        $projets = Projet::all();
        return view('admin_panel.admin_projets',compact('projets'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('projets.create');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function admin_projets_create()
    {
        return view ('admin_panel.admin_projets_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'titre' => 'required|min:2',
            'description' => 'required|min:2'
        ]);
        $projet = new Projet();
        $projet->titre = $request->titre;
        $projet->description = $request->description;
        $projet->save();
        return redirect()->route('admin_projets');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $projets = Projet::find($id);
        return view('projets.projets',compact('projets'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $projet = Projet::find($id);
        return view('admin_panel.admin_projets_edit', compact('projet'));
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
     $request->validate([
           'titre' => 'required|min:2',
           'description' => 'required|min:2'
       ]);

       $projet = Projet::find($id);
       $projet->titre = $request->titre;
       $projet->description = $request->description;
       $projet->save();
       return redirect()->route('admin_projets');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
       $projet = Projet::find($id);
       $projet->delete();
       return redirect()->route('admin_projets'); 
    }

    public function getSignOut()
    {
        Auth::logout();
        return redirect()->route('index');
    }

}

