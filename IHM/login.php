<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Se Connecter</title>
    <link href=<?=URL."/public/style/login.css"?> rel="stylesheet"/>
    <script src=<?= URL."/public/script/login.js"?>></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
</head>
<body>
    <header>
        <nav class="navbar">
        <ul class="navbar-list">
            <li><span class="title">Fatourti<span></li>
            <li>
                <a class="element" href=<?=URL."utilisateur/connexion"?>>
                <button class="connexion-btn">Connexion</button>
                </a>
            </li>
        </ul>
        </nav>
    </header>
    <main class="main">
        <div class="split">
            <div class="image">
            <img src=<?=URL."/public/img/loginImg.jpg"?> alt="Erreur chargement de l'image">
            </div>
            <div class="login-form">
                <div>
                <h1>Déclarez votre consommation en un clic.</h1>
                <h4 class="lead-txt">Connectez-vous pour acceder à votre espace utilisateur</h4>
                </div>
                <form action="">
                    <h3>Adresse Email</h3>
                    <input type="email" placeholder="exemple@email.com">
                    <h3>Mot de passe</h3>
                    <input type="password">
                    <button class="acceder" type="submit">Accéder</button>
                </form>
            </div>
        </div>
    </main>
</body>
</html>