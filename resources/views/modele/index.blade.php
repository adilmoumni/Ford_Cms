
@extends('..layout.layout')


@section('headcontent')
    List des modeles
@endsection

@section('subheadcontent')
    List des modeles
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

@section('add')

<div class="main-card mb-3 card">
    <div class="card-body">
        <h5 class="card-title">Ajouter Une Nouvelle modele</h5>
        <div class="collapse" id="collapseExample123" style="">
            <form method="post" action="modele/create">
                {{ csrf_field() }}

                

                <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Marque</label>
                    <div class="col-sm-10">
                        <select name="idMarque" id="idMarque" class="form-control">
                            <option>Faite votre choix</option>
                            @foreach($marques as $m)
                                <option value="{{ $m->id }}">{{ $m->name }}</option>
                            @endforeach
                       
                        </select>
                    </div>
                </div>

                <div class="position-relative row form-group">
                    <label for="exampleEmail" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10"><input required="" name="name" id="nameVoiture" placeholder="Nom" type="text" class="form-control"></div>
                </div>


                <div class="position-relative row form-check">
                    <div class="col-sm-10 offset-sm-2">
                        <input class="btn btn-primary" value="Enregistrer" naeme="sub" type="submit">
                    </div>
                </div>
            </form>
            
         </div>
    </div>
    <div class="card-footer">
        <button type="button" data-toggle="collapse" href="#collapseExample123" class="btn btn-primary collapsed" aria-expanded="false">Ouvrir</button>
    </div>
</div>

@endsection



<table id="myTable" class="mb-0 table table-striped" style="overflow: scroll">
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Logo</th>          
            <th>Date Creation</th>
            <th>Date Update</th>

            <th>Action</th>
           

        </tr>
    </thead>
    <tbody>
        @foreach($modeles as $m)
            <tr id="row_{{ $m->id}}">
            <input type="hidden" class="delete_val" value="{{ $m->id }}" />
            <td>{{ $m->id}}</td>
            <td>{{ $m->name}}</td>
            <td>{{ $m->name}}</td>
            <td><img style="max-height: 100px" src=" {{ $m->name}} " />  </td>
            <td> {{ $m->created_at }}</td>
            <td> {{ $m->updated_at }}</td>

           

            <td>

                
           <a  href='' title='Supprimer' data-toggle='tooltip'><span class='pe-7s-close-circle delete'></span></a>
           <a  href={{"modele/edit/$m->id"}} title='Editer' data-toggle='tooltip'><span class='pe-7s-pen'></span></a>
           </td>
        </tr>
       
            
        @endforeach

    </tbody>
</table>



@endsection


@section('script')
<script>


    $(document).ready(function () {

        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"').attr('content')
            }
        });


        $('.delete').click(function(e){
            e.preventDefault();

            var delete_id = $(this).closest("tr").find('.delete_val').val();

            swal({
            title: "Êtes-vous sûr?",
            text: "Une fois supprimé, vous ne pourrez plus récupérer ce fichier !",
            icon: "warning",
            buttons: true,
            dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {

                    var data = {
                        "_token" : $('input[name="csrf-token"]').val(),
                        "id": delete_id,
                    };

                    $.ajax({
                        type: "DELETE",
                        url: '/modele/delete/'+ delete_id,
                        data: data,
                        success: function (response) {
                            swal(response.status, {
                                icon: "success",
                            }).then((result) => {
                                $('#row_' + delete_id).remove();
                            });
                        }
                    });
                }
            });
        });

    }); 
</script>

    
@endsection
