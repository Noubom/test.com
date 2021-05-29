<html>

<head>
    <meta charset="utf-8">
    <title>envoi</title>
</head>

<body>
    <?php
    $valider = mail('text2fabregas@gmail.com', 'envoi depuis la page de formulaire', 'devoir', 'From : flash-coder.site');
    if ($valider) {
        echo '<p>votre message a bien ete envoyé</p>';
    }
    ?>
</body>

</html>