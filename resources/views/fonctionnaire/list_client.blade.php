<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

     <meta name="csrf-token" content="{{ csrf_token() }}">

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
                          @foreach ($list_cli as $item)
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
                              <td style="color:lawngreen">{{$item->fonctionaire->name_f}}</td>   
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
                            <a href="{{url('adminx')}}"><i class="fa-duotone fa-pen-to-square">Return</i></a>
                        </tfoot>
                          
                        </table>

                    
                    </div>
                </div>
                <div style="margin-top:-5;margin-left:-12px">
                  {{$list_cli->links()}}
                </div>
                </div>
               


              </div>
            </div>
           
          </div>
    </div>
    

  </div>

  <script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TweenMax.min.js')}}"></script>
<script src="{{asset('plugins/greensock/TimelineMax.min.js')}}"></script>
<script src="{{asset('plugins/scrollmagic/ScrollMagic.min.js')}}"></script>
<script src="{{asset('plugins/greensock/animation.gsap.min.js')}}"></script>
<script src="{{asset('plugins/greensock/ScrollToPlugin.min.js')}}"></script>
<script src="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.js')}}"></script>
<script src="{{asset('plugins/easing/easing.js')}}"></script>
<script src="{{asset('plugins/progressbar/progressbar.min.js')}}"></script>
<script src="{{asset('plugins/parallax-js-master/parallax.min.js')}}"></script>
<script src="{{asset('plugins/jquery-datepicker/jquery-ui.js')}}"></script>
<script src="{{asset('plugins/colorbox/jquery.colorbox-min.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>

  

<script>
  var result_style = document.getElementById('#result_tr').style;result_style.display = 'table-row';
</script>

<script>
  var result_style = document.getElementById('#result_trx').style;result_style.display = 'table-row';
</script>

<script>
  var result_style = document.getElementById('#result_trxx').style;result_style.display = 'table-row';
</script>

<script>
    $(document).ready(function(){
         var date_p ,prime_f, salaire_net, statuto, salaire_f,fonctionaire ;
         $(".date_p").on('blur',function(){
           date_p = $(this).val();
            
});

           
        $('.table').each(function() {
           prime_f = $(this).find('td').eq(0).html(); //L'index 0 permet de récupérer le contenu de la première cellule de la ligne
             $(".prim_p").val(prime_f );
        
         
     });

     $('.table').each(function() {
          salaire_f = $(this).find('td').eq(5).html(); //L'index 0 permet de récupérer le contenu de la première cellule de la ligne
          $(".lego").val(salaire_f );
          $(".sal_net").val(Math.abs(prime_f/100*salaire_f)+ parseInt(salaire_f));
         

     });

     
     $('.table').each(function() {
           fonctionaire = $(this).find('td').eq(6).html(); //L'index 0 permet de récupérer le contenu de la première cellule de la ligne
        $(".lel").val(fonctionaire);
         
    });
     
    
         $("#lailo").on('click',function(){
            $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

            $.ajax({
          type:"post",
          url:"{{url('template/add_pagamento')}}",
          data:{
              'date_p': date_p,
              'primx': prime_f,
              'fonctionaire': fonctionaire,
              'sal_net': Math.abs(prime_f/100*salaire_f)+ parseInt(salaire_f),
          },
          
           success:function(response){
            console.log(response);
            if(response.status==200){
              $(".emanfa").html(response.message).addClass('alert alert-success');
            }
          }


         });
          });
     
    });
</script>


<script>

   function edito_func(id){
    $.get("{{url('template/edito_fun')}}/"+id,{},function(data,status){
      
    });
   }


</script>

<script>
  function liste_pagamento(id){
    $.get("{{url('template/list_pagamento/')}}/"+id,{},function(data,status){
       $("#kop").html(data);
    });
  }

  
</script>


 
    </body>

</html>