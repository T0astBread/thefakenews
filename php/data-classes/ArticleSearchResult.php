<?php

/**
 * Created by IntelliJ IDEA.
 * User: T0astBread
 * Date: 16.07.2017
 */
require_once "ArticleData.php";

class ArticleSearchResult extends ArticleData
{
    private $tags;

    public function __construct(string $title, string $link, array $tags)
    {
        parent::__construct($title, $link);
        $this->tags = $tags;
    }

    /**
     * @return array
     */
    public function getTags(): array
    {
        return $this->tags;
    }
}