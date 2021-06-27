<?php

Class User{
    public string $name;

    public function __construct(string $dbname)
    {
        $this->dbname = $dbname;
    }
}
