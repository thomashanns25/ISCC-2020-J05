<!doctype html>
<body>
<html lang="fr">
  <link rel="stylesheet" href="style/vitrine.css">
<head>
  <meta charset="utf-8">
  <title>Summer Code Camp - Contact</title>
  <script src="script.js"></script>
</head>
<header>
<?php
include 'header.php';
?> 
</header>
<main>
    <div class="border-nav"><h2>Contact</h2></div>
<br>
<div class="bordure-form">
    <div class="form">
    <div class="container" >
     <form action="action_page.php">
       <label for="nom">Votre nom</label>
       <br>
        <input type="text" id="nom" name="firstname" placeholder="ex: Hanns Thomas"><br>  

       <label for="email">votre email</label>
       <br>
        <input type="text" id="nom" name="firstname" placeholder="ex: hannsthomas@gmail.com"><br>

       <label for="amélioration">Comment améliorer mon site?</label>
       <br>
       <input type="text" id="nom" name="firstname" placeholder="vos suggestions..."><br>
     <br>
        <input type="submit" value="Envoyer">
    </div>
    </div>
</div>

</main>
<br>
<br>
<br>
<br>
<footer>
<?php
  include 'footer.php'
?>
</footer>  

</body>
</html>