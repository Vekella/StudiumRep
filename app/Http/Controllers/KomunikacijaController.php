<?php
namespace App\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Osobe;
use Illuminate\Support\Str;

class KomunikacijaController extends Controller{

    public function index(Request $request) 
    {

        $osobe=Osobe::where('id',3)->firstOrFail();
        //$osobe->refresh();
          echo $osobe;
    //    $poruka='Putanja pristupa:'.$request->Url()."<br>";
    //    $poruka=$poruka."Putanja sa parametrima:".$request->fullUrl()."<br>";
    //    $poruka=$poruka.'Id poruke je: '.$id.'<br>';
    //    $poruka=$poruka.'Parametri:<br>';
    //    if(($request->query('a'))!=null){
    //        $poruka=$poruka."a:".$request->query("a")."<br>";
    //    }
    //    if(($request->query('b'))!=null){
    //     $poruka=$poruka."b:".$request->query("b")."<br>";
    // }
    // if(($request->query('c'))!=null){
    //     $poruka=$poruka."c:".$request->query("c")."<br>";
    // }
    //    return $poruka;
    



}   

    public function kontakt(){
     return view('vjezba.shared.kontaktforma');
    } 

    public function posaljiupit(Request $request){
        $poruka=$request->ime.' '.$request->prezime.'<br>';
        $poruka=$poruka."je poslao poruku sljedeceg sadrzaja:<br>";
        $poruka=$poruka.$request->poruka.'<br>';
        $poruka=$poruka."Odgovor Posalti na sledeci mail:".$request->email;
      
        return $poruka;
        //return "uspjesno poslan upit";
    }

    public function kontakt2(Request $request){
     if($request->isMethod('get')){
         Storage::disk('local')->put('primjer.txt','Sadržaj');
         return view('vjezba.shared.contact');
     }
     if($request->isMethod('post')){
        $poruka=$request->ime.' '.$request->prezime.'<br>';
        $poruka=$poruka."je poslao poruku sljedeceg sadrzaja:<br>";
        $poruka=$poruka.$request->poruka.'<br><br>';
        $poruka=$poruka."Odgovor Posalti na sledeci mail:".$request->email.'<br><br>';
      
        $file=$request->file('datoteka');
        if($file!=null){
        $poruka=$poruka.'Ime datoteke:'.$file->getClientOriginalName().'<br>';
        $poruka=$poruka.'Ekstezija datoteke:'.$file->getClientOriginalExtension().'<br>';
        $poruka=$poruka.'prava putanja datoteke:'.$file->getRealPath().'<br>';
        $poruka=$poruka.'Velicina datoteke:'.$file->getSize().'<br>';
        $poruka=$poruka.'Mime Type:'.$file->getMimeType().'<br>';

        $file->move('img',$file->getClientOriginalName());
        }



        return $poruka;
     }

    }

    public function NovaOsoba(Request $request){

        if($request->isMethod('get')){
            return view('komunikacija.NovaOsoba');
        }

        if($request->isMethod('post')){

            $osoba =new Osobe;

            $osoba->Ime=$request->ime;
            $osoba->Prezime=$request->prezime;
            if(strlen($request->oib)>11){
                return 'Oib predugacak';
            }
            $osoba->OIB=$request->oib;
            $osoba->email=$request->email;
            $osoba->Mobitel=$request->mobitel;
            $osoba->Datum_Rodjenja=$request->datum_rodjenja;

            $osoba->save();
        }

    }

}