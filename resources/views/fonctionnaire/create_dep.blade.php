@extends('admin_base')
@section('content')
<div class="container">
    <div class="sibo"></div>
    <div class="row">
        <form method="POST" id="chib">
            <div class="group-control">
                <label for="fistname">Firstname</label>
                <input type="text" class="form-control" name="firstname_f">
            </div>

            <div class="group-control">
                <label for="ref">Name</label>
                <input type="text" class="form-control" name="name_f">
            </div>


            <div class="group-control">
                <label for="ref">email</label>
                <input type="email" class="form-control" name="email_f">
            </div>


            <div class="group-control">
                <label for="ref">cpf</label>
                <input type="number" class="form-control" name="cpf_f" placeholder="informer juste... sans caractere">
            </div>

            <div class="group-control">
                <label for="ref">Salaire</label>
                <input type="number" class="form-control" name="salaire_f">
            </div>


            <div class="group-control">
                <label for="ref">Prime</label>
                <input type="number" class="form-control" name="prime_f">
            </div>
            <div class="group-control">
              
                <input type="radio" name="typ_funct" value="Journalier">Journalier
                <input type="radio" name="typ_funct" value="Hebdomadaire">Hebdomadaire
                <input type="radio" name="typ_funct" value="mensuel">Mensuel
                <input type="radio" name="typ_funct" value="annuel">Annuel
             

            </div>


     <div class="group-control">
                <label for="ref">DEPARTEMENT</label>
                    <select name="departement" id="departement">
                       @foreach ($depart as $item)
                       <option value="{{$item->id}}">{{$item->name_dep}}</option>
                       @endforeach
                    </select>
            </div>

            <div class="group-control">
                <label for="ref">HOTEL</label>
                    <select name="categorie" id="categorie">
                       @foreach ($cate as $item)
                       <option value="{{$item->id}}">{{$item->nom_cat}}</option>
                       @endforeach
                    </select>
            </div>

            <div class="group-control">
                 <button type="button" class="btn btn-primary mt-2" onclick="add_f()">Enter</button> 
            </div>
        </form>
    </div>
</div>


  @section('scripts')
  @endsection  
@endsection