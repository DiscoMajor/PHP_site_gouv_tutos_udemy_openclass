<?php   
/* FORMULAIRE DE BASE */

$erreur='';

if (!empty ($_POST['prenom']) AND !empty ($_POST['nom']) AND !empty ($_POST['datenaissance']) AND !empty ($_POST['lieunaissance']) AND !empty ($_POST['adresse']) AND !empty ($_POST['ville']) AND !empty ($_POST['codepostal']) AND !empty ($_POST['datesortie']) AND !empty ($_POST['heuresortie']))
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
    $erreur='Vous ne pouvez pas sortir vous n\'avez pas rempli le nécéssaire';
}
?>

<?php 
/* case à chocer formulaire */

BLABLABLA
BLABLABLA

?>

<!DOCTYPE html>

<html>

    <head>
        <title>Traitement du formulaire GOUV</title>
    </head>

<body>

    <h1>Traitement du formulaire</h1>

    <?php if ($erreur)  { ?>
    <?= $erreur ?>
    <?php } else {
        '<p>Vous avez rempli le formulaire avec succés</p>';
    } ?>
    <?php ?>


        <p><a href="/">Revenir à l'acceuil du formulaire de sortie</a></p>





</body>


</html> 