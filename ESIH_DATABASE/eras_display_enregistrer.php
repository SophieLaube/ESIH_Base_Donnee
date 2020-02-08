<?php
require("ResourcesHumaines.php");
$_SESSION['message'] = "";

if(isset($_POST["enregistrer"]))
{
    // affectons chaque champs a une variable
    $code = htmlspecialchars($_POST['code']);
    $nom = htmlspecialchars($_POST['nom']);
    $prenom = htmlspecialchars($_POST['prenom']);
    $sexe = htmlspecialchars($_POST['sexe']);
    $nationalite = htmlspecialchars($_POST['nationalite']);
    $tel = htmlspecialchars($_POST['tel']);
    $email = htmlspecialchars($_POST['email']);
    $type_personne = htmlspecialchars($_POST['type_personne']);

    // verifions si les champs ne sont pas vides
    if(!empty($nom) && !empty($prenom) 
    && !empty($sexe) 
    && !empty($nationalite) 
    && !empty($tel) && !empty($email) && !empty($type_personne))
    {
        // Insertion des variables dans le Model
        $r = new ResourcesHumaines($code,$nom,$prenom,$sexe,$nationalite,$tel,$email,$type_personne);
        $resources = [
            "code" => $r->getCode(),
            "nom" => $r->getNom(),
            "prenom" =>$r->getPrenom(),
            "sexe" => $r->getSexe(),
            "nationalite" => $r->getNationalite(),
            "tel" => $r->getTel(),
            "email" => $r->getEmail(),
            "type_personne" => $r->getTypePersonne()
        ];
        global $takes_res;
        $takes_res[] = $resources;
        foreach ($takes_res as $key) {
            print("
                <div class='container-fluid'>
                <br><h4>Nouvel Enregistrement</h4> <br>
                <table class='table table-hover'>
                <thead class='thead-light'>
                    <tr>
                    <th scope='col'>Code</th>
                    <th scope='col'>Nom</th>
                    <th scope='col'>Prenom</th>
                    <th scope='col'>Sexe</th>
                    <th scope='col'>Nationalite</th>
                    <th scope='col'>Tel</th>
                    <th scope='col'>Email</th>
                    <th scope='col'>Type Personne</th>
                    </tr>
                </thead>
                <tbody>
                <!--CODE-->
                    <tr>
                    <th scope='row'>".$key['code']."</th>
                    <td>".$key['nom']."</td>
                    <td>".$key['prenom']."</td>
                    <td>".$key['sexe']."</td>
                    <td>".$key['nationalite']."</td>
                    <td>".$key['tel']."</td>
                    <td>".$key['email']."</td>
                    <td>".$key['type_personne']."</td>
                    </tr> 
                </tbody>
                </table>
                </div>
                </div>
            ");
        }
        $_SESSION['message'] = 'Enregistre avec succes! ';
    }
    else{
        $_SESSION['message'] = 'Erreur: Champ vide';
    }
}else{
    $_SESSION['message'] = "Ne detecte pas d'envoie de forme";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <title>Enregistrement</title>
</head>
<body>
<div class='container-fluid'>
<!--SESSION HOLDER-->
<div class="alert alert-error"><?= $_SESSION['message']; unset($_SESSION['message']);?></div>
    <?php include_once("footer.php");?>
</body>
</html>