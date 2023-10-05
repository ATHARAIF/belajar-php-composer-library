<?php

namespace MuhammadAbrar\Belajar;

class Customer{

    public function __construct(private string $name)
    {
    }

    public function sayHai(string $name = "Guest"):string{
        return"Hai $name, My name is $this->name";
    }
}
