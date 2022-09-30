

   
@extends('admin_base')

@section('content')

<div class="container">
    <div class="row">
        <div class="dela"></div>
        <form method="POST" id="ganza">
            <div class="group-control">
                <label for="ref">REFERENCE</label>
                <input type="text" class="form-control" name="ref_dep">
            </div>

            <div class="group-control">
                <label for="nom">NOM</label>
                <input type="text" class="form-control" name="name_dep">
            </div>

                  <div class="group-control">
                <button type="button" class="btn btn-primary mt-2" onclick="store_dep()">Enter</button>
            </div>

        </form>
    </div>
 </div>
   @section('scripts')
  
   @endsection 

   @section('scripts')
   @endsection 
@endsection