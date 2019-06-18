<?php
namespace Sdk\Xiufu;

// use Marmot\Framework\Interfaces\ISdk;
use Sdk\Xiufu\News\Repository\NewsRepository;

class Sdk 
{
    private $uri;

    private $authKey;

    private $newRepository;

    public function __construct(string $uri, array $authKey)
    {
        $this->uri = $uri;
        $this->authKey = $authKey;
        $this->newRepository = new NewsRepository($uri, $authKey);
    }

    public function __destruct()
    {
        unset($this->uri);
        unset($this->authKey);
    }

    public function getUri() : string
    {
        return $this->uri;
    }

    public function getAuthKey() : array
    {
        return $this->authKey;
    }

    public function getNewsRepository() : NewsRepository
    {
        return $this->newRepository;
    }
}
