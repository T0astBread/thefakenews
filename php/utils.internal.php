<?php
/**
 * Created by PhpStorm.
 * User: T0astBread
 * Date: 30.06.2017
 * Time: 03:32
 */

include_once "constants.internal.php";

/**
 * Replaced by Twig template
 * @param $tags
 * @return string
 */
function build_tags_list($tags)
{
    $singleTags = str_getcsv($tags, ";");
    $tagListString = "<ul class='tag-list'>";
    for($i = 0; $i < count($singleTags); $i++)
    {
        $tagListString .= build_tag_list_element($singleTags[$i]);
    }
    return $tagListString."</ul>";
}

function build_tag_list_element($tagname) //Only used by build_tags_list
{
    return "<li>".$tagname."</li>";
}

function limit_text_in_whole_words($text, $targetLimit, $prohibitOverflow = false)
{
    $slices = explode(" ", $text);
    $usedCharacters = 0;
    $finalString = "";
    $overflow = false;
    for($i = 0; $i < count($slices); $i++)
    {
        $slice = $slices[$i]." ";
        $usedCharacters += strlen($slice);
        $overflow = $usedCharacters >= $targetLimit;
        if($prohibitOverflow && $overflow) break;
        $finalString .= $slice;
        if($overflow) break;
    }
    return $overflow ? trim($finalString)."..." : $finalString;
}

function build_link_to_article($articleId)
{
    global $host;
    return $host."reader?id=".$articleId;
}