<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\departement;
use App\Models\fonctionaire;
use App\Models\payment;
use Illuminate\Http\Request;

class paymentcontroller extends Controller
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
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function add_payment(Request $request)
    {
        $pay = new payment();
        $pay->id_fonctionaire = $request->fonctionaire;
        $pay->date_p = $request->date_p;
        $pay->prime_p = $request->primx;
        $pay->salaire_Net = $request->sal_net;
        //dd($pay);
        $pay->save();
        return response()->json(['status'=>200,'message'=>'Payment made successfully']);
              


    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit_func = fonctionaire::find($id);
        $depito = departement::all();
        $catel = categorie::all();
        return view('fonctionnaire.edito',['edit_func'=>$edit_func,'depito'=>$depito, 'catel'=>$catel]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_fu(Request $request,$id)
    {
        $add_func = fonctionaire::find($id);
              $add_func->firstname_f = $request->firstname_f;
              $add_func->name_f = $request->name_f;
              $add_func->email_f = $request->email_f;
              $add_func->cpf_f = $request->cpf_f;
              $add_func->salaire_f = $request->salaire_f;
              $add_func->prime_f = $request->prime_f;
              $add_func->type_payment_f = $request->type_payment_f;
              $add_func->id_departement = $request->departement;
              $add_func->update();
              return response()->json(['status'=>200,'message'=>'Success']);
    }


    public function  list_pagamento($id)
    {
        $pag = payment::where('id_fonctionaire',$id)->simplepaginate(4);
        return view('fonctionnaire.list_pagamento',['pag'=>$pag]);
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
