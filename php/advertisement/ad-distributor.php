<?php
/**
 * Created by IntelliJ IDEA.
 * User: T0astBread
 * Date: 16.07.2017
 */

$ads =
[
    "Ads from our trusted partners",
    "Advertisements that make you smile",
    "Thanks for not turning on AdBlock",
    "CSS is <span style='transform: scale(1.5, .75); display: inline-block'>awesome</span>",
    "I can buy 1/100th of a cup of coffee from you seeing this ad"
];

function getAd()
{
    global $ads;
    return "<p>".$ads[random_int(0, count($ads) - 1)]."</p>";
}