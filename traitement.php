<?php   
/* FORMULAIRE DE BASE */

$erreur='';

if (!empty($_POST['prenom']) AND 
    !empty($_POST['nom']) AND 
    !empty($_POST['datenaissance']) AND 
    !empty($_POST['lieunaissance']) AND 
    !empty($_POST['adresse']) AND 
    !empty($_POST['ville']) AND 
    !empty($_POST['codepostal']) AND 
    !empty($_POST['datesortie']) AND 
    !empty($_POST['heuresortie'])
   )
{
    $prenom= htmlspecialchars ($_POST['prenom']);
    $nom= htmlspecialchars ($_POST['nom']);
    $datenaissance= htmlspecialchars ($_POST['datenaissance']);
    $lieunaissance= htmlspecialchars ($_POST['lieunaissance']);
    $adresse= htmlspecialchars ($_POST['adresse']);
    $ville= htmlspecialchars ($_POST['ville']);
    $codepostal= htmlspecialchars ($_POST['codepostal']);
    $datesortie= htmlspecialchars ($_POST['datesortie']);
    $heuresortie= htmlspecialchars ($_POST['heuresortie']);
}
else
{
    $erreur='<p style=color:red>Vous ne pouvez pas sortir vous n\'avez pas rempli le nécéssaire</p>';
}
?>

<!DOCTYPE html>

<html>

    <head>
        <title>Traitement du formulaire GOUV</title>
    </head>

<body>

    <h1>Traitement du formulaire</h1>


<?php if (!empty($_POST['prenom']) AND 
        !empty($_POST['nom']) AND 
        !empty($_POST['datenaissance']) AND 
        !empty($_POST['lieunaissance']) AND 
        !empty($_POST['adresse']) AND 
        !empty($_POST['ville']) AND 
        !empty($_POST['codepostal']) AND 
        !empty($_POST['datesortie']) AND 
        !empty($_POST['heuresortie'])) 
{ ?> 
        <p style=color:darkgreen>Vous avez rempli le formulaire avec succés</p> 
<?php 
    } else {
         echo $erreur;
} ?>

<?php ?>



<h1>Traitement checkbox</h1>

<p>Et vous sortez pour le(s) motif(s) suivant(s) : </p>

<?php
/* case à chocer formulaire */
if(!empty($_POST['check_list'])) {
    foreach($_POST['check_list'] as $check) {
            echo "</br>";
            echo $check;
            echo "</br>";
    }
}
?>
</br>

<h2>Acceuil</h2>

    <p><a href="/">Revenir à l'acceuil du formulaire de sortie</a></p>





</body>


</html> 