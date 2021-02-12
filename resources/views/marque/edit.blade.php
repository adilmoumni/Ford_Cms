@extends('layout.layout')

@section('headcontent')
    Modifier 
@endsection

@section('subheadcontent')
    List des Marques > Edite > {{$marque->name}}
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



   <h5 class="card-title">Ajouter Une Nouvelle marque</h5>
   <div class="" id="" style="">
       <form method="post" action="/marque/update">
           {{ csrf_field() }}

           <input type="hidden" name="id" value="{{ $marque->id }}"/> 
           <div class="position-relative row form-group"><label for="exampleEmail" class="col-sm-2 col-form-label">Nom</label>
               <div   class="col-sm-10"><input value="{{$marque->name}}" required="" name="name" id="nameVoiture" placeholder="Nom" type="text" class="form-control"></div>
           </div>

           <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">File</label>
               <div class="col-sm-10"><input required="" name="image" accept="image/x-png,image/gif,image/jpeg" id="image" type="file" class="form-control-file">
                   <small class="form-text text-muted"></small>
               </div>
           </div>

           <div class="position-relative row form-check">
               <div class="col-sm-10 offset-sm-2">
                   <input class="btn btn-primary" value="Enregistrer" naeme="sub" type="submit">
               </div>
           </div>
       </form>
       
   </div>
    


@endsection