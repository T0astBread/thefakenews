<?php

/**
 * Created by IntelliJ IDEA.
 * User: T0astBread
 * Date: 16.07.2017
 */
require_once "ArticleData.php";

class ArticlePreview extends ArticleData
{
    private $textPreview;

    /**
     * ArticlePreview constructor.
     * @param $title
     * @param $link
     * @param $textPreview
     */
    public function __construct(string $title, string $link, string $textPreview)
    {
        parent::__construct($title, $link);
        $this->textPreview = $textPreview;
    }

    /**
     * @return string
     */
    public function getTextPreview()
    {
        return $this->textPreview;
    }
}