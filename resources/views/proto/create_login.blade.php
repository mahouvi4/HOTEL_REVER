<!DOCTYPE html>
<html lang="en">
<head>
<title>The River</title>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="The River template project">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
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
    
    <div class="super_container">
        <div class="special" style="margin-top:65px">
    
            <div class="container">
                <div class="row">
                    <div class="col-xl-8 offset-xl-2 col-lg-8 offset-lg-2">
                        <div class="special_content">
                            <div class="details_title" style="color: deeppink;font-family:cooper">LOGIN !</div>
                            <div class="details_list">
                                <ul>
                                                  
        <div class="contact_form_container">
            <div class="hellx"></div>
            <form method="POST" class="contact_form" id="tingx">
                <div class="row">
                   
                    <div class="col-md-6 input_container">
                        <input type="email" class="contact_input mt-3" placeholder="Your email address" name="emailx" required="required">
                    </div>
        
                    <div class="col-md-6 input_container">
                        <input type="password" class="contact_input mt-3" placeholder="Password" name="password1" required="required">
                    </div>
        
         </div>
                <button type="button" class="book_now_button" onclick="store_login()" style="background-color:aqua">Send</button>
                   <div><a href="{{url('template/create_user')}}">Opening an account?</a></div>
               
        
        
            </form>
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
    function store_login(){
       var formdata = new FormData($('#tingx')[0]);
            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
       $.ajax({
          type:"post",
          url:"{{url('template/store_login')}}",
          data:formdata,
          processData:false,
          contentType:false,
            success:function(response){
               if(response.status==300){
               $(".hellx").html(response.message).addClass('alert alert-danger');
             }else{
              window.location.href="{{url('/')}}";
             }
          }
       });
    }
</script>
</body>
</html>

  