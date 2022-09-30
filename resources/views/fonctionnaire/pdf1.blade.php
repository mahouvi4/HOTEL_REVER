<!DOCTYPE html>
<html lang="en">
<head>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">


    <title>Document</title>
    <style>
        body{
            background-color: rgb(26, 31, 37);
        }
        

        .card{
             margin-top:100px ;
            
             
             box-shadow: 0 25px 25px rgba(3, 87, 94, 0.9);
             background: rgba(26, 29, 29, 0.729);
             color: blanchedalmond;
             font-family: 
             
        }

        .card-header{
            color:aqua;
            font-family:Matura MT Script Capitals;
            font-size: 1.7rem;
        }
 
        div tbody{
            color:rgb(166, 215, 236);
            font-family: aharoni;
        }

        div thead{
            
            color: rgb(255, 20, 122);
            font-family:Forte;
            font-size: 1rem;
        }


        .card-title{
            color:rgb(242, 80, 35);
            font-family:Matura MT Script Capitals;

        }

       .card  div .eco{
            
            color: rgb(247, 238, 242);
            font-family:Forte;
            font-size: 1.7rem;

       }

     

       
</style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="row">
                <div class="col-sm-12">
                  <div class="card">
                    <div class="card-header">List of all customers</div>
    
                    <div class="card-body">
                      <div class="group-form">
                        <div class="row">
                            @php
                                $salaire_net = 0;
                                
                            @endphp
                            <table class="table">
                                <thead>
                                    <tr>
                                       
                                        <th>NAME</th>
                                        <th>EMAIL</th>
                                        <th>CPF</th>
                                        <th>STATUT</th>
                                        <th>RECEPTIONIST</th>
                                        <th>DATE</th>
                                        <th>ACTION</th>
                                    </tr>
                                    <i class="fa-duotone fa-check"></i>
                                </thead>
                              <tbody>
                              @foreach ($cli as $item)
                              <tr>
                               
                                <td>{{$item->name.' '.$item->name}}</td>
                                <td>{{$item->email}}</td>
                                <td>{{$item->cpf}}</td>  
                                @if ($item->statut==1)
                                <td style="color:rgb(20, 220, 37)"><i class="fa-solid fa-check"></i></td>
                                 @else
                                 <td style="font-size: 2rem;color:crimson"><i class="fa-solid fa-xmark"></i></td>   
    
                                @endif
                                  @if ($item->id_fonctionaire==NULL)
                                  <td style="font-size: 2rem;color:crimson"><i class="fa-solid fa-xmark"></i></td>   
                                  @else
                                  <td style="color:lawngreen">{{session('info_func')[0]->name_f}}</td>   
                                  @endif
                                  <td>{{$item->created_at}}</td>
                                <td>
                                    <a href="#" style="color: rgb(220, 255, 20);font-family:cooper"><i class="fa-solid fa-pen-to-square"></i></a>
                                    <a href="#" style="color: rgb(255, 20, 20);font-family:cooper"><i class="fa-solid fa-trash-can"></i></a>
                                    <a href="{{url('list_reser_cli/'.$item->id)}}" style="color: rgb(20, 20, 255);font-family:cooper"><i class="fa-sharp fa-solid fa-list-check"></i></a>
    
    
    
                                </td>
                              </tr>  
                              @endforeach
                                
                             </tbody>
                              <tfoot>
                                <a href="{{url('template/edito_fun/'.$item->id)}}"><i class="fa-duotone fa-pen-to-square">Edit</i></a>
                            </tfoot>
                              
                            </table>
    
                        
                        </div>
                    </div>
                   
                    </div>
                  
                  </div>
                </div>
               
              </div>
        </div>
        
    
      </div>
</body>
</html>