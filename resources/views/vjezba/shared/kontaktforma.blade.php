<div>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    @isset($komentar)
        <p>{{$komentar}}</p>
        @endisset
<form action="/kontakt" method="POST">
    @csrf
<label for="">Ime</label><br>
<input type="text" name="ime" id=""><br>
<label for="">Prezime</label><br>
<input type="text" name="prezime" id=""><br>
<label for="">Email</label><br>
<input type="text" name="email" id=""><br>
<label for="">Poruka</label><br>
<textarea name="poruka" id="" cols="30" rows="10"></textarea><br>
<button type="submit">Pošalji</button>
</form>

</div>