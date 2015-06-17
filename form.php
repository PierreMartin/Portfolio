<?php
session_start();
extract($_POST); // $email $nom $prenom $message 

if ( empty($_POST['hidden']) ) {

    if (!empty($email) && !empty($message) ) {

    $email          = htmlentities($email);
    $destinataire   = 'pierremartin.pro@gmail.com';	

    $entete         = 'From:'. $email ."\n";
    $entete        .='Reply-To:'. $email ."\n";
    $entete        .='Content-Type: text/plain; charset="utf-8"' . "\n";
    $entete        .='Content-Transfer-Encoding: 8bit';

    $objet          = 'Ce message proviens de mon portfolio, posté le: '. date("d-m-Y");

    // LES CHAMPS :
    $contenu        = 'Adresse Mail : '. htmlentities($email) . "\n";
    $contenu       .= 'Nom : '.htmlentities($nom) . "\n";
    $contenu       .= 'Prénom : '.htmlentities($prenom) . "\n";
    $contenu       .= 'Message : '.htmlentities($message) . "\n";

    // APPEL FONCTION mail() :
    mail($destinataire, $objet, $contenu, $entete);

    $_SESSION['messageInfo'] = '<span class="messageSend fa fa-check">Votre message a bien été envoyé</span>';

    } else { 
        $_SESSION['messageInfo'] = '<span class="messageErreur">vous n\'avez pas saisi tous les champs obligatoires.</span>';
    }

} 

header('location: ./#ancre_contact');

?>

