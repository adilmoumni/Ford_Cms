<?php

namespace App\Http\Controllers;

use App\Models\modele;
use App\Models\parentoption;
use App\Models\marque;
use DB;
use Illuminate\Http\Request;

class modeleController extends Controller
{
    public function index()
    {
        // SELECT model.id , model.name as 'modelName', marque.name as 'marqueName' , marque.logo FROM `model` ,`marque` WHERE marque.id = model.idMarque 
        $modeles = DB::table('model')
        ->join('marque', 'marque.id', '=', 'model.idMarque')
        ->select('model.name as marqueName')
        
        ->get();
        $parentoptions = parentoption::all();
        $marques= marque::all();
        
        echo $modeles;
       
        // return view('modele.index' , [
        //     'modeles' => $modeles,
        //     'parentoptions' => $parentoptions,
        //     'marques' => $marques
        // ]);
    }

    public function delete($id)
    {
        $modele = modele::findOrFail($id);
        $modele->delete();
        return response()->json(['status'=>'modele supprimer avec succées']);
    }


    public function __invoke(Request $r)
    {

        $m = new modele();

            $m->name = $r->name;
            $m->idMarque = $r->idMarque;
            
            $m->save();
    
        return redirect('modele');
    }

   
    public function edit($id)
    {
        $parentoptions = parentoption::all();
        $modele = modele::find($id);
        if($modele != null)
        {
            return view('modele.edit' , [
                'modele' => $modele,
                'parentoptions' =>$parentoptions
            ]);
        }
        
    }

    
    public function update(Request $request)
    {
        $modele = modele::find($request->id);

        $modele->name= $request->name;
        $modele->save();

        return redirect('modele');
    }
}
