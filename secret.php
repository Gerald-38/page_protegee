<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<?php

if (($_POST['codeSecret'])==='confidentiel')
{
    echo    
    '<h3>Code d\'accès aux informations confidentielles de la NASA</h3> 
     <p>Le code secret pour accéder aux informations top secrètes est : GN5678POT - SPW582019 - CKAWX3</p>
     <p>Ne le repetez à personne svp. Merci.</p>';
}
else
{
echo '<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
    <div class="card-header">ACCES REFUSE</div>
    <div class="card-body">
    <h4 class="card-title">Mot de passe erroné</h4>
    <p class="card-text">Entrez le bon mot de passe pour avoir accès aux données confidentielles</p>
    </div>' . '</br>'; 
}
?>

<br>
<a href="formulaire.php">Nouvel éssai</a>

    
</body>
</html>


