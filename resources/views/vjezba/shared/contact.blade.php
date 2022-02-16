<div><meta name="csrf-token" content="{{ csrf_token() }}">
    {{ Form::open(array('url'=>"/kontakt",'files'=>'true')) }}
    @csrf

    {{Form::label('ime','Ime')}}<br>
    {{Form::text('ime')}}<br>
    {{Form::label('prezime','Prezime')}}<br>
    {{Form::text('prezime')}}<br>
    {{Form::label('email','Email')}}<br>
    {{Form::text('email')}}<br>
    {{Form::label('poruka','Poruka')}}<br>
    {{Form::textarea('poruka')}}<br>

    {{Form::file('datoteka')}}<br>

    {{Form::submit('Pošalji Upit!')}}
    

{{ Form::close() }}

{{Storage::url('primjer.txt')}}
</div>

  
