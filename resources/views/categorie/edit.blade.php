

@extends('admin_base')
@section('css')
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="dela"></div>
        <form method="POST" id="lax">
            <div class="group-control">
                <label for="ref">REFERENCE</label>
                <input type="text" class="form-control" name="ref" value="{{$edit_cat->ref_cat}}">
            </div>

            <div class="group-control">
                <label for="nom">NOM</label>
                <input type="text" class="form-control" name="nom" value="{{$edit_cat->nom_cat}}">
            </div>

            <div class="group-control">
                <label for="des">DESCONTE</label>
                <input type="number" class="form-control" name="des" value="{{$edit_cat->desconte_cat}}">
            </div>

            <div class="group-control">
                <label for="img">IMAGE</label>
                <input type="file" class="form-control" name="photo">
            </div>

            <div class="group-control">
                @if($edit_cat->photo)
                  <img src="{{asset('categorie/'.$edit_cat->photo)}}" alt="" width="70px" height="70px">
                 @endif
            </div>

            <div class="group-control">
                <button type="button" class="btn btn-primary mt-2" onclick="update_cat({{$edit_cat->id}})">Enter</button>
            </div>

        </form>
    </div>
 </div>
   @section('scripts')
   @endsection 
@endsection
   

  
