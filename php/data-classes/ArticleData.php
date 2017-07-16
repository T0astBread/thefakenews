<?php

/**
 * Created by IntelliJ IDEA.
 * User: T0astBread
 * Date: 16.07.2017
 */
class ArticleData
{
    private $title;
    private $link;

    /**
     * ArticlePreview constructor.
     * @param $title
     * @param $link
     * @param $textPreview
     */
    public function __construct(string $title, string $link)
    {
        $this->title = $title;
        $this->link = $link;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @return string
     */
    public function getLink()
    {
        return $this->link;
    }
}