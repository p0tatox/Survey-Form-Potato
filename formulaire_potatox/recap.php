<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="stylerecap.css">
    <title>Survey Form Potato</title>
</head>
<body>
    <!-- TITRES -->
    <header>
        <div class="h1-h2">
            <div class="h1">
                <h1>Votre demande</h1>
            </div>
        </div>
        <div class="h1-h2">
            <div class="h2">
                <h2>
                    <!-- On inclu le php -->
                    <?php
                        echo $_POST['intitule']; //echo est utilisé pour faire afficher sur la page.  $_POST, va stocker les informations envoyées par l'utilisateur. Ici, ça va stocker le nom de l'intitulé du projet//
                    ?>
                </h2>
            </div>
        </div>
    </header>
    <form>
        <!-- DIV Cadrant VERT -->
        <div class="contenu-complet">
            <!-- DIV COTE GAUCHE -->
            <div class="gauche">
                <div class="violet">
                    <h3>A la demande de </h3>
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Nom:
                        </div>
                        <div class="placeholder">
                            <?php
                                echo $_POST ['nom'];
                                ?>
                        </div>
                            </p>
                    </div>
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Prénom:
                        </div>    
                        <div class="placeholder">
                            <?php
                                echo $_POST ['prenom'];
                            ?>
                        </div>
                            </p>
                    </div>
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Email:
                        </div>    
                        <div class="placeholder">
                            <?php
                                echo $_POST ['mail'];
                            ?>
                        </div>
                            </p>
                    </div>
                </div>
                <div class="violet">
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Echeance:
                        </div>
                        <div class="placeholder">
                            <?php
                                echo $_POST ['group1'];
                            ?>
                        </div>
                            </p>
                    </div>
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Nature de la demande:
                        </div>
                        <div class="placeholder">
                            <?php
                                echo $_POST ['checkbox'];
                            ?>
                        </div>
                            </p>
                    </div>
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Réponse attendue sous:
                        </div>
                        <div class="placeholder">
                            <?php
                                echo $_POST ['reponse'];
                            ?>
                        </div>        
                            </p>
                    </div> 
                </div>
            </div> <!-- FIN DIV GAUCHE -->
            <!-- DIV COTE DROIT -->
            <div class="droite">
                <div class="violet">
                    <div class="bleu">
                        <div class="rose">
                            <p id="legende">Description du projet</p>
                        </div>
                        <div class="description-projet">
                            <div class="textarea">
                                <textarea id="description-projet" readonly><?php echo $_POST ['description-projet'];?></textarea> <!--readonly c'est pour afficher la lecture du texte seulement sans pouvoir cliquer dedans et modifier le texte -->
                            </div>
                        </div>  
                    </div>
                </div>
            </div><!-- FIN DIV COTE DROIT -->       
        </div> <!-- FIN DIV PRINCIPAL -->
    </form>
</body>
</html>