<?php

namespace MuhamamdAbrar\Belajar;

class Customer{

    public function __construct(private string $name)
    {
    }

    public function sayHai(string $name):string{
        return"Hai $name, My name is $this->name";
    }
}
