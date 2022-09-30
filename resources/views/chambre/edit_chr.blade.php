@extends('admin_base')

@section('content')
<div class="container">
    <div class="ewo"></div>
    <div class="row">
        <form method="POST" id="chambo">
            <div class="group-control">
                <label for="ref">Reference</label>
                <input type="text" class="form-control" name="ref" value="{{$edit_chr->ref_ch}}">
            </div>

            <div class="group-control">
                <label for="ref">Nom</label>
                <input type="text" class="form-control" name="nom" value="{{$edit_chr->nom_ch}}">
            </div>

            <div class="group-control">
                <label for="ref">Description</label>
              <textarea name="desc" class="form-control">{{$edit_chr->ref_ch}}</textarea>
            </div>

            <div class="group-control">
                <label for="ref">Prix</label>
                <input type="number" class="form-control" name="prix" value="{{$edit_chr->prix_ch}}">
            </div>

            <div class="group-control">
                <label for="ref">Desconte</label>
                <input type="number" class="form-control" name="desconte" value="{{$edit_chr->desconte_ch}}">
            </div>

            <div class="group-control">
              
                <input type="checkbox"  name="statut" {{$edit_chr->statut=='1' ? "checked" :""}}>Statut
                <input type="checkbox"  name="popularite" {{$edit_chr->popularite=='1' ? "checked" :""}}>Popularite
            </div>

            <div class="group-control">
                <label for="ref">Image</label>
                <input type="file" class="form-control" name="photo">
            </div>

            <div class="group-control">
               @if ($edit_chr->photo)
               <img src="{{asset('chambre/'.$edit_chr->photo)}}" alt="" width="70px" height="70px">
               @endif
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
                       @foreach ($cat as $item)
                       <option value="{{$item->id}}">{{$item->nom_cat}}</option>
                       @endforeach
                    </select>
            </div>

            <div class="group-control">
                 <td>
                    <button type="button" class="btn btn-primary mt-2" onclick="updat_x({{$edit_chr->id}})">Enter</button>
                 <button type="button"  class="btn btn-danger" class="" onclick="deleto_ch({{$edit_chr->id}})">Delete</button>
                 </td>
            </div>
        </form>
    </div>
</div>


    @section('scripts')
    @endsection
@endsection