<?php
session_start();
$id_auteur = filter_input(INPUT_GET, "id_auteur");
$this_dateTime = new DateTime();
$this_timestamp = $this_dateTime->getTimestamp();

$_SESSION['visite'][$id_auteur] = $this_timestamp;

arsort($_SESSION['visite']);
$_SESSION['visite'] = array_slice($_SESSION['visite'], 0, 3, true);

header("Location: ../index.php");
