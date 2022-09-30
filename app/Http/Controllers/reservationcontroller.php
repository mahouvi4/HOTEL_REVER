<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\chambre;
use App\Models\categorie;
use App\Models\divers_resto;
use App\Models\reservation;
use App\Models\temoignage;
use App\Models\User;

class reservationcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
 //TEMPLATE VRAI
 

   public function home_template()
   {
     
    $chamba = chambre::all();
    $cli_all = temoignage::all();
    return view('proto.home_pag',['chamba'=>$chamba, 'cli_all'=>$cli_all]);         
   }

   
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function dispo(Request $request,$dato)
    {
       
       $txp = DB::SELECT("SELECT *  FROM chambres WHERE id NOT IN (SELECT id_chambre FROM reservations WHERE date1 <='$dato' AND date2 >='$dato')");
          return response()->json($txp);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if(session('info_user')){
           
         $user = session('info_user')[0]->id;
        $add_reserva = new reservation();
        $add_reserva->id_client = $user;
        $add_reserva->date1 = $request->date1;
        $add_reserva->date2 = $request->date2;
        $add_reserva->nbr_j = $request->tranx_nbj;
        $add_reserva->prix = $request->preco;
        $add_reserva->n_adult = $request->N_aduli;
        $add_reserva->n_child = $request->N_chili;
        $add_reserva->total = $request->totil;
        $add_reserva->nom_ch = $request->nom_cha;
        $add_reserva->id_chambre = $request->chambre;
        $add_reserva->save();
        return response()->json(['status'=>200,'message'=>'Reservation made with success!!']);
         }else{
            return response()->json(['status'=>300,'message'=>'success!!']);

 
         }
       

         

    }


   

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $cha = chambre::find($id);
        $descro = chambre::where('id_categorie',$cha->id_categorie)->get();
        return view('proto.description',['cha'=>$cha, 'descro'=>$descro]);
    }


    public function list_reser_cli($id)
    {   
        $clio = User::find($id);
        $reserv_cli = reservation::where('id_client',$id)->simplePaginate(3);
        return view('reception.list_rev_cli',['reserv_cli'=>$reserv_cli, 'clio'=>$clio]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
