<?php
/**
 * Created by IntelliJ IDEA.
 * User: T0astBread
 * Date: 16.07.2017
 */

if(!isset($pathToRoot)) die("pathToRoot is not set!");

include $pathToRoot."vendor/autoload.php";

$loader = new Twig_Loader_Filesystem($pathToRoot."templates");
$loader->addPath($pathToRoot."templates/components");
$loader->addPath($pathToRoot."templates/pages");
$twig = new Twig_Environment($loader);