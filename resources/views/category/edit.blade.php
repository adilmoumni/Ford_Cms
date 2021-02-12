@extends('layout.layout')

@section('headcontent')
    Modifier 
@endsection

@section('subheadcontent')
    List des categorys > Edite > {{$category->name}}
@endsection


{{-- Add Multiple Menu in layout  --}}

@section('parentoptionmenu')
    @foreach($parentoptions as $m2)
        
        <li class="">
            <a href="parentoption/detail/{{ $m2->id }}" aria-expanded="false">
                <i class="metismenu-icon pe-7s-diamond"></i>
                    {{$m2->title}}
                <i class="metismenu-state-icon  caret-left"></i>
            </a>
        
        </li>

    @endforeach
@endsection
{{--  --}}



@section('content')



   <h5 class="card-title">Ajouter Une Nouvelle category</h5>
   <div class="" id="" style="">
       <form method="post" action="/category/update">
           {{ csrf_field() }}

           <input type="hidden" name="id" value="{{ $category->id }}"/> 
           <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nom</label>
               <div   class="col-sm-10"><input value="{{$category->name}}" required="" name="name" id="nameVoiture" placeholder="Nom" type="text" class="form-control"></div>
           </div>

           

           <div class="position-relative row form-check">
               <div class="col-sm-10 offset-sm-2">
                   <input class="btn btn-primary" value="Enregistrer" naeme="sub" type="submit">
               </div>
           </div>
       </form>
       
   </div>
    


   
@endsection