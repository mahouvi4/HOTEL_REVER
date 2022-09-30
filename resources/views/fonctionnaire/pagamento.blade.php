<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
   

     <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />

     <meta name="csrf-token" content="{{ csrf_token() }}">






    <title>Document</title>
    <style>
        body{
            background-color: rgb(26, 37, 37);
        }
        

        .card{
             margin-top:25px ;
             border-radius: 20px;
             box-shadow: 0 25px 25px rgba(3, 76, 94, 0.885);
             background: rgba(26, 29, 28, 0.729);
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
            font-family:aharoni;
            font-size: 2.3rem;
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
            <div class="col-sm-6">
              <div class="card">
                <div class="card-header">Payment of Salary of : <h4 style="color: gold">{{$pagamento->name_f.' '.$pagamento->firstname_f}}</h4></div>

                <div class="card-body">
                  <div class="group-form">
                    <div class="row">
                        @php
                            $salaire_net = 0;
                            
                        @endphp
                        <table class="table">
                            <thead>
                                <th>HOTEL:{{$pagamento->categorie->nom_cat}}</th>
                                
                            </thead>
                          <tbody>

                            
                            <tr id="result_tr" style="display: none;">
                                <td class="trefo">{{$pagamento->prime_f}}</td>
                                <input type="hidden" name="primx" class="lego">

                            </tr>
 

                            <tr>
                                <td>Full Name :{{$pagamento->name_f.' '.$pagamento->firstname_f}}</td>
                            </tr>

                            <tr>
                                <td>Email :{{$pagamento->email_f}}</td>
                            </tr>

                            <tr>
                                <td>Cpf :{{$pagamento->cpf_f}}</td>
                            </tr>

                            <tr>
                                <td>Payment type :{{$pagamento->type_payment_f}}</td>
                            </tr>

                            <tr id="result_trx" style="display: none;">
                              <td class="kola">{{$pagamento->salaire_f}}</td>
                          </tr>

                          <tr id="result_trxx" style="display: none;">
                            <td class="trefa">{{$pagamento->id}}</td>

                        </tr>

                            <tr>
                              <td class="kola">Salary : $ {{$pagamento->salaire_f}}</td>
                          </tr>

                            

                            

                            <tr>
                                <td>Department :{{$pagamento->departement->name_dep}}</td>
                            </tr>

                           
                            
                             <tr>
                                @if ($pagamento->statut==0)
                                <td style="color: chartreuse">Statut:ACTIF</td>
                                @endif
                            </tr>
                                
   

                          </tbody>
                          <tfoot>
                            <a href="{{url('template/edito_fun/'.$pagamento->id)}}"><i class="fa-solid fa-pen-to-square"></i></a>
                        </tfoot>
                          
                        </table>

                    
                    </div>
                </div>
               
                </div>
              </div>
            </div>
            <div class="col-sm-6">
              <div class="card">
                <div class="card-body">
                  <h5 class="card-title">Payment area</h5>
                  <h5 class="card-title"><a href="{{url('template/list_pagamento/'.$pagamento->id)}}">Payment list<-</a></h5>


                  <div class="emanfa"></div>
                  <div class="row">
                        
                    <form method="POST" id="final">
                        
                    <div class="eco mt-5">
                        Date:<input type="date" class="date_p" name="date_p">
                       
                    </div>

                    <div class="eco mt-5">
                        <th>Premium:</th>
                        <td class="prime_f">{{$pagamento->prime_f}}%</td>
                        <input type="hidden" name="primx" class="prim_p">

                    </div>

                    <div class="eco mt-5">
                      <th>Salary:</th>
                      <td class="prime_f">$ {{$pagamento->salaire_f}}</td>

                  </div>



                    <div class="eco mt-5">
                        <th>Net salary:</th>
                          <tbody>
                            <tr>
                                @php
                                        $salaire_net = $pagamento->prime_f/100 * $pagamento->salaire_f + $pagamento->salaire_f;
            
                                @endphp
            
                                <td class="kioka">$ {{$salaire_net}}</td>
                                <input type="hidden" class="sal_net" name="sal_net">
                               
                            </tr>
                          </tbody>
                    </div>

                    
                     
                  </div>
                  <input type="hidden" name="funcion" class="lel">

                  <div class="form-group mt-4">
                   <button type="button" class="btn btn-primary" id="lailo">Pay</button>

                  </div>
              
    
                    </form>
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