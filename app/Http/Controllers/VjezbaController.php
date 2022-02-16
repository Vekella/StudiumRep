<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;


class VjezbaController extends Controller{

    public function prikaz(){

        return "nalazim se u akciji prikaz";
    }
public function povecaj($broj=null){
if($broj!=null){

    $broj+=1;
    return "Povecano je ".$broj;
}
else{
    return 'Nemam broj za povecati';
}
}

public function zbroji($b1,$b2){
    return $b1+$b2;
}

public function pozdrav(){
    $ime="Đuro";
    $podaci=['Ivan','Matej','Marko','Ana','Tomislav','Josip'];
    $podaci_json=json_encode($podaci);
    return view('pozdrav',['ime'=>$ime,'podaci'=>$podaci_json]);
}

/*public function kontakt(){

$data=[
    'naslov'=>'Kontakt',
    'ime'=>'Marko Marulic',
    'telefon'=>'098000001'
];
return view('vjezba.kontakt',$data);
    
}*/
public function kontakt(){
    return view('vjezba.kontakt')
    ->with('naslov','kontakt podaci')
    ->with('ime','Rade')
    ->with('telefon','098123456');
}

}

?>