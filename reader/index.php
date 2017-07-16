<?php
if (!isset($_GET["id"])) exit("No article id specified!");

include "../php/constants.internal.php";
include "../php/db/db.internal.php";

$pathToRoot = "../";
include "../php/templating/twig-engine.internal.php";

require_once "../php/advertisement/ad-distributor.php";

$stmt = $mysql->prepare("SELECT * FROM news WHERE id = ?");
$stmt->bind_param("i", $_GET["id"]);

$stmt->execute();
$stmt->bind_result($id, $title, $tags, $text, $imageString);
$stmt->fetch();

echo $twig->render("pages/reader.html.twig", ["title" => $title, "text" => $text, "ad" => getAd()]);

$stmt->close();
$mysql->close();
?>