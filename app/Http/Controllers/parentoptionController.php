<?php

namespace App\Http\Controllers;

use App\Models\parentoption;
use Illuminate\Http\Request;

class parentoptionController extends Controller
{
    public function index()
    {
        $parentoptions = parentoption::all();
       
        return view('parentoption.index' , [
            'parentoptions' => $parentoptions
        ]);
    }

    public function delete($id)
    {
        $parentoption = parentoption::findOrFail($id);
        $parentoption->delete();
        return response()->json(['status'=>'parentoption supprimer avec succées']);
    }


    public function __invoke(Request $r)
    {

        $m = new parentoption();

            $m->title = $r->title;
            
            $m->save();
    
           
        return redirect('parentoption');
    }

   
    public function edit($id)
    {
        $parentoptions = parentoption::all();

        $parentoption = parentoption::find($id);
        if($parentoption != null)
        {
            return view('parentoption.edit' , [
                'parentoption' => $parentoption,
                'parentoptions' => $parentoptions

            ]);
        }
        
    }

    
    public function update(Request $request)
    {
        $parentoption = parentoption::find($request->id);

        $parentoption->title= $request->title;
        $parentoption->save();

        return redirect('parentoption');
    }

    public function detail($id){
        $parentoption = parentoption::find($id);
        return view('parentoption.detail',[
            "parentoption" => $parentoption
        ]);
    }
}
