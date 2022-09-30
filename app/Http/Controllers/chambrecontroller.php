<?php

namespace App\Http\Controllers;

use App\Models\categorie;
use App\Models\chambre;
use App\Models\divers_resto;
use App\Models\image_hotel;
use Illuminate\Http\Request;

class chambrecontroller extends Controller
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
        $categorie = categorie::all();
        return view('chambre.create',['categorie'=>$categorie]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store_ch(Request $request)
    {
        $add_chambre = new chambre();
        $add_chambre->ref_ch = $request->ref;
        $add_chambre->nom_ch = $request->nom;
        $add_chambre->desc_ch = $request->desc;
        $add_chambre->prix_ch = $request->prix;
        $add_chambre->desconte_ch = $request->desconte;
        $add_chambre->statut = $request->statut==TRUE ? '1':'0';
        $add_chambre->popularite = $request->popularite==TRUE ? '1':'0';
        $add_chambre->cod_chambre = time().'XO'.rand(1111,9999);
        $add_chambre->id_categorie = $request->categorie;
                 if($request->hasFile('photo')){
                     $file = $request->file('photo');
                       $name = time().'.'.$file->getClientOriginalExtension();
                         $file->move('chambre',$name);
                           $add_chambre->photo = $name;
                             
                 }
        $add_chambre->save();

              if($request->hasFile('photos')){
                 foreach($request->file('photos') as $key=>$files){
                     $names = time().'.'.$key.$files->Extension();
                       $files->move('chambre',$names);
                         $img_hot = new image_hotel();
                           $img_hot->id_chambre = $add_chambre->id;
                             $img_hot->photos = $names;
                               $img_hot->save();
                 }
              }

                  if($request->hasFile('photox')){
                      foreach($request->file('photox') as $keys=>$filex){
                           $namex = time().'.'.$keys.$filex->Extension();
                             $filex->move('chambre',$namex);
                               $img_resto = new divers_resto();
                                 $img_resto->id_chambre = $add_chambre->id;
                                   $img_resto->photox = $namex;
                                     $img_resto->save();
                      }
                  }
        
       return response()->json(['status'=>200, 'message'=>'Chambre enregistrée avec success!!!']);
    }

    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show_chb()
    {
          $show_chr = chambre::all();
          return view('chambre.show',['show_chr'=> $show_chr]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit_chr($id)
    {
        $edit_chr = chambre::find($id);
        $cat = categorie::all();
        return view('chambre.edit_chr',['edit_chr'=>$edit_chr ,'cat'=>$cat]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update_chr(Request $request, $id)
    {
      $add_chambre = chambre::find($id);
      $add_chambre->ref_ch = $request->ref;
      $add_chambre->nom_ch = $request->nom;
      $add_chambre->desc_ch = $request->desc;
      $add_chambre->prix_ch = $request->prix;
      $add_chambre->desconte_ch = $request->desconte;
      $add_chambre->statut = $request->statut==TRUE ? '1':'0';
      $add_chambre->popularite = $request->popularite==TRUE ? '1':'0';
      $add_chambre->cod_chambre = time().'XO'.rand(1111,9999);
      $add_chambre->id_categorie = $request->categorie;
               if($request->hasFile('photo')){
                   $file = $request->file('photo');
                     $name = time().'.'.$file->getClientOriginalExtension();
                       $file->move('chambre',$name);
                         $add_chambre->photo = $name;
                           
               }
      $add_chambre->update();

            if($request->hasFile('photos')){
               foreach($request->file('photos') as $key=>$files){
                   $names = time().'.'.$key.$files->Extension();
                     $files->move('chambre',$names);
                       $img_hot = new image_hotel();
                         $img_hot->id_chambre = $add_chambre->id;
                           $img_hot->photos = $names;
                             $img_hot->save();
               }
            }

                if($request->hasFile('photox')){
                    foreach($request->file('photox') as $keys=>$filex){
                         $namex = time().'.'.$keys.$filex->Extension();
                           $filex->move('chambre',$namex);
                             $img_resto = new divers_resto();
                               $img_resto->id_chambre = $add_chambre->id;
                                 $img_resto->photox = $namex;
                                   $img_resto->save();
                    }
                }
      
     return response()->json(['status'=>200, 'message'=>'Chambre Modifiée avec success!!!']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy_y($id)
    {
        chambre::find($id)->delete();
    }


    public function delete_resto($id){
      if($id){
        divers_resto::find($id)->delete();
        return response()->json();
      }
    }

    public function delete_gallery($id){
      if($id){
        image_hotel::find($id)->delete();
      }
    }

     public function delete_multiple(Request $request){
      chambre::whereIn('id',explode(',',$request->stock_data))->delete();
      return response()->json();
     }

     public function restore_chambre(){
      chambre::withTrashed()->restore();
     }

    

     
}
