<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
     <link rel="stylesheet" type="text/css" href="{{asset('styles/bootstrap-4.1.2/bootstrap.min.css')}}">
<link href="{{asset('plugins/font-awesome-4.7.0/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="{{asset('plugins/OwlCarousel2-2.3.4/owl.carousel.css')}}">
     <meta name="csrf-token" content="{{ csrf_token() }}">


    <title>Document</title>
    <style>
        body{
            background-color: rgb(26, 37, 37);
        }
        

        .card{
             margin-top:100px ;
             border-radius: 20px;
             box-shadow: 0 25px 25px rgba(3, 76, 94, 0.885);
             background: rgba(5, 36, 26, 0.729);
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
                <div class="card-body">
                  <h5 class="card-title">Employee Data Modification Space</h5>
                  <div class="row">
                        
                    <form method="POST" id="info_uz">
                          <div class="group-control">
                            <label for="">First_Name</label>
                            <input type="text" class="form-control" name="firstname_f" value="{{$edit_func->firstname_f}}" readonly="">
                        </div> 

                        <div class="group-control">
                            <label for="">Name</label>
                            <input type="text" class="form-control" name="name_f" value="{{$edit_func->name_f}}" readonly="">
                        </div> 

                        <div class="group-control">
                            <label for="">Email</label>
                            <input type="email" class="form-control" name="email_f" value="{{$edit_func->email_f}}" readonly="">
                        </div> 

                        <div class="group-control">
                            <label for="">CPF</label>
                            <input type="number" class="form-control mt-2" name="cpf_f" value="{{$edit_func->cpf_f}}" readonly="">
                        </div> 

                        <div class="group-control">
                            <label for="">Type of wage payment</label>
                            <input type="radio" name="type_payment_f"  value="Journalier" {{$edit_func->type_payment_f=="Journalier" ? 'checked':''}}>Journalier
                            <input type="radio" name="type_payment_f"  value="ebdomadaire" {{$edit_func->type_payment_f=="ebdomadaire" ? 'checked':''}}>ebdomadaire
                            <input type="radio" name="type_payment_f"  value="Monthly" {{$edit_func->type_payment_f=="mensuel" ? 'checked':''}}>Monthly
                            <input type="radio" name="type_payment_f"  value="ebdomadaire" {{$edit_func->type_payment_f=="Annel" ? 'checked':''}}>Annual


                         
                         

                            
                        </div> 

                        <div class="group-control">
                            <label for="">Salaty</label>
                            <input type="number" class="form-control" name="salaire_f" value="{{$edit_func->salaire_f}}">
                        </div> 

                        <div class="group-control">
                            <label for="">Premium</label>
                            <input type="number" class="form-control" name="prime_f"  value="{{$edit_func->prime_f}}" readonly="">
                        </div> 

                        <div class="group-control">
                            <label for="">Status</label>
                            <input type="checkbox" name="statut"  {{$edit_func->statut=='1'? "checked":""}}>
                        </div> 

                        <div class="group-control">
                            <label for="">Department</label>
                            <select name="departement" id="departement">
                                @foreach ($depito as $item)
                                     <option value="{{$item->id}}">{{$item->name_dep}}</option>
                                @endforeach
                            </select>
                        </div> 

                        <div class="group-control">
                            <label for="ref">HOTEL</label>
                                <select name="categorie" id="categorie">
                                   @foreach ($catel as $item)
                                   <option value="{{$item->id}}">{{$item->nom_cat}}</option>
                                   @endforeach
                                </select>
                        </div>

                        

                        <div class="group-control">
                    <button type="button" class="btn btn-primary" onclick="up_fun({{$edit_func->id}})">Update</button>
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
    function up_fun(id){
        var formdata = new FormData($("#info_uz")[0]);
        $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        $.ajax({
             type:"post",
             url:"{{url('template/update')}}/"+id,
             data:formdata,
             processData:false,
             contentType:false,
             success:function(response){
                window.location.href="{{url('template/pagamento')}}/"+id;
             }
        });
    }
</script>
   
    </body>

</html>