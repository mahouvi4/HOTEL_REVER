
@extends('admin_base')
@section('css')





@endsection
@section('content')

<div class="container">
    <div class="row">
        <div class="card">
            <div class="card-header">LIST_CATEGORIE</div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th>REFERENCE</th>
                            <th>NOM</th>
                            <th>DESCONTE</th>
                            <th>IMAGES</th>
                            <th>ACTION</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>REFERENCE</th>
                            <th>NOM</th>
                            <th>DESCONTE</th>
                            <th>IMAGES</th>
                            <th>ACTION</th>
                        </tr>
                    </tfoot>
                    <tbody>
                          @foreach ($show_cat as $item)
                                <tr>
                                    <td>{{$item->ref_cat}}</td>
                                    <td>{{$item->nom_cat}}</td>
                                    <td>{{$item->desconte_cat}}</td>
                                    <td><img src="{{asset('categorie/'.$item->photo)}}" alt="" width="70px" height="70px"></td>
                                    <td><button type="button" class="btn btn-warning" onclick="edit_cat({{$item->id}})">Edit</button>
                                    <button type="button" class="btn btn-danger" onclick="delete_cat({{$item->id}})">Delete</button></td>
                                </tr>
                          @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
   </div>
   @section('scripts')

<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap4.min.js"></script>


   <script>
    $(document).ready(function () {
      $('#example').DataTable();
  });
  </script>
   @endsection 
@endsection




