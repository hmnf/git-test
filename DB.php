<?php

class DataBase{
    public string $dbname;

    public function __construct(string $dbname)
    {
        $this->dbname = $dbname;
    }
}