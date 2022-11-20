<!-- permet de transformer \r\n en br  et les !! les interprete-->
{!! nl2br(e($msg_contenu)) !!}
<p>
    Cordialement,
    <br>
    Best regards,
<br>
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
