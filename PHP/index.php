<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accès restreint</title>
    <link rel="stylesheet" href="../CSS/styleIndex.css">
</head>

<body>
    <div id="container">
        <form method="post" action="spaceProtect.php">
            <div>
                <label for="id-password">Mot de passe :</label>
            </div>
            <div>
                <input type="password" id="id-password" name="password" required>
            </div>
            <div>
                <input type="submit" id="id-submit" value="Envoyer">
            </div>
        </form>
    </div>
</body>
</html>
