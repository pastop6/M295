<?php
declare(strict_types=1);

namespace src;

interface database
{
    public function __construct($method = 'getData', $param = 0);
    public function getData($id = 0);
    public function update($id = 0);
    public function delete($id = 0);
    public function insert();

}