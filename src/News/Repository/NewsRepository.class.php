<?php
namespace Sdk\News\Repository;

use Sdk\News\Adapter\NewsRestfulAdapter;

class NewsRepository
{
    private $adapter;

    public function __construct($url, $authKey)
    {
        $this->adapter = new NewsRestfulAdapter($url, $authKey);
    }

    public function getAdapter() : NewsRestfulAdapter
    {
        return $this->adapter;
    }

    public function scenario($scenario) : void
    {
        $this->getAdapter()->scenario($scenario);
    }

    public function getResource() : string
    {
        return $this->resource;
    }

    public function fetchOne($id) //需要规定类型吗
    {
        $this->getAdapter()->fetchOne($id);
    }
}