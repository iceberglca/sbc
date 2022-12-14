@extends('mail.layoutmail')
@section('content')

    <p>Bonjour,</p>

    <p>Votre demande concernant  "<b>{{$libelleMateriel}}</b>  "

        @if($etat)
 a finallement été validées
            @elseif($etat==0)
            a été réfusée
            pour les raisons suivantes:</br>

{{$da->motif}}
@endif

        <br>
    <p>
        Cordialement,
    </p></p>
    {{ \Illuminate\Support\Facades\Auth::user()->nom }}
    {{ \Illuminate\Support\Facades\Auth::user()->prenoms }}
    <br>
    <strong>SBC Côte d’Ivoire</strong>
    <br>
    {{ \Illuminate\Support\Facades\Auth::user()->function }}
    <br>
    <label>Téléphone : </label>{{ \Illuminate\Support\Facades\Auth::user()->contact }}
    <br>
    <label>Mail : </label>{{ \Illuminate\Support\Facades\Auth::user()->email }}
    <br>
    </p>
@endsection
