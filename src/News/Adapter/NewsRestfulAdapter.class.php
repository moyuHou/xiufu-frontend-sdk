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
<<<<<<< HEAD
        // return $this->fetchOneAction($id);
=======
        return $this->fetchOneAction($id);
>>>>>>> 95c011c3999771f64496d482ee6c739652bc01e1
    }

}