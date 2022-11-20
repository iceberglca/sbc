@extends('mail.layoutmail')
@section('content')

    <p>{{__('neutrale.bonjour')}}</p>

    <p>{{__('neutrale.adresser_meilleur_offre')}} :
        <br>

        @for($i=0;$i<sizeof($corps);$i++)

            <br> <strong>{{$corps[$i]}}</strong>

            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;{{isset($precisions[$i]) && $precisions[$i]!=""?" ".$precisions[$i]:''}}
            @if(isset($images[$i]) && $images[$i]!="")
                {{__('neutrale.voir_pj')}} : {{$images[$i]}}
    @endif



    @endfor

    <p></p><br>
        <p>{{__('neutrale.dans_lattente')}}<br>
        <br>
        <p>
        {{__('neutrale.cordialement')}},
        <br>
        </p>
    </p>

    <p>
        {{ \Illuminate\Support\Facades\Auth::user()->nom }}
        {{ \Illuminate\Support\Facades\Auth::user()->prenoms }}
        <br>
        <strong>SBC Côte d’Ivoire</strong>
        <br>
        {{ \Illuminate\Support\Facades\Auth::user()->function }}
        <br>
        <label>{{__('neutrale.telephone')}} : </label>{{ \Illuminate\Support\Facades\Auth::user()->contact }}
        <br>
        <label>{{__('translation.email')}} : </label>{{ \Illuminate\Support\Facades\Auth::user()->email }}
        <br>
    </p>
@endsection
