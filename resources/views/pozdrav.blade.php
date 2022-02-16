<html>
<body>
    <h1>
        Pozdrav {{ $ime }}
        @if ($ime=='Ante')
            <h2>Pozdrav svim Antima</h2>
        @endif
        @if ($ime=="Đuro")
            <h2>Pozdrav Đukici</h2>
        @endif
        @if ($ime=="Slavica")
            <h3>Slava</h3>
         @else
         <h3>Nemam pojma</h3>   
        @endif
{{--<ol>
        @for ($i=0;$i<100;$i++)
      <li>
    {{$i}}      
    </li>      
        @endfor
</ol>--}}
{{--@while (false)
    <p>Beskonacna petlja</p>
@endwhile--}}

{{-- @for ($i=0;$i<10;$i++)
    @if ($i%3==0)
        <p>{{$i}}</p>

    @else
    <p>{{$i*10}}</p>    
    @endif
@endfor --}}

{{-- <script>
    alert('{{$ime}}');
    @isset($podaci)
    var pod={{Js::from($podaci)}};
    @endisset
    alert(pod); 
</script> --}}

{{-- @auth
    
@endauth
@env('local')
    <p>testna faza</p>
@endenv --}}

{{-- @production
    <p>Produkcija</p>
@endproduction --}}
{{-- @php
    //Ovde je isto php kod
@endphp --}}
    @php
        $i=22;
        $pogledi=['vjezba.shared.kontaktforma','vjezba.shared.prigovor','vjezba.shared.pohvala'];
    @endphp
{{-- @include('vjezba.shared.kontaktforma',['komentar'=>'Forma uspjesno ucitana']); --}}

{{-- @includeUnless($i<20,'vjezba.shared.kontaktforma',['komentar'=>'Forma uspjesno ucitana'] ) --}}
@includeFirst($pogledi,['komentar'=>"Forma uspjesno ucitana"])
</body>


</html>