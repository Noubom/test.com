<html>

<head>
    <title>devoir</title>
    <link rel="stylesheet" type="text/css" media="all" href="footer.css" />
    <form name="formulaire" action="envoi.php" method="POST" class="formulaire">
</head>

<body>
    <fieldset>
        <legend> Formulaire de conact</legend>
        <br><input type="text" placeholder=" Nom" name="nom" class="text" required><br>
        <br><input type="text" placeholder="prenom" name="prenom" class="text" required><br>
        <br><input type="number" placeholder="numero tel" name="tel" id="telephone" required><br>
        <br><input type="text" placeholder="Titre" name="titre" id="titre" required><br>
        <br><input type="text" placeholder="Contenu" name="contenu" id="contenu" required><br>
        <div class="file">
        <label>Pieces Jointes: <span>*</span></label>
        <input type="file" id="file" name="file" placeholder="Pieces jointes"/>
        </div>
    </fieldset>
    <p>
        <center><input type="submit" value="Envoyer" name="valider"></center>
    </p><br>
    </form>
    <footer>
        <?php include("footer.php") ?>
    </footer>
</body>

</html>