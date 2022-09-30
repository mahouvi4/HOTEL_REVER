<div class="container">
    <div class="proi"></div>

    <div class="row">
        
        <form method="POST" id="primo">
            <div class="group-control">
                
                <label for="primo" style="color:aqua;font-family:cooper">Premiun</label> <br>
               <h3>
                
                <input type="radio" name="primx" value="0">0% <br>
                <input type="radio" name="primx" value="5">5% <br>
                <input type="radio" name="primx" value="10">10% <br>
                <input type="radio" name="primx" value="15">15% <br>
                <input type="radio" name="primx" value="20">20% <br>
                <input type="radio" name="primx" value="25">25% <br>
                <input type="radio" name="primx" value="30">30% <br>
                <input type="radio" name="primx" value="35">35% <br>
                <input type="radio" name="primx" value="40">40% <br>
                <input type="radio" name="primx" value="45">45% <br>
                <input type="radio" name="primx" value="50">50% <br>
               </h3>
           
            </div>

            <div class="group-control mt-4">
                <label for="depato" style="color:rgb(242, 255, 0);font-family:cooper">Department</label>
                 <select name="departement" id="departement">
                    @foreach ($departo as $item)
                        <option value="{{$item->id}}" style="text-align: center">{{$item->name_dep}}</option>
                    @endforeach
                 </select>
            </div>

            <button type="button" class="btn btn-info mt-4" onclick="update_prime()">To apply</button>
            <button type="button" class="btn btn-secondary mt-4" data-dismiss="modal">Close</button>

        </form>
    </div>
</div>
