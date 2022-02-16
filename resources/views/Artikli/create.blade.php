@extends('Artikli.layout')

@section('HeadContent')
    <title>Unos novog artikla</title>
@stop


@section('Content')


<h1>
Unos novog artikla u bazu:
</h1>
{{-- {{HTML::ul($errors->all())}} --}}

{{Form::open(array('url'=>'artikli','files'=>'true'))}}

<div>
    {{Form::label('Naziv','Naziv:')}}<br>
    {{ Form::text('Naziv','',array('class'=>'form-control'))  }}<br>
</div>

<div>
    {{Form::label('Opis','Opis:')}} <br>
    {{ Form::textarea('Opis','',array('class'=>'form-control'))  }} <br>
</div>
<div>
    {{Form::label('CijenaBezPdv','Cijena bez pdv-a')}}<br>
    {{ Form::number('CijenaBezPdv','',array('class'=>'form-control','step'=>'any'))  }}<br>
</div>

<div>
    {{Form::label('PDV','PDV:')}}<br>
    {{ Form::number('PDV','',array('class'=>'form-control','step'=>'any'))  }}<br>
</div>
<div>
    {{Form::label('Jedinica_mjere','Jedinica mjere:')}}<br>
    {{ Form::text('Jedinica_mjere','',array('class'=>'form-control'))  }}<br>
</div>
<div>
    {{Form::label('Kolicina','Kolicina:')}}<br>
    {{ Form::number('Kolicina','',array('class'=>'form-control','step'=>'any'))  }}<br>
</div>
{{Form::label('Slika','Slika:')}}<br>
{{ Form::file('Slika',array('class'=>'form-control'))  }}<br>

{{Form::submit('Unesi Novi Artikl')}}

{{Form::close()}}


@stop