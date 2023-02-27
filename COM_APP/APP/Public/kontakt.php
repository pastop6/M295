<?php

declare(strict_types=1);

require(__DIR__.'/../vendor/autoload.php');

class kontakt extends app {
    public function __construct($method = "get", $param = 0){
        parent::__construct($method, $param);
        $this->method = $method;
        $this->param = $param;
        $this->run();
    }
}
