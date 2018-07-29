<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <title>Exercice3</title>
  </head>
  <body>
    <p>
      <?php
      //Déclaration de la fonction avec comme paramètres les deux chaines de caractères
      function doubleChain($chain1, $chain2){
        //La fonction retourne la concaténation des deux chaines de caractères
        return  $chain1.$chain2;
      }
      //On affiche les deux chaines de caractères
      echo doubleChain('Première chaine ', 'Deuxième chaine ');
      ?>
    </p>
  </body>
</html>
