@extends('admin_base')

@section('content')
<div class="container">
    <div class="row">
        <table class="table">
            <thead>
                <tr>
                    <th><button type="button" class="btn btn-danger kol">X</button></th>
                    <th>Reference</th>
                    <th>chambre</th>
                    <th>prix</th>
                    <th>desconte</th>
                    <th>statut</th>
                    <th>popularite</th>
                    <th>image</th>
                    <th>gallery</th>
                    <th>divers</th>
                    <th>action</th>
                </tr>
            </thead>

             <tfoot>
                <tr>
                    <th><button type="button" class="btn btn-danger kol">X</button></th>

                    <th>Reference</th>
                    <th>chambre</th>
                    <th>prix</th>
                    <th>desconte</th>
                    <th>image</th>
                    <th>gallery</th>
                    <th>divers</th>
                    <th>action</th>
                </tr>
             </tfoot>

              <tbody>
                @foreach ($show_chr as $item)
                <tr>
                    <td><input type="checkbox" class="fex" value="{{$item->id}}"></td>
                    
                     <td>{{$item->ref_ch}}</td>
                     <td>{{$item->nom_ch}}</td>
                     <td>{{$item->prix_ch}}</td>
                     <td>{{$item->desconte_ch}}</td>
                     <td>{{$item->statut}}</td>
                     <td>{{$item->popularite}}</td>
                     <td><img src="{{asset('chambre/'.$item->photo)}}" alt="" width="70px" height="70px"></td>
                   
                     <td>
                        @foreach ($item->images_hot as $itom)
                        <img src="{{asset('chambre/'.$itom->photos)}}" alt="" width="70px" height="70px"  data-image={{$itom->id}} class="hox"  onclick="delete_gallery({{$itom->id}})">  
                         @endforeach
                       </td>

                    <td>
                        @foreach ($item->resto as $resta)
                        <img src="{{asset('chambre/'.$resta->photox)}}" alt="" width="70px" height="70px" data-image={{$resta->id}} class="hax" onclick="delete_resto({{$resta->id}})">  
 
                        @endforeach
                    </td>

                    <td>
                        <button type="button" class="btn btn-warning" onclick="edit_chr({{$item->id}})">Edit</button>
                        <button type="button" class="btn btn-danger">Delete</button>
                    </td>
                </tr>
                @endforeach
              </tbody>
        </table>
    </div>
   </div>
  
   @section('scripts')
   @endsection 
@endsection





   


  