<?php
if(!isset($_GET["query"]) || strlen($_GET["query"]) == 0) exit("Enter a search query!");

include "constants.internal.php";
include "db/db.internal.php";
include "utils.internal.php";
require_once "data-classes/ArticleSearchResult.php";

$stmt = $mysql->prepare("SELECT id, title, tags FROM news WHERE title LIKE ? OR tags LIKE ?");
$matchText = "%" . $_GET["query"] . "%";
$stmt->bind_param("ss", $matchText, $matchText);

$stmt->execute();
$stmt->bind_result($id, $title, $tags);
$articles = [];
while($stmt->fetch())
{
    array_push($articles, new ArticleSearchResult($title, build_link_to_article($id), str_getcsv($tags, ";")));
}

$pathToRoot = "../";
include "templating/twig-engine.internal.php";

echo $twig->render("components/search-results.html.twig", ["articles" => $articles]);


$stmt->close();
$mysql->close();
?>