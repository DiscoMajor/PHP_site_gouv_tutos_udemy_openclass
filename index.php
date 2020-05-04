<html>

<head>
    <link rel="stylesheet" href="css/gouvcss.css">
    <title>COVID-19-Générateur d'attestation de déplacement dérogatoire</title>
</head>

<!--HEADER -->

<header>

    <!-- BANNIERE GOUV -->

    <div id="bangouv">
        <img src="img/banministere.jpg" alt="bangouv">
    </div>



    <div id="alignement_texteheader">

        <h2>
            <span id="covbackground"> COVID-19  </span><span id="generateurbackground">  Générateur d'attestation de déplacement dérogatoire</span>
        </h2>

        <div class="p_header">
            <p>Les données saisies sont stockées exclusivement sur votre téléphone ou votre ordinateur. Aucune information n'est collectée par le Ministère de l'Intérieur. L'attestation pdf générée contient un QR Code. Ce code-barres graphique permet de
                lire les informations portées dans votre attestation au moment de leur saisie. Il peut être déchiffré à l'aide de tout type de lecteur de QR code générique.</p>
        </div>

    </div>

</header>

<!--BODY TITRE -->

<body>

    <div id="body_avant_formulaires">
        <div id="h3body">
            <h3>
                Remplissez en ligne votre attestation numérique :
            </h3>
        </div>

        <p>Tous les champs sont obligatoires.</p>
    </div>


    <!--FORMULAIRES CLASSIQUES -->

<form method="POST" action="traitement.php">

        <div class="formulaires_classiques">
            <label id="label_formulaires"><p>Prénom</p></label><input type="text" name="prenom" id="size_for_classique" placeholder="Edouard" required>

            <label id="label_formulaires"><p>Nom</p></label><input type="text" name="nom" id="size_for_classique" placeholder="Du Moulin" required>

            <label id="label_formulaires"><p>Date de naissance (au format jj/mm/aaaa)</p></label><input type="date" name="datenaissance" id="size_for_classique" placeholder="12/02/1960" required>

            <label id="label_formulaires"><p>Lieu de naissance</p></label><input type="text" name="lieunaissance" id="size_for_classique" placeholder="Lieu de naissance" required>

            <label id="label_formulaires"><p>Adresse</p></label><input type="text" name="adresse" id="size_for_classique" placeholder="Adresse" required>

            <label id="label_formulaires"><p>Ville</p></label><input type="text" name="ville" id="size_for_classique" placeholder="Ville" required>

            <label id="label_formulaires"><p>Code Postal</p></label><input type="text" pattern="[0-9]{5}" name="codepostal" id="size_for_classique" placeholder="56700" maxlength="5" required>
        </div>



    <!-- TITRES CHECKBOX -->

    </br>
    <h3 id="h3checkbox">Choisissez le ou les motif(s) de sortie</h3>

    <!--FORMULAIRES CHECKBOX -->


    <form method="POST" action="traitement.php">
        <div class="checkbox">
            <div>
                <input type="checkbox" name="check_list[]" value='Sortie pour le travail '><label id="checkbox_bold">Déplacements entre le domicile et le lieu d’exercice de l’activité professionnelle, lorsqu'ils sont indispensables à l'exercice d’activités ne pouvant être organisées sous forme de télétravail ou déplacements professionnels ne pouvant être différés.</label>
            </div>
            </br>
            <div>
                <input type="checkbox" name="check_list[]" value='Déplacements pour des courses '><label id="checkbox_bold">Déplacements pour effectuer des achats de fournitures nécessaires à l’activité professionnelle et des achats de première nécessité dans des établissements dont les activités demeurent autorisées <a href="https://www.service-public.fr/particuliers/actualites/A13921">(liste des commerces et établissements qui restent ouverts)</a>.</label>
            </div>
            </br>
            <div>
                <input type="checkbox" name="check_list[]" value='Sortie pour soins '><label id="checkbox_bold">Consultations et soins ne pouvant être assurés à distance et ne pouvant être différés ; consultations et soins des patients atteints d'une affection de longue durée.</label>
            </div>
            </br>
            <div>
                <input type="checkbox" name="check_list[]" value='Déplacements motif familial,assistance personnes vulnérables/bas âge '><label id="checkbox_bold">Déplacements pour motif familial impérieux, pour l’assistance aux personnes vulnérables ou la garde d’enfants.</label>
            </div>
            </br>
            <div>

                <input type="checkbox" name="check_list[]" value='Déplacement pour activité physique '><label id="checkbox_bold">Déplacements brefs, dans la limite d'une heure quotidienne et dans un rayon maximal d'un kilomètre autour du domicile, liés soit à l'activité physique individuelle des personnes, à l'exclusion de toute pratique sportive collective et de toute proximité avec d'autres personnes, soit à la promenade avec les seules personnes regroupées dans un même domicile, soit aux besoins des animaux de compagnie.</label>
            </div>
            </br>
            <div>
                <input type="checkbox" name="check_list[]" value='Convocation judiciaire ou administrative '><label id="checkbox_bold">Convocation judiciaire ou administrative.</label>
            </div>
            </br>
            <div>
                <input type="checkbox" name="check_list[]" value='Sortie sur demande administrative '><label id="checkbox_bold">Participation à des missions d’intérêt général sur demande de l’autorité administrative.</label>
            </div>
        </div>
    <form>



    <!--FORMULAIRE APRES CHECKBOX -->




        <div class="formulaires_classiques">

            <label id="label_formulaires"><p>Date de sortie</p></label><input type="text" name="datesortie" id="size_for_classique" placeholder="12/03/2020" required>

            <label id="label_formulaires"><p>Heure de sortie</p></label><input type="text" name="heuresortie" id="size_for_classique" placeholder="10:30" required>

            <input type="submit" name="submit" id="submit_button">
        </div>

</form>

 
    <!--BOUTON CREATEUR PDF QUE JE SAIS PAS FAIRE -->
    <!--BOUTON CREATEUR PDF QUE JE SAIS PAS FAIRE -->
    <!--BOUTON CREATEUR PDF QUE JE SAIS PAS FAIRE -->
    <!--BOUTON CREATEUR PDF QUE JE SAIS PAS FAIRE -->



    <!--BAS DE PAGE CREDITS -->

    <div id="credits_gitlink">
        <p id="github">Le code source de ce service est consultable sur <a href="https://github.com/LAB-MI/deplacement-covid-19">Github</a>.</p>

        <p id="credits">Ministère de l'Intérieur - DNUM - SDIT</p>
    </div>


    <!--Image DNUM -->

    <div id="dnum">
        <img src="img/dnum.png" alt="DNUM">
    </div>

    <!--FOOTER / FOOTER / FOOTER -->

    <footer>

        <div id="listfooter">
            <ul>
                <li>
                    <a href="https://media.interieur.gouv.fr/deplacement-covid-19/confidentialite.html" id="a_listfooter">Confidentialité</a>
                </li>
                <br>
                <li>
                    <a href="https://www.interieur.gouv.fr/Infos-du-site/Mentions-legales" id="a_listfooter">Mentions légales</a>
                </li>
                <br>
                <li>
                    <a href="Informations du gouvernement sur le Covid-19" id="a_listfooter">Informations du gouvernement sur le Covid-19</a>
                </li>
                <br>
                <li>Plus d’infos au <a href=0 800 130 000 id="footer_numerotel">0 800 130 000</a></li>
                <br>
                <li>2020 - v1.1.3</li>
            </ul>
        </div>

    </footer>


</body>

</html>