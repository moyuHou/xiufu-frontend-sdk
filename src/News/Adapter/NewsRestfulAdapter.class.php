<?php
namespace Sdk\News\Adapter;

class NewsRestfulAdapter extends GuzzleAdapter
{
    private $scenario;

    private $resource;

    public function __construct($url, $authKey)
    {
        $this->scenario = array();

        $this->resource = 'news';
    }

    public function scenario($scenario) : NewsRestfulAdapter
    {
        $this->scenario = $scenario;
        return $this;
    }

    public function fetchOne($id)
    {
        return "success";
        return $this->fetchOneAction($id);
    }

}