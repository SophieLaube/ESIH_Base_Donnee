<?php
include("eras_nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/main.css" rel="stylesheet" type="text/css"/>
    <link href="bootstrap/bootstrap/css/bootstrap.min.css"  rel="stylesheet" type="text/css"/>
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Enregister - Gestion Resource Humaine</title>
</head>
<body>
    <div class="container">
        <form action="eras_display_enregistrer.php" method="post">
            <div class="form-group">
                <h2 style="color:#424242;">Enregistrer un employee</h2>
            </div>
            <!--Champ Code-->
            <div class="form-group">
                <label for="code">Code</label>
                <input type="text" class="form-control" name="code" id="code" aria-describedby="textHelp" placeholder="Entrer Code">
                <small id="textHelp" class="form-text text-muted">Entrer votre code.</small>
            </div>
            <!--Champ Nom-->
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" name="nom" id="nom" aria-describedby="textHelp" placeholder="Entrer nom">
                <small id="textHelp" class="form-text text-muted">Entrer votre signature.</small>
            </div>
            <!--Champ Prenom-->
            <div class="form-group">
                <label for="prenom">Prenom</label>
                <input type="text" class="form-control" id="prenom" name="prenom" aria-describedby="textHelp" placeholder="Entrer prenom">
                <small id="textHelp" class="form-text text-muted">Entrer votre prenom.</small>
            </div>
            <!--Champ Sexe-->
            <div class="form-group">
                <label for="sexe">Sexe</label>
                <select class="form-control" id="sexe" name="sexe">
                    <option value="masculin">masculin</option>
                    <option value="feminin">feminin</option>
                </select>
                <small id="textHelp" class="form-text text-muted">Entrer votre sexe.</small>
            </div>
            <!--Nationalite-->
            <div class="form-group">
                <label for="nationnalite">Nationalite</label>
                <input type="text" class="form-control" id="nationalite" name="nationalite" aria-describedby="textHelp" placeholder="Entrer nationalite">
                <small id="textHelp" class="form-text text-muted">Entrer votre nationalite.</small>
            </div>
            <!--Tel-->
            <div class="form-group">
                <label for="tel">Tel</label>
                <input type="text" class="form-control" id="tel" name="tel" aria-describedby="textHelp" placeholder="Entrer # telephone">
                <small id="textHelp" class="form-text text-muted">Entrer numero d'telephone.</small>
            </div>
            <!--Email-->
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Entrer email">
                <small id="emailHelp" class="form-text text-muted">Entrer votre email.</small>
            </div>
            <!--Type-->
            <div class="form-group">
                <label for="type">Type</label>
                <select class="form-control" id="type" name="type_personne">
                    <option value="etudiant">Etudiant</option>
                    <option value="professeur">Professeur</option>
                    <option value="administration">Personne Administrative</option>
                </select>
                <small id="textHelp" class="form-text text-muted">Entrer le type</small>
            </div>
            <!--Boutton d'envoie-->
            <button type="submit" name="enregistrer" class="btn btn-primary">Enregistrer</button>
        </form>
    </div>
    <?php include_once("footer.php");?>
</body>
</html>