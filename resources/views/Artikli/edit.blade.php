@extends('Artikli.layout')

@section('HeadContent')
    <title>Izmjena artikla</title>
@stop


@section('Content')


<h1>
Izmjena Artikla: 
</h1>
{{-- {{HTML::ul($errors->all())}} --}}

{{Form::open(array('url'=>'artikli/'.$artikl->ID,'method'=>'PUT','files'=>'true'))}}

<div>
    {{Form::label('Naziv','Naziv:')}}<br>
    {{ Form::text('Naziv',$artikl->Naziv,array('class'=>'form-control'))  }}<br>
</div>

<div>
    {{Form::label('Opis','Opis:')}} <br>
    {{ Form::textarea('Opis',$artikl->Opis,array('class'=>'form-control'))  }} <br>
</div>
<div>
    {{Form::label('CijenaBezPdv','Cijena bez pdv-a')}}<br>
    {{ Form::number('CijenaBezPdv',$artikl->CijenaBezPdv,array('class'=>'form-control','step'=>'any'))  }}<br>
</div>

<div>
    {{Form::label('PDV','PDV:')}}<br>
    {{ Form::number('PDV',$artikl->PDV,array('class'=>'form-control','step'=>'any'))  }}<br>
</div>
<div>
    {{Form::label('Jedinica_mjere','Jedinica mjere:')}}<br>
    {{ Form::text('Jedinica_mjere',$artikl->Jedinica_mjere,array('class'=>'form-control'))  }}<br>
</div>
<div>
    {{Form::label('Kolicina','Kolicina:')}}<br>
    {{ Form::number('Kolicina',$artikl->Kolicina,array('class'=>'form-control','step'=>'any'))  }}<br>
</div>
{{Form::label('Slika','Slika:')}}<br>
@if ($artikl->Slika!=null)
<img src="{{'/'.$artikl->Slika}}" height="80px" alt=""><br>
@endif

{{ Form::file('Slika',array('class'=>'form-control'))  }}<br>

{{Form::submit('Sacuvaj izmjene')}}

{{Form::close()}}


@stop