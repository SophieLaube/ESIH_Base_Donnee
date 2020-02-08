<?php
$return_employee = "";
$isWhileShown = false;
include("eras_nav.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <title>Lister par type</title>
</head>
<body>
<div class="container-fluid">
    <form action="eras_lister_type_resultat.php" method="post">
    <div class="row">
        <div class="col-md-4 mb-3">
                <label for="state">Lister par type</label>
                <select name="type_personne" class="custom-select d-block w-100" id="state" required>
                    <option value="etudiant">Etudiant(Par defaut)</option>
                    <option value="professeur">Professeur</option>
                    <option value="administration">Administration</option>
                </select>
                <div class="invalid-feedback">
                    Please provide a valid type.
                </div>
                <br>
                <input type="submit" value="Lister" class="btn btn-info" id="nom" name="lister_par_type">
        </div>
    </div>
    </form>
</div>
    <?php include_once("footer.php");?>
</body>
</html>