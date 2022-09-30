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
                    <div class="col-xl-10 offset-xl-1 col-lg-8 offset-lg-2">
                        <div class="special_content">
                            <div class="details_title" style="color: deeppink;font-family:cooper">List of employees !</div>
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
                                <th>Name</th>
                                <th>Email</th>
                                <th>CPF</th>
                                <th>Hotel</th>
                                <th>Department</th>
                                <th>status</th>
                                <th>premium</th>
                                <th>action</th>
                            </h3>
                        </tr>
                    </thead>
    
                    <tbody>
                       @foreach ($f as $item)
                       <tr>
                        <td class="mt-2" style="color: rgb(10, 171, 117);font-family:cooper">{{$item->name_f}}</td>
                        <td class="mt-2">{{$item->email_f}}</td>
                        <td class="mt-2" style="color: rgba(237, 242, 244, 0.996);font-family:cooper">{{$item->cpf_f}}</td>
                        <td class="mt-2" style="color: rgb(247, 41, 124);font-family:cooper">{{$item->categorie->nom_cat}}</td>
                        <td class="mt-2" style="color: rgb(41, 247, 65);font-family:cooper">{{$item->departement->name_dep}}</td>


                        @if ($item->statut==0)
                        <td class="mt-2" style="color: rgb(247, 41, 124);font-family:cooper">Employee</td>
                         @else
                         <td class="mt-2" style="color: rgb(41, 247, 65);font-family:cooper">Administrator</td>

                        @endif



                        <td class="mt-2">% {{$item->prime_f}}</td>
                        <td>
                            <a href="{{url('template/pagamento/'.$item->id)}}" style="color: rgb(255, 110, 20);font-family:cooper"><i class="fa-solid fa-file-invoice-dollar"></i></a>
                        </td>
                        
                        
                    </tr>
                  
                       @endforeach
                    </tbody>
                
                  </table>
                
                  <div class="row">
                    <div>
                        <button type="button" class="btn btn-light" style="margin-left:10px;margin-top:3%; font-family:cooper;background-color: rgb(11, 40, 47);color:cyan" onclick="list_prime()">Premium</button>


                       </div>
                </div>

               <div style="margin-left:55px ;margin-top:13px"> {{$f->links()}}</div>
             </div>

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

  