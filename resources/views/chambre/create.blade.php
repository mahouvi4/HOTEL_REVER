@extends('admin_base')

@section('content')
<div class="container">
    <div class="eyon"></div>
    <div class="row">
        <form method="POST" id="chb">
            <div class="group-control">
                <label for="ref">Reference</label>
                <input type="text" class="form-control" name="ref">
            </div>

            <div class="group-control">
                <label for="ref">Nom</label>
                <input type="text" class="form-control" name="nom">
            </div>

            <div class="group-control">
                <label for="ref">Description</label>
              <textarea name="desc" class="form-control"></textarea>
            </div>

            <div class="group-control">
                <label for="ref">Prix</label>
                <input type="number" class="form-control" name="prix">
            </div>

            <div class="group-control">
                <label for="ref">Desconte</label>
                <input type="number" class="form-control" name="desconte">
            </div>

            <div class="group-control">
              
                <input type="checkbox"  name="statut">Statut
                <input type="checkbox"  name="popularite">Popularite
            </div>

            <div class="group-control">
                <label for="ref">Image</label>
                <input type="file" class="form-control" name="photo">
            </div>

            <div class="group-control">
                <label for="ref">Gallery</label>
                <input type="file" class="form-control" name="photos[]" multiple>
            </div>

            <div class="group-control">
                <label for="ref">ACTIVITES</label>
                <input type="file" class="form-control" name="photox[]" multiple>
            </div>

            <div class="group-control">
                <label for="ref">CATEGORIE</label>
                    <select name="categorie" id="categorie">
                       @foreach ($categorie as $item)
                       <option value="{{$item->id}}">{{$item->nom_cat}}</option>
                       @endforeach
                    </select>
            </div>

            <div class="group-control">
                 <button type="button" class="btn btn-primary mt-2" onclick="store_ch()">Enter</button> 
            </div>
        </form>
    </div>
</div>
  @section('scripts')
  @endsection  
@endsection
