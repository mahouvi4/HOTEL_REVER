<!DOCTYPE html>
<html lang="en">
<head>
<title>The River</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" 
crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.theme.default.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/animate.css')}}">
<link href="{{asset('plugins/jquery-datepicker/jquery-ui.css')}}" rel="stylesheet" type="text/css">
<link href="{{asset('plugins/colorbox/colorbox.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('styles/main_styles.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/responsive.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/booking.css')}}">
<link rel="stylesheet" type="text/css" href="{{asset('styles/booking_responsive.css')}}">  
<meta name="csrf-token" content="{{ csrf_token() }}">

<body style="background-color:darkslategray">
    
  

    @include('modal2')
    <div class="super_container">
        <div class="special" style="margin-top:65px">
    
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="special_content">
                            <div class="details_title" style="color: rgb(20, 235, 255);font-family:cooper">Reservation list of:{{$clio->name}}
                                <td class="mt-2" style="color: rgb(243, 82, 147)"></td>
                            </div>
                            <div class="details_list">
                                <ul>
                                            
        <div class="contact_form_container">
           
             <div class="row">
                <div class="col-lg-3">
                    
                    <div class="about_images d-flex flex-row align-items-center justify-content-between flex-wrap">
                       
                          <img src="{{asset('images/about_2.png')}}">
                        
                    </div>
                    
                </div>
              
             

                <table class="table table-hover" style="box-shadow: 0 25px 25px rgba(3, 76, 94, 0.885)">
                   
                    <thead>
                       
                        <tr>
                           
                            <h3>
                                
                                <th>CHECK IN</th>
                                <th>CHECK OUT</th>
                                <th>N_DAY</th>
                                <th>STATUS</th>
                                <th>ROOM</th>
                                <th>PRICE</th>
                                <th>N_ADULT</th>
                                <th>N_CHILD</th>
                                <th>TOTAL</th>
                                <th>ACTION</th>
                           
                            </h3>
                        </tr>
                    </thead>
    
                    <tbody>
                        @foreach ($reserv_cli as $item)
                        <tr>
                         <td class="mt-2"> {{$item->date1}}</td>
                         <td class="mt-2" style="color: rgba(237, 242, 244, 0.996);font-family:cooper">{{$item->date2}}</td>
                         <td class="mt-2" style="color: rgb(41, 209, 247);font-family:cooper">{{$item->nbr_j}}</td>
 
                         
                         @if ($item->statut==0)
                          <td class="mt-2" style="font-size: 2rem;color:rgb(247, 41, 124)"><i class="fa-solid fa-xmark"></i>
                          </td>
                           @else
                           <td class="mt-2" style="color:rgb(41, 247, 65)"><i class="fa-solid fa-check"></i></td>
 
            
                          @endif
                          <td class="mt-2" style="color: rgb(41, 209, 247);font-family:cooper">{{$item->nom_ch}}</td>
                          <td class="mt-2" style="color: rgb(247, 41, 41);font-family:cooper">€ {{$item->prix}}</td>
                          <td class="mt-2" style="color: rgb(134, 247, 41);font-family:cooper">{{$item->n_adult}}</td>
                          <td class="mt-2" style="color: rgb(223, 41, 247);font-family:cooper">{{$item->n_child}}</td>
                          <td class="mt-2" style="color: rgb(8, 92, 43);font-family:cooper">€ {{$item->total}}</td>

 
                        
                         <td>
                            <a href="#" style="color: rgb(220, 255, 20);font-family:cooper"><i class="fa-solid fa-pen-to-square"></i></a>
                            <a href="#" style="color: rgb(255, 20, 20);font-family:cooper"><i class="fa-solid fa-trash-can"></i></a>
 
                         </td>
                         
                         
                     </tr>
                        @endforeach
                    </tbody>
                    
                  
                  </table>
                 
                 <div class="row">
                    <a href="{{url('template/list_cli')}}"><button type="button" class="btn btn-primary oolo" style="margin-left:10px;margin-top:3%; font-family:cooper;background-color: rgb(11, 40, 47);color:cyan">Return</button>
                    </a> 
                 </div>
             </div>
             <div style="margin-left:95px ;margin-top:-30px"> {{$reserv_cli->links()}}</div>

        </div>
                                </ul>
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
   function list_prime(){
    $.get("{{url('template/for_prime')}}",{},function(data,status){
          $("#onx2").html(data);
          $("#general2").modal('show');
    });
   }
</script>


<script>
    function update_prime(){
        var formdata = new FormData($("#primo")[0]);
        $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        $.ajax({
            type:"post",
            url:"{{url('template/updat_prime')}}",
            data:formdata,
            processData:false,
            contentType:false,
            success:function(response){
                if(response.status==200){
                    $(".proi").text(response.message).addClass('alert alert-success');
                }
            }
        });
    }
</script>


<script>
    $(document).ready(function(){
        
    });
</script>
</body>
</html>

  