<?php

class AppGenerator{
  public string $phone;
  public string $key;

  public function __construct(string $phone)
  {
    $this->phone = $phone;
  }
}