<!DOCTYPE html>
<html lang="fr">
<head>
    <title>Secure&Moi</title> <!-- Changer le titre -->
    <meta charset="utf-8">
	
	<link rel="icon" href="vue/images/favicon.ico" /> <!-- Choisir une icône -->
    <link rel="stylesheet" type="text/css" media="screen" href="vue/css/style2.css"> <!-- Mettre en forme avec un ou plusieurs CSS -->
    <!-- Ajouter vos styles et scripts JS (Bootstrap est accepté) -->
</head>
<body>  <!-- N'hésitez pas à rajouter autant de div, span, id, class... que souhaité pour personnaliser -->
   <header> 
        <h1>Secure&Moi</h1> <!-- Choisir un titre -->
        <nav>  
            <ul class="menu">   <!-- Mettez en place votre menu -->
                <li><a href="index.php">Accueil</a></li>
                <li><a href="index.php?p=tuto">Tuto</a></li>
                <li><a href="index.php?p=equipe">Équipe</a></li>
                <li><a href="index.php?p=contacts">Contacts</a></li>
                <li><a href="index.php?p=apropos">A propos</a></li>
            </ul>
        </nav>
    </header>  
	
	<aside class="authentification"> <!-- Garder une possibilité de connexion pour accéder à votre intranet ! -->
        <form method="post" action="intranet/index.php">
            <fieldset>
                <input type="text" name="login" placeholder="Identifiant" required>
                <input type="password" name="pwd" placeholder="Mot de passe" required>
                <button type="submit" class="connexion">S'authentifier</button>
            </fieldset>  
        </form> 
    </aside>
        
    <!-- Compléter et mettre en forme tout ce qui sera dans vos débuts de page -->
    