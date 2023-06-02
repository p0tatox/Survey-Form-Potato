<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styleformulaire.css">
    <title>Survey Form Potato</title>
</head>
<!-- Pour tout les éléments dont les données doivent être récupérées, on utilise l'attribut 'name' auquel on va attribuer nom pour le reconnaitre et ainsi, l'appeler dans le code php. --> 
<body>
    <!-- TITRES -->
    <header>
        <div class="h1-h2">
            <div class="h1">
                <h1>Editeur de script</h1>
            </div>
        </div>
        <div class="h1-h2">
            <div class="h2">
                <h2>Nous soumettre votre projet</h2>
            </div>
        </div>    
    </header>
    <!-- FORMULAIRE -->
    <form method="POST" action="recap.php"> <!-- Attribut 1 : Attribut 'method' qui sert à définir la méthode selon laquelle les données vont transiter. Ici,les données ne sont pas visibles dans l’URL, car on utilise la méthode POST. Attribut 2 : 'action' qui définit la page dans laquelle les données seront traitées. -->
        <!-- DIV 1 Cadrant VERT -->
        <div class="contenu-complet">
            <!-- DIV 2 COTE GAUCHE -->
            <div class="gauche">
                <!-- DIV 3 Cadre VIOLET -->
                <div class="violet">
                    <!-- DIV 4 Cadre BLEU -->
                    <div class="bleu">
                        <label class="coordonnees">
                            <!-- DIV 5 Encadré legende ROSE -->
                            <div class="rose">
                                Nom
                            </div>
                            <!-- DIV 6 Encadré placeholder "BEIGE" -->
                            <div class="beige">
                                <input type="text" name="nom" placeholder="Entrez votre nom" required id="nom-prenom-email-intitule">
                            </div>
                        </label>
                    </div>
                    <div class="bleu">
                        <label class="coordonnees">
                            <div class="rose">
                                Prénom
                            </div>
                            <div class="beige">
                                <input type="text" name="prenom" placeholder="Entrez votre prénom" required id="nom-prenom-email-intitule">
                            </div>
                        </label>
                    </div>
                    <div class="bleu">
                        <label class="coordonnees">
                            <div class="rose">
                                E-mail
                            </div>
                            <div class="beige">
                                <input type="text" name="mail" placeholder="Entrez votre email" required id="nom-prenom-email-intitule">
                            </div>
                        </label>
                    </div>
                </div>
                <div class="violet">
                    <div class="bleu">
                        <label>
                            <div class="rose">
                                Echéance
                            </div>
                        </label>
                        <div class="radio">
                            <label>
                                <input type="radio" name="group1" value="Sous 3 mois"> sous 3 mois
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="group1" value="3 à 6 mois"> 3 à 6 mois
                            </label>
                            <br>
                            <label>
                                <input type="radio" name="group1" value="Plus de 6 mois"> plus de 6 mois
                            </label>
                        </div>
                    </div>
                    <div class="bleu"> 
                        <label>
                            <div class="rose">
                                Nature de la demande
                            </div>
                        </label>
                            <!--Checkbox : Sorte de cases à cocher-->
                            <div class="checkbox-container">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox" value="Investissement" /> Investissement
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="checkbox" value="Prestation de conseil" /> Prestation de conseil
                                    </label>
                                </div>
                                <div class="checkbox">
                                    <label id="rep-souhaite">
                                        Réponse souhaitée sous
                                    </label>
                                    <select name="reponse" id="dropdown">
                                        <dropdown id="dropdown">
                                            <option value="1 jour">
                                                1 jour
                                            </option>
                                            <option value="2 jours">
                                                2 jours
                                            </option>
                                            <option value="3 jours">
                                                3 jours
                                            </option>
                                            <option value="4 jours">
                                                4 jours
                                            </option>
                                            <option value="5 jours">
                                                5 jours
                                            </option>
                                            <option value="5 jours">
                                                6 jours
                                            </option>
                                            <option value="7jours">
                                                7 jours
                                            </option>
                                            <option value="8 jours">
                                                8 jours
                                            </option>
                                        </dropdown>
                                    </select>
                                </div>
                            </div>
                    </div>
                </div>
            </div> <!--FIN DIV GAUCHE-->
        <!--DIV 7 COTE DROIT-->
            <div class="droite">
                <div class="violet">
                    <div class="bleu">
                        <label>
                            <div class="rose">
                                Intitulé
                            </div>
                            <div class="beige">
                                <input type="text" name="intitule" placeholder="Intitulé du projet" required id="nom-prenom-email-intitule">
                            </div>
                        </label>
                    </div>   
                    <div class="bleu">
                        <label>
                            <div class="rose">
                                Description du projet
                            </div>
                        </label>
                        <div class="textarea">
                            <textarea name="description-projet" placeholder="Description du projet"></textarea>
                        </div>
                    </div>
                </div>
            </div> <!--FIN DIV COTE DROIT-->
        <!-- div  BOUTONS-->
            <footer>
                <button value="submit" id="envoyer">Envoyer</button>
                <button value="reset" id="reinitialiser"><a href="formulaire_YANG.php">Réinitialiser</a></button> <!-- Le bouton Réinitialiser va renvoyer sur la page du formulaire (vide) grâce à l'élément <a></a -->
            </footer>
        </div> <!--FIN DIV PRINCIPAL-->
    </form>
</body>
</html>