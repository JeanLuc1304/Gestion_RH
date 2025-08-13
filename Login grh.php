<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="css\login.css">
</head>
<body>
    <form class="liste" action="Login grh.php">
            <div>
                <h2>Connexion</h2> 
                <input type="text" placeholder="NOM" id="username" name="username" required><br>
                <input type="email" placeholder="EMAIL" id="email" name="email" required><br>
                <input type="password" placeholder="PASS" id="password" name="password" required>
            <div>
            <button type="submit">Se connecter</button><br>
            <a href="connexion.php">Creer un compte</a>
    </form>
</body>
</html>