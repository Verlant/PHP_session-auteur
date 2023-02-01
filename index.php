<?php

// Dans un nouveau répertoire, créez les scripts commun.inc.php, accueil.php et auteur.php que vous aurez développés.
// Dans le script auteur.php, après avoir récupéré le nom de l’auteur visité, ouvrez une session.
// Dans la variable de session nommée visites, enregistrez le timestamp UNIX actuel pour le numéro de l’auteur visité.
// Triez le tableau des auteurs visités en ordre décroissant, en vous assurant de bien préserver les clés.
// Conservez uniquement les trois premiers éléments du tableau des auteurs visités ; pour cela, vous pouvez utiliser la fonction array_slice (voir la documentation de PHP), là encore en vous assurant de bien préserver les clés.

session_start();
include_once 'common/template.php';
