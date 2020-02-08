<?php
include("eras_nav.php");
$employee = array(
    array("01","Germain","Kevin","Masculin","Haitien","48126868","kgermain150@gmail.com","Etudiant"),
    array("02","Marcelus","Sophie Laube","Feminin","Haitien","46253355","msophielaube16@gmail.com","Etudiant"),
    array("03","St-Preux","Willio","Masculin","Haitien","48126867","stpreuxwillio04@gmail.com","Administration"),
    array("04","Moise","Ebner Brutus","Masculin","Haitien","48484848","moisebner00@gmail.com","Professeur"),
    array("05","Charlemagne","Ralph Alex","Masculin","Haitien","48484858","ralphalexx43@gmail.com","Professeur"),
    array("06","Narcisse","Alkinson","Masculin","Haitien","4545454","narcisseal45@gmail.com","Administration")
);
print("
    <div class='container-fluid'>
    <h4>Liste de tout le personnel de l'ESIH</h4><br>
        <table class='table table-hover'>
            <thead class='thead-light'>
                <tr>
                <th scope='col'>ID</th>
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
    ");
for ($row=0; $row < sizeof($employee); $row++) { 
    for ($el=0; $el < 1; $el++) { 
        print("
        <tr>
        <th scope='row'>".$employee[$row][0]."</th> 
        <td>".$employee[$row][1]."</td>
        <td>".$employee[$row][2]."</td>
        <td>".$employee[$row][3]."</td>
        <td>".$employee[$row][4]."</td>
        <td>".$employee[$row][5]."</td>
        <td>".$employee[$row][6]."</td>
        <td>".$employee[$row][7]."</td>
        </tr>
        ");
    }
}
print("</tbody></table></div>");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="bootstrap/bootstrap/css/bootstrap.min.css">
    <title>Lister Toutes les personnes</title>
</head>
<body>
            <!-- Code -->
    <?php include_once("footer.php");?>
</body>
</html>