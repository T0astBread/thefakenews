<?php
include "php/constants.internal.php";
include "php/db/db.internal.php";
include "php/utils.internal.php";

require_once "php/data-classes/ArticlePreview.php";
require_once "php/advertisement/ad-distributor.php";


$query = $mysql->query("SELECT * FROM news LIMIT 5");
$articles = [];
while($row = $query->fetch_assoc())
{
    array_push($articles, new ArticlePreview($row["title"],
        build_link_to_article($row["id"]),
        limit_text_in_whole_words($row["text"], 32)));
}
$query->close();

$pathToRoot = "";
include "php/templating/twig-engine.internal.php";
echo $twig->render("pages/index.html.twig", ["recentArticles" => $articles, "ad" => getAd()]);

$mysql->close();
?>