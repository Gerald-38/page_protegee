<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Formulaire d'accès</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="bootstrap.min.css">
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <h3>Page d'accès au code secret permettant de consulter les données confidentielles de la NASA</h3>

    <form action="secret.php" method="POST">

    <p><label for="">Entrez le code secret : <input type="text" name="codeSecret"></label></p>

    <input type="submit">

    </form>
    
</body>
</html>