<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\departement;
use App\Models\fonctionaire;
use App\Models\payment;
use App\Models\User;
use Illuminate\Http\Request;
use PDF;


class fonctionairecontroller extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $depart = departement::all();
        $cate = categorie::all();
        return view('fonctionnaire.create_dep',['depart'=>$depart, 'cate'=>$cate]);

    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        
              $add_func = new fonctionaire();
              $add_func->firstname_f = $request->firstname_f;
              $add_func->name_f = $request->name_f;
              $add_func->email_f = $request->email_f;
              $add_func->cpf_f = $request->cpf_f;
              $add_func->salaire_f = $request->salaire_f;
              $add_func->prime_f = $request->prime_f;
              $add_func->type_payment_f = $request->typ_funct;
              $add_func->id_departement = $request->departement;
              $add_func->id_categorie = $request->categorie;
              $add_func->save();
              return response()->json(['status'=>200,'message'=>'You have just successfully added an official!!']);
        
    }


     public function create_login_f(){

        return view('fonctionnaire.login_f');
         
       }


       public function add_login_f(Request $request){
        if(fonctionaire::where(['email_f'=>$request->email_f, 'cpf_f'=>$request->cpf_f])->count()>0){
            
            $ioni = fonctionaire::where(['email_f'=>$request->email_f, 'cpf_f'=>$request->cpf_f])->get();
            session(['info_func'=>$ioni]);
            return response()->json(['status'=>200,'message'=>'success']);

        }else{
            return response()->json(['status'=>300,'message'=>'Email or cpf unmatched!!']);

        }
       }


       public function recept_espace(){
        return view('reception.espace');
       }

        public function list_cli(){
            $list_cli = User::simplePaginate(4);;
            return view('fonctionnaire.list_client',['list_cli'=>$list_cli]);
        }


       public function show_f(){
        $f = fonctionaire::simplePaginate(2);
        
        return view('fonctionnaire.show_list',['f'=>$f]);
       }

       public function create_prime(){
        $departo = departement::all();
        return view('fonctionnaire.for_prime',['departo'=>$departo]);
       }

       public function update_prime(Request $request){

        fonctionaire::where('id_departement', $request->departement)
      ->update(['prime_f' => $request->primx]);
        return response()->json(['status'=>200,'message'=>'Bonus applied with success!!']);

        }
 



    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $pagamento = fonctionaire::find($id);
        
        return view('fonctionnaire.pagamento',['pagamento'=>$pagamento ]);
    }

     public function hotel(){
        $catix = categorie::all();
        return view("fonctionnaire.categox",['catix'=>$catix]);
     }

     public function fun_cat(Request $request,$id){
        $ct = categorie::find($id);
        $functi = fonctionaire::where('id_categorie',$ct->id_categorie)->get();
        return view('fonctionnaire.fun_cat',['ct'=>$ct, 'functi'=>$functi]);
     }


     public function pdf1(){
        $cli = User::all();

        $pdf = PDF::loadView('fonctionnaire.pdf1',['cli'=>$cli]);
         return $pdf->download('Employee_List.pdf1');

     }


    public function destroy_sess(){
        session()->forget('info_func');
        return response()->json();
    }
    












    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    

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
