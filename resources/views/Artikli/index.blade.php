
@extends('Artikli.layout')

@section('HeadContent')
<title>
    Prikaz svih artikala
</title>
@stop

@section('Content')

<table class="table table-striped table-bordered">

    <thead>
        <tr>
            <td>šifra</td>
            <td>Naziv</td>
            <td>Opis</td>
            <td>Cijena bez PDV-a</td>
            <td>PDV</td>
            <td>Cijena s PDV-om</td>
            <td>Jedinica mjere</td>
            <td>Količina na lageru</td>
            <td>Ukupna prodajna vrijednost</td>
            <td>Slika</td>
        </tr>
    </thead>
<tbody>
    @foreach ($artikli as $artikl)
        <tr>
            <td>{{$artikl->ID}}</td>
            <td><a href="/artikli/{{$artikl->ID}}">{{$artikl->Naziv}}</a></td>
            <td>{{$artikl->Opis}}</td>
            <td>{{$artikl->CijenaBezPdv}}</td>
            <td>{{$artikl->PDV}}</td>
            <td>{{$artikl->CijenaBezPdv*(1+$artikl->PDV/100)}}</td>
            <td>{{$artikl->Jedinica_mjere}}</td>
            <td>{{$artikl->Kolicina}}</td>
            <td>{{($artikl->CijenaBezPdv*(1+$artikl->PDV/100))*$artikl->Kolicina}}</td>
            <td><img src="{{$artikl->Slika}}" width="50px" alt="{{$artikl->Naziv}}"></td>
        </tr>
    @endforeach
</tbody>
</table>

@stop