@extends('layout.layout')

@section('headcontent')
    Modifier 
@endsection

@section('subheadcontent')
    List des parentoptions > Edite > {{$parentoption->title}}
@endsection



@section('content')



   <h5 class="card-titre">Ajouter Une Nouvelle parentoption</h5>
   <div class="" id="" style="">
       <form method="post" action="/parentoption/update">
           {{ csrf_field() }}

           <input type="hidden" name="id" value="{{ $parentoption->id }}"/> 
           <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nom</label>
               <div   class="col-sm-10"><input value="{{$parentoption->title}}" required="" name="title" id="nameVoiture" placeholder="Nom" type="text" class="form-control"></div>
           </div>

           

           <div class="position-relative row form-check">
               <div class="col-sm-10 offset-sm-2">
                   <input class="btn btn-primary" value="Enregistrer" naeme="sub" type="submit">
               </div>
           </div>
       </form>
       
   </div>
    


@endsection