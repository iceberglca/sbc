@extends('mail.layoutmail')
@section('content')

    <p>Bonjour,</p>

    <p>Ci-joint un  bon de commande</br>
<p></p><br>

            <?php         if(in_array('3',$tab)){
               echo "MERCI ET BONNE RECEPTION";

            }elseif(in_array('1',$tab)){
 echo "Merci de nous confirmer la date de livraison svp";
            }elseif(in_array('2',$tab)){
                echo "Merci de nous confirmer la date d’exécution des travaux svp";
            }?>
           <br/>
    <p>Dans l’attente, et en vous remerciant,<br>
        <br>
    <p>
        Cordialement,
        <br>
        <br>
        Best regards,
    </p></p><br>


    <strong>{{isset($bc->expediteur->prenom)?ucwords($bc->expediteur->prenom):""}} {{isset($bc->expediteur->nom)?strtoupper($bc->expediteur->nom):""}}</strong>
        <br>

        <strong>SBC</strong>
        <br>
        <br>
    {{isset($bc->expediteur->function)?$bc->expediteur->function:""}} <br>
     <br>
        <label>Téléphone : </label>{{isset($bc->expediteur->contact)?$bc->expediteur->contact:""}}
        <br>
        <label>Mail : </label>{{isset($bc->expediteur->email)?$bc->expediteur->email:""}}
        <br>
    </p>
@endsection
