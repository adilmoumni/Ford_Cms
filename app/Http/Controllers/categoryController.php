<?php

namespace App\Http\Controllers;

use App\Models\category;
use App\Models\parentoption;
use Illuminate\Http\Request;

class categoryController extends Controller
{
    public function index()
    {
        $parentoptions = parentoption::all();
        $categorys = category::all();
       
        return view('category.index' , [
            'categorys' => $categorys,
            'parentoptions' =>$parentoptions
        ]);
    }

    public function delete($id)
    {
        $category = category::findOrFail($id);
        $category->delete();
        return response()->json(['status'=>'category supprimer avec succées']);
    }


    public function create(Request $r)
    {

        $m = new category();

            $m->name = $r->name;            
            $m->save();
    
           
        return redirect('category');
    }

   
    public function edit($id)
    {
        $parentoptions = parentoption::all();
        $category = category::find($id);
        if($category != null)
        {
            return view('category.edit' , [
                'category' => $category,
                'parentoptions'=>$parentoptions
            ]);
        }
        
    }

    
    public function update(Request $request)
    {
        $category = category::find($request->id);

        $category->name= $request->name;
        $category->save();

        return redirect('category');
    }

  
}
