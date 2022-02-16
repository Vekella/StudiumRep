@extends('Artikli.layout')
@section('HeadContent')
<title>{{$artikl->Naziv}}</title>
@stop

@section('Content')
@if($artikl->Slika!=null)
<p margin-left="100"><img src="/{{$artikl->Slika}}" width="100px" alt="{{$artikl->Naziv}}"></p>
@endif

<h1>{{$artikl->Naziv}}</h1>
<p>{{$artikl->Opis}}</p>
<p><strong>Cijena bez PDV-a: </strong>{{$artikl->CijenaBezPdv}} kn</p>
<p><strong>PDV: </strong>{{$artikl->PDV}} %</p>
<p><strong>Cijena s PDV-om: </strong>{{$artikl->CijenaBezPdv*(1+$artikl->PDV/100)}} kn</p>
<p><strong>Raspoloživo: </strong>{{$artikl->Kolicina}} <strong>{{$artikl->Jedinica_mjere}}</strong></p>
@if(Auth::check())
<p><a href="{{$artikl->ID}}/edit">Izmjeni</a>
{{Form::open(array('url'=>'artikli/'.$artikl->ID))}}
{{Form::hidden('_method','DELETE')}}
{{Form::submit('Obriši Artikl')}}
{{Form::close()}}

@endif
</p>
@stop
