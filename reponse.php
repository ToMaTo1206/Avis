<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="website icon" type="png" href="T.png">

<title>
Avis
</title>
</head>
<body>
<?php
    $destinataire = 'thom84.1206@gmail.com';
    // Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
    $expediteur = $_POST['email'];
    
     
    $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
    $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
    $headers .= 'To: '.$destinataire."\n"; // Mail de reponse
    $headers .= 'From: "Nom_de_destinataire"<'.$expediteur.'>'."\n"; // Expediteur
     
    $message =  '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour '.$_POST['name'].'!<br>
                    '.$_POST['message'].'</div>';
     
    if(mail($destinataire, $message, $headers))
    {
        echo '<script languag="javascript" >alert("Votre message a bien été envoyé ");</script>';
    }
    else // Non envoyé
    {
        echo '<script languag="javascript">alert("Votre message n\'a pas pu être envoyé");</script>';
    }
    header('Location: monformulaire.php');
?>
</body>
</html>
