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
<link rel="stylesheet" type="text/css" href="styles/blog.css">
<link rel="stylesheet" type="text/css" href="styles/blog_responsive.css">

<meta name="csrf-token" content="{{ csrf_token() }}">
@yield('css')
</head>
<body>
	


<div class="super_container">
	
	<!-- Header -->

	<header class="header">
		<div class="header_content d-flex flex-row align-items-center justify-content-start">
			<div class="logo"><a href="#">The River</a></div>
			<div class="ml-auto d-flex flex-row align-items-center justify-content-start">
				<nav class="main_nav">
					<ul class="d-flex flex-row align-items-start justify-content-start">
						<li class="active"><a href="{{url('/')}}">Home</a></li>
						<li><a href="about.html">About us</a></li>
						<li><a href="#">Rooms</a></li>
						<li><a href="blog.html">Blog</a></li>
						<li><a href="contact.html">Contact</a></li>
					</ul>
				</nav>
				   @if (session('info_user'))
				   
				   <div class="book_button"><a href="#" style="background-color: chartreuse;font-family:cooper black;color:black">{{session('info_user')[0]->name}}</a></div>
				   <div class="book_button"><a href="{{url('/')}}"   onclick="deconect_user()" style="background-color: rgb(255, 0, 123);font-family:cooper black;color:black">Sign Up</a></div>

                     @else
					 <div class="book_button"><a href="{{url('template/create_for_login')}}" style="background-color: rgb(255, 0, 123);font-family:cooper black;color:black">Login</a></div>

				   @endif
				<div class="header_phone d-flex flex-row align-items-center justify-content-center">
					<img src="{{asset('images/phone.png')}}" alt="">
					<span style="background-color: rgb(255, 0, 123);font-family:cooper black;color:black">0183-12345678</span>
				</div>

				<!-- Hamburger Menu -->
				<div class="hamburger"><i class="fa fa-bars" aria-hidden="true"></i></div>
			</div>
		</div>
	</header>
	

	<!-- Menu -->

	<div class="menu trans_400 d-flex flex-column align-items-end justify-content-start">
		<div class="menu_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="menu_content">
			<nav class="menu_nav text-right">
				<ul>
					<li><a href="index.html">Home</a></li>
					<li><a href="about.html">About us</a></li>
					<li><a href="#">Rooms</a></li>
					<li><a href="blog.html">Blog</a></li>
					<li><a href="contact.html">Contact</a></li>
				</ul>
			</nav>
		</div>
		<div class="menu_extra">
			<div class="menu_book text-right"><a href="#">Book online</a></div>
			<div class="menu_phone d-flex flex-row align-items-center justify-content-center">
				<img src="{{asset('images/phone-2.png')}}" alt="">
				<span>0183-12345678</span>
			</div>
		</div>
	</div>

	<div class="home">
		<div class="home_slider_container">
			<div class="owl-carousel owl-theme home_slider">
				
				<!-- Slide -->
				<div class="slide">
					<div class="background_image" style="background-image:url('{{asset('images/index_1.jpg')}}')"></div>
					<div class="home_container">
						<div class="container">
							<div class="row">
								  <table class="table">
									
										<tbody class="levo">
											<div class="row">
												<tr>
													<div>
													 <th>Room: <td class="romo" style="color: gold; font-family:aharoni;font-size:19px">ROOM</td></th>
													  <input type="hidden" name="nom_cha" class="yinko">
												 </div>
													 <div>
														 <th>Price:<td class="kwe" style="color: azure; font-family:aharoni;font-size:19px">PRICE</td></th>
												                <input type="hidden" name="prix" class="preco">
													 </div>
													 
													 <div>
														 <th>N_adult:<td class="lazo" style="color: deeppink ;font-family:aharoni;font-size:19px">N_ADULT</td></th>
												            
													 </div>
												 
													 <div>
														 <th>N_child:<td class="laza" style="color: cyan;font-family:aharoni;font-size:19px">N_CHILDREN</td></th>
														
													 </div>
												 <div>
													 <th>N_day:<td class="prazo" style="color: chartreuse;font-family:aharoni;font-size:19px">N_DAY</td></th>
												 
												 <input type="hidden" class="tranx_nbj" name="tranx_nbj">
												 </div>
												 <div>
													 <th>Total:<td class="toto" style="color: rgb(117, 187, 231);font-size:25px;font-family:aharoni">TOTAL</td></th>
												           <input type="hidden" name="totil" class="bihui">
												 </div>
											</div>
												  @if (session('info_user'))
												 
												  <td><input type="hidden" value="{{session('info_user')[0]->id}}"></td>
												  @endif
											</tr>
										 </tbody>
									
								  </table>
	
								<div class="col">
									<div class="home_content text-center">
										<div class="home_title">A Luxury Stay</div>
										<div class="booking_form_container">
											<div class="unao"></div>
											<form method="get" class="booking_form" id="loganx">
												<div class="d-flex flex-xl-row flex-column align-items-start justify-content-start">
													<div class="booking_input_container d-flex flex-lg-row flex-column align-items-start justify-content-start">
														<div><input type="text" class="booking_input booking_input_a booking_in date1" name="date1" placeholder="Check In" onfocus="(this.type='date')" required="required"></div>
														<div><input type="text" class="booking_input booking_input_a booking_out date2" name="date2" placeholder="Check Out" onfocus="(this.type='date')" required="required"></div>
														<div><input type="number" class="booking_input booking_input_b minho" placeholder="adult" name="nadult" required="required"></div>
														  <input type="hidden" name="N_aduli" class="ndulo">
														<div><input type="number" class="booking_input booking_input_b kpevi" placeholder="Children" name="nenf" required="required"></div>
														<input type="hidden" name="N_chili" class="ndula">
														
															<div>
																<select name="chambre" id="chambre" class="booking_input booking_input_b chambre" style="width: 120px;color:rgb(220, 37, 20);font-family:aharoni">
																	<option value="">Room</option>
																</select>
															</div>
														
														
													</div>
													<div><button type="button" class="booking_button trans_200" id="btn_reserva" style="background-color: rgb(0, 255, 247);font-family:cooper black;color:black">Book Now</button></div>
												</div>
											</form>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
	
				 <!-- Slide -->
				 
	
			</div>
			
			<!-- Home Slider Dots -->
			<div class="home_slider_dots_container">
				<div class="home_slider_dots">
					<ul id="home_slider_custom_dots" class="home_slider_custom_dots d-flex flex-row align-items-start justify-content-start">
						<li class="home_slider_custom_dot active">01.</li>
						<li class="home_slider_custom_dot">02.</li>
						<li class="home_slider_custom_dot">03.</li>
					</ul>
				</div>
			</div>
			
		</div>
	</div>
	

	<!-- Home -->
         @yield('content')

	<!-- Footer -->

	<footer class="footer">
		<div class="footer_content">
			<div class="container">
				<div class="row">
					<div class="col">
						<div class="footer_logo_container text-center">
							<div class="footer_logo">
								<a href="#"></a>
								<div>The River</div>
								<div>since 1945</div>
							</div>
						</div>
					</div>
				</div>
				<div class="row footer_row">
					
					<!-- Address -->
					<div class="col-lg-3">
						<div class="footer_title">Our Address</div>
						<div class="footer_list">
							<ul>
								<li>Beach Str. 345</li>
								<li>67559 Miami</li>
								<li>USA</li>
							</ul>
						</div>
					</div>

					<!-- Reservations -->
					<div class="col-lg-3">
						<div class="footer_title">Reservations</div>
						<div class="footer_list">
							<ul>
								<li>Tel: 345 5667 889</li>
								<li>Fax; 6783 4567 889</li>
								<li>reservations@hotelriver.com</li>
							</ul>
						</div>
					</div>

					<!-- Newsletter -->
					<div class="col-lg-3">
						<div class="footer_title">Your comment !!</div>
						<div class="newsletter_container">
							<div id="efo"></div>
							<form method="POST" class="newsletter_form" id="como">
								<textarea name="descro" class="newsletter_input" placeholder="Enter your comment..."></textarea>
								@if (session('info_user'))
								<input type="hidden" name="client" value="{{session('info_user')[0]->id}}">	
								@endif
								<button type="button" class="newsletter_button" onclick="add_func()">Save</button>
							</form>
						</div>
					</div>

					<!-- Footer images -->
					<div class="col-lg-3">
						<div class="certificates d-flex flex-row align-items-start justify-content-lg-between justify-content-start flex-lg-nowrap flex-wrap">
							<div class="cert"><img src="{{asset('images/cert_1.png')}}" alt=""></div>
							<div class="cert"><img src="{{asset('images/cert_2.png')}}" alt=""></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<a href="{{url('template/create_loging_f')}}" style="color: beige">espaxo</a>
		<div class="copyright">
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
</div>
	</footer>
</div>

<script src="{{asset('js/jquery-3.3.1.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/bootstrap.min.js')}}"></script>
<script src="{{asset('styles/bootstrap-4.1.2/popper.js')}}"></script>
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
	 function store_user(){
		var formdata = new FormData($('#tox')[0]);
		     $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
		$.ajax({
           type:"post",
		   url:"{{url('template/store_user')}}",
		   data:formdata,
		   processData:false,
		   contentType:false,
		     success:function(response){
			   if(response.status==400){
				$(".hox").html(response.message).addClass('alert alert-danger');
			  }
			  if(response.status==300){
				$(".hox").html(response.message).addClass('alert alert-danger');
			  }

			  if(response.status==200){
				alert(ok);
			  }
		   }
		});
	 }
</script>


	 <script>
        var date1,date2,day,nomo,prex,value,N_adult,N_enf,N_enf2,ad;
          $(document).ready(function(){
                $(".date1").on('blur',function(){
                     date1 = $(this).val();
				
                     $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                       $.ajax({
                           type:"post",
                           url:"{{url('template/disponibity')}}/"+date1,
                           beforeSend:function(){
                            $(".chambre").html("<option>..Loading..</option>");
                           },
                              success:function(response){
                                html_="";
                                $.each(response,function(index,element){
                                    html_+='<option value="'+element.id+'" data-name="'+element.nom_ch+'" data-prix="'+element.prix_ch+'">'+element.nom_ch+'</option>';
                                    $(".chambre").html(html_);
                            
									nomo = $(".chambre").find('option:selected').attr('data-name');
									$(".romo").html(nomo);
									$(".yinko").val(nomo);
					                   
									    prex = $(".chambre").find('option:selected').attr('data-prix');
					                       $(".kwe").html(prex);
										   $(".preco").val(prex);
										    
										   
										
                                            value = $(".chambre").find('option:selected').attr('value');

										               $(".toto").html(prex*day);
													   $(".tranx_nbj").val(day);
													   $(".bihui").val(prex*day);
													
									 });
                              } 
                          
                       });
                });

				
				

				$(".minho").on('keyup click',function(){
					 $(".lazo").html($(this).val());
					 N_adult = $(".ndulo").val();
					
					
			});

		
                  $(".kpevi").on('keyup click',function(){
                       $(".laza").html($(this).val());
                       N_enf = $(".ndula").val();
				});

       
				
				$(".chambre").on('change',function(){
                    nomo = $(this).find('option:selected').attr('data-name');
					$(".romo").html(nomo);
					$(".yinko").val(nomo);

					prex = $(this).find('option:selected').attr('data-prix');
					 $(".kwe").html(prex);
					  $(".preco").val(prex);

					    value = $(this).find('option:selected').attr('value');

					 $(".toto").html(prex*day);
					 $(".bihui").val(prex*day);
					 $(".tranx_nbj").val(day);
					


				});

				
          });

		

		  $(".date2").on('blur',function(){
			date2 = $(this).val();
			
			var datinx = new Date(date1);
		   var datenx  = new Date(date2);
		   var time = Math.abs(datenx-datinx);
		   day = Math.ceil(time/(1000*60*60*24));
		   $(".prazo").text(day);
		   $(".toto").html(prex*day);
		   $(".tranx_nbj").val(day);
		   $(".bihui").val(prex*day);
		   $(".yinko").val(nomo);
		  });

		  $("#btn_reserva").on('click',function(){

				$(".table").each(function(){
				N_adult = $(this).find('td').eq(2).html();
				N_enf = $(this).find('td').eq(3).html();

		     
        });

		
   
			      $.ajax({
                      type:"get",
					  url:"{{url('template/reservation')}}",
					  data:{
						'date1':date1,
						  'date2':date2,
						  'tranx_nbj':day,
						  'chambre':value,
						  'nom_cha': nomo,
						  'preco': prex,
						  'N_aduli': N_adult, //$(".ndulo").val($(this).val()),
						  'N_chili': N_enf,
						  'totil': Math.abs(prex*day),
						  

						  
					  },
					  success:function(response){
						if(response.status==200){
							$(".unao").html(response.message).addClass('alert alert-success');
						}else{
							window.location.href="{{url('template/create_for_login')}}";
						}
					  }
					  
				   });
		  });
    
</script>

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
             }

             if(response.status==200){
              window.location.href="{{url('/')}}";
             }
          }
       });
    }
</script>

<script>
	function deconect_user(){
		$.ajax({
            type:"get",
			url:"{{url('template/deconnect_user')}}",
			success:function(response){
				window.location.href="{{url('/')}}";

			}
		});
	}
</script>

<script>
	function refreshPage() {
    location.reload(true);
}
</script>

<script>
	function add_func(){

		var formdata = new FormData($('#como')[0]);
		            $.ajaxSetup({headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

		  $.ajax({
           type:"post",
		   url:"{{url('template/add_comment')}}",
		   data:formdata,
		   processData:false,
		   contentType:false,
		   success:function(response){
			if(response.status==200){
				$("#efo").html(response.message).addClass('alert alert-success');
			}else{
				window.location.href="{{url('template/create_for_login')}}";
			}
			
		   }
		  });
	}
</script>

<script>
	$(document).ready(function(){
	 
	});
</script>

@yield('scripts')
</body>
</html>