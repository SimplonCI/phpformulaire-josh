<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire</title>
</head>
<body>
    <?php
        $nom = $prenom = $telephone = $ville = $ville = "";
        if (isset($_GET['submit'])) {
            $nom = $_GET['nom'];
            $prenom = $_GET['prenom'];
            $telephone = $_GET['telephone'];
            $ville = $_GET['ville'];
            $sexe = $_GET['genre'];
        }
    ?>
    <div class="container">
        <?php 
            if($sexe == "masculin") {
                echo "<h1 class='title'>Bienvenue monsieur ".$nom." ".$prenom."</h1>";
            } 

            if($sexe == "feminin") {
                echo "<h1 class='title'>Bienvenue madame ".$nom." ".$prenom."</h1>";
            } 
        ?>
        
        <form  metod="GET"  id="formulaire" onsubmit="return validationFormulaire();">
            <fieldset>
                <legend>Formulaire</legend>
                Nom :
                <input type="text" name="nom" id="nom"> <br>
                Prenom
                <input type="text" name="prenom" id="prenom"> <br>
                Telephone
                <input type="tel" name="telephone" id="telephone"> <br>
                <br>
                Ville
                <select name="ville" id="ville">
                    <option value="abidjan">Abidjan</option>
                    <option value="lome">Lome</option>
                    <option value="cotonou">Cotonou</option>
                    <option value="accra">Accra</option>
                </select>
                <br>
                <br>
                Sexe 
                <br>
                <input type="radio" name="genre" value="masculin" id="masculin" checked> Masculin<br>
                <input type="radio" name="genre" value="feminin" id="feminin"> Feminin<br>
                <input type="radio" name="genre" value="autre" id="autre"> autre
                <br>
                <br>
                <input type="submit" name="submit" value="Valider">
            </fieldset>
        </form>
    </div>

    <script src="js/main.js"></script>
</body>
</html>