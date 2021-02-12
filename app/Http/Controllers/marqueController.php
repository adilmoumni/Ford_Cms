<?php

namespace App\Http\Controllers;

use App\Models\marque;
use App\Models\parentoption;
use Illuminate\Http\Request;

class marqueController extends Controller
{
   
    public function index()
    {
        $parentoptions = parentoption::all();
        $marques = marque::all();
       
        return view('marque.index' , [
            'marques' => $marques,
            'parentoptions' => $parentoptions

        ]);
    }

    public function delete($id)
    {
        $marque = marque::findOrFail($id);
        $marque->delete();
        return response()->json(['status'=>'Marque supprimer avec succées']);
    }


    public function __invoke(Request $r)
    {

        $m = new marque();

            $m->name = $r->name;
            $m->logo = 'dfkj';
            
            $m->save();
    
           
        return redirect('marque');
    }

   
    public function edit($id)
    {
        $parentoptions = parentoption::all();
        $marque = marque::find($id);
        if($marque != null)
        {
            return view('marque.edit' , [
                'marque' => $marque,
                'parentoptions' =>$parentoptions
            ]);
        }
        
    }

    
    public function update(Request $request)
    {
        $marque = marque::find($request->id);

        $marque->name= $request->name;
        $marque->save();

        return redirect('marque');
    }


}
