
@extends('admin_base')
@section('css')
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="delo"></div>
        <form method="POST" id="lox">
            <div class="group-control">
                <label for="ref">REFERENCE</label>
                <input type="text" class="form-control" name="ref">
            </div>

            <div class="group-control">
                <label for="nom">NOM</label>
                <input type="text" class="form-control" name="nom">
            </div>

            <div class="group-control">
                <label for="des">DESCONTE</label>
                <input type="number" class="form-control" name="des">
            </div>

            <div class="group-control">
                <label for="img">IMAGE</label>
                <input type="file" class="form-control" name="photo">
            </div>

            <div class="group-control">
                <button type="button" class="btn btn-primary mt-2" onclick="add_cat()">Enter</button>
            </div>

        </form>
    </div>
 </div>
   @section('scripts')
   @endsection 
@endsection
   

  
