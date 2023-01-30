<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Accès restreint</title>
    <link rel="stylesheet" href="../CSS/styleSpaceProtect.css">
</head>

<body>
    <?php
        $password = $_POST["password"];

        if ($password === "123456") {
        echo "C'est le bon mot de passe !";
        }
        elseif ($password !== "123456") {
            echo "Veuillez saisir le bon mot de passe !";
        }
        else{
            header("Location: index.php?localhost");
        }
    ?>
</body>
</html>
