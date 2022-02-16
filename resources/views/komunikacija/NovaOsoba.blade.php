{{Form::open(array('url'=>"/novaosoba")) }}
@csrf

{{Form::label('ime','Ime')}}<br>
{{Form::text('ime')}}<br>
{{Form::label('prezime','Prezime')}}<br>
{{Form::text('prezime')}}<br>
{{Form::label('oib','OIB')}}<br>
{{Form::text('oib')}}<br>
{{Form::label('email','Email')}}<br>
{{Form::text('email')}}<br>
{{Form::label('mobitel','Broj Mobitela')}}<br>
{{Form::text('mobitel')}}<br>
{{Form::label('datum_rodjenja','Datum Rodjenja')}}<br>
{{Form::date('datum_rodjenja')}}<br>

{{Form::submit('Pošalji Upit!')}}

{{ Form::close() }}