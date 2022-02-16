<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Artikl;
use DateTime;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Contracts\Session\Session;
use Illuminate\Support\Facades\Auth;
class ArtikliController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $artikli=Artikl::all();
        return view('Artikli.index',['artikli'=>$artikli]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       if(Auth::check()){
        

        if(Auth::user()->name=='Vedran')
        {
            return view('Artikli.create');
        }

        else {
            return Redirect::to('artikli');
        }
    }}


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $artikl=new Artikl;
        $artikl->Naziv=$request->Naziv;
        $artikl->Opis=$request->Opis;
        $artikl->CijenaBezPdv=$request->CijenaBezPdv;
        $artikl->PDV=$request->PDV;
        $artikl->Jedinica_mjere=$request->Jedinica_mjere;
        $artikl->Kolicina=$request->Kolicina;
        

        $file=$request->file('Slika');

        if($file!=null){
        $filename=$file->getClientOriginalName();
        $extension=$file->getClientOriginalExtension();
       

        $file->move('img',$artikl->Naziv.'.'.$extension);
        $path='img/'.$artikl->Naziv.'.'.$extension;
        $artikl->Slika=$path;
        }

        $artikl->save();
        
        return Redirect::to('artikli');
        
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $artikl=Artikl::find($id);
        if($artikl==null)
        {
            return Redirect::to('artikli');
        }
        return view('Artikli.show',['artikl'=>$artikl]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $artikl=Artikl::find($id);
        if(Auth::check()){
            return view('Artikli.edit',['artikl'=>$artikl]);

        }
        else{
        if($artikl==null){
            return Redirect::to('artikli');
        }}
        
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
        $artikl=Artikl::find($id);
        $artikl->Naziv=$request->Naziv;
        $artikl->Opis=$request->Opis;
        $artikl->CijenaBezPdv=$request->CijenaBezPdv;
        $artikl->PDV=$request->PDV;
        $artikl->Jedinica_mjere=$request->Jedinica_mjere;
        $artikl->Kolicina=$request->Kolicina;
        

        $file=$request->file('Slika');

        if($file!=null){
        $filename=$file->getClientOriginalName();
        $extension=$file->getClientOriginalExtension();
        $file->move('img',$artikl->Naziv.'.'.$extension);
        $path='img/'.$artikl->Naziv.'.'.$extension;
        $artikl->Slika=$path;
        }

        $artikl->save();

        return Redirect::to('artikli');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $artikl=Artikl::find($id);
        $slika=$artikl->Slika;
        $artikl->delete();
        if($slika!=null){
            unlink($slika);
        }



        return Redirect::to('artikli'); 
    }
}
