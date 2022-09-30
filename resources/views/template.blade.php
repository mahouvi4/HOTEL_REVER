<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
     rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" 
     crossorigin="anonymous">
     <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Document</title>
</head>

<body>
    
    
    @include('menu')
      @include('modal')
      @include('fonctionnaire.login_f')
 <div id="kinx">
    <button type="button" class="btn btn-info mt-2" onclick="create_cat()">Add_Cat</button>
    <button type="button" class="btn btn-success mt-2" onclick="show_cato()">Show_Cat</button>
    <button type="button" class="btn btn-primary mt-2" onclick="restore_cat()">Restore_cat</button>
    <button type="button" class="btn btn-danger mt-2" onclick="create_ch()">Add_Chambre</button>
    <button type="button" class="btn btn-warning mt-2" onclick="show_chr()">Show_Chambre</button>
    <button type="button" class="btn btn-default mt-2" onclick="restora_chr()">Rest_Chbr</button>
    <button type="button" class="btn btn-danger mt-2" onclick="create_dep()">Add_dep</button>
    <button type="button" class="btn btn-info mt-2" onclick="create_f()">Add_F</button>
    <button type="button" class="btn btn-success mt-2" onclick="show_f()">show_F</button>

 </div>
    
 

    <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
  
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
      integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" 
integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>


     <script>
        function create_cat(){
            $.get("{{url('categorie/create')}}",{},function(data,status){
                  $("#onx").html(data);
                  $("#general").modal('show');
            });
        }
     </script>

     <script>
        function add_cat(){
              var formdata = new FormData($("#lox")[0]);
              $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
                  $.ajax({
                    type:"post",
                    url:"{{url('categorie/strore')}}",
                    data:formdata,
                    processData:false,
                    contentType:false,
                    success:function(response){
                        if(response.status==200){
                            $("delo").html(response.message).addClass('alert alert-success');
                        }
                    }
                  });
        }
     </script>

<script>
    function show_cato(){
       $.get("{{url('categorie/show')}}",{},function(data,status){
           $("#kinx").html(data);
       });
    }
</script>

<script>
    function edit_cat(id){
        $.get("{{url('categorie/edit')}}/"+id,{},function(data,status){
        $("#onx").html(data);
        $("#general").modal('show');
    })
    }
</script>

<script>
    function update_cat(id){
      var formdata = new FormData($("#lax")[0]);
     
              $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
       $.ajax({
          type:"POST",
          url:"{{url('categorie/update')}}/"+id,
          data:formdata,
          processData:false,
          contentType:false,
          success:function(response){
               if(response.status==200){
                $("#dela").html(response.message).addClass('alert alert-success');
               }
          }
       });
    }
</script>

<script>
    function delete_cat(id){
        $.get("{{url('categorie/delete')}}/"+id,{},function(){
            show_cato()
        });
    }
</script>

<script>
    function restore_cat(){
        $.get("{{url('categorie/retore_cat')}}",{},function(data,status){
            show_cato()
        })
    }
</script>


 <script>
    function create_ch(){
        $.get("{{url('chambre/create')}}",{},function(data,status){
             $("#onx").html(data);
             $("#general").modal('show');
        });
    }
 </script>

<script>
     function store_ch(){
        var formdata = new FormData($("#chb")[0]);
        $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

        $.ajax({
             type:"post",
             url:"{{url('chambre/store_ch')}}",
             data:formdata,
             processData:false,
             contentType:false,
             success:function(response){
                if(response.status==200){
                  $(".eyon").html(response.message).addClass('alert alert-success');
                }
             }
        });
     }
</script>

          <script>
            function show_chr(){
                $.get("{{url('chambre/show')}}",{},function(data,status){
                     $("#kinx").html(data);
                });
            }
          </script>

<script>
    function edit_chr(id){
        $.get("{{url('chambre/edit')}}/"+id,{},function(data,status){
             $("#onx").html(data);
             $("#general").modal('show');
        });
    }
 </script>

   
<script>
    function updat_x(id){
         var formdata = new FormData($("#chambo")[0]);
         $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});

         $.ajax({
                 type:"post",
                 url:"{{url('chambre/update')}}/"+id,
                 data:formdata,
                 processData:false,
                 contentType:false,
                 success:function(response){
                    if(response.status==200){
                        $("#ewo").html(response.message).addClass('alert alert-success');
                    }
                 }
         });
    }
</script>


<script>
     function deleto_ch(id){
        $.get("{{url('chambre/deleto')}}/"+id,{},function(){
            show_chr()
        });
     }
</script>

<script>
     function delete_gallery(id){
        $(document).on('click','.hox',function(){
            var formdata = $(this).attr('data-image');

            $.ajax({
               type:"get",
               url:"{{url('chambre/delete_gallery')}}/"+id,
               success:function(response){
                show_chr()
               }
            });
        });
     }
</script>
  
   
<script>
       function delete_resto(id){
         $(document).on('click','.hax',function(){
            var formdata = $(this).attr('data-image');

            $.ajax({
                type:"get",
                url:"{{url('chambre/delete_resto')}}/"+id,
                success:function(response){
                 show_chr()
                }
            });
         });
       }
</script>

   <script>

      function delete_multiple(){
        $(document).on('click','.fex',function(){
             var stock_data = [];
              $(".fex").each(function(){
                 if($(this).is(":checked")){
                    stock_data.push($(this).val());
                 }
              });
              console.log(stock_data);
              $(".kol").on('click',function(){
                 
                $.ajax({
                 type:"get",
                 url:"{{url('chambre/delete_multiple')}}",
                 data:"stock_data="+stock_data,
                 success:function(response){
                    show_chr()
                 }
                });
              });
       });
      }
   </script>

   <script>
     function restora_chr(){
        $.get("{{url('chambre/restora')}}",{},function(){
            show_chr()
        });
     }
   </script>


<script>
	function create_dep(){
		$.get("{{url('template/dep_create')}}",{},function(data,status){
          $("#onx").html(data);
		  $("#general").modal('show');
		});
	}
</script>

<script>
    function store_dep(){
        var formdata = new FormData($("#ganza")[0]);
        $.ajaxSetup({
    headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
        type:"post",
        url:"{{url('template/store_dep')}}",
        data:formdata,
        processData:false,
        contentType:false,
        success:function(response){
            if(response.status==200){
                alert('okkk');
            }
        }
        });
    }
</script>

<script>
    function create_f(){
        $.get("{{url('template/create_f')}}",{},function(data,status){
             $("#onx").html(data);
             $("#general").modal('show');
        });
    }
</script>


<script>
     function add_f(){
        var formdata = new FormData($("#chib")[0]);
        $.ajaxSetup({headers: { 'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $.ajax({
       type:"post",
       url:"{{url('template/add_functionnaire')}}",
       data:formdata,
       processData:false,
       contentType:false,
       success:function(response){
        if(response.status==200){
            $(".sibo").html(response.message).addClass('alert alert-success');
        }
       }
        });
     }
</script>






     <script>
        $(document).ready(function(){
            delete_multiple()
        });
     </script>

     
     @yield('scripts')
</body>
</html>