<?php
session_start();

if (isset($_SESSION['visite']) and !empty($_SESSION['visite'])) {
    $str = "";
    foreach ($_SESSION['visite'] as $key => $value) {
        switch ($key) {
            case 1:
                $str .= "Victor Hugo - ";
                break;
            case 2:
                $str .= "Arthur Rimbaud - ";
                break;
            case 3:
                $str .= "Paul Vervaine - ";
                break;
            case 4:
                $str .= "Charles Baudelaire - ";
                break;

            default:
                # code...
                break;
        }
    }
    $str = substr_replace($str, "", -3);
}

?>
<h1>Auteurs : </h1>
<ul>
    <li>1 - <a href="common/auteur.php?id_auteur=1">Victor Hugo</a></li>
    <li>2 - <a href="common/auteur.php?id_auteur=2">Arthur Rimbaud</a></li>
    <li>3 - <a href="common/auteur.php?id_auteur=3">Paul Vervaine</a></li>
    <li>4 - <a href="common/auteur.php?id_auteur=4">Charles Baudelaire</a></li>
</ul>
<?php if (isset($str) and !empty($str)) : ?>
    <p><?= $str; ?></p>
<?php endif; ?>