<?php

abstract class Person
{
    protected string $name;
    protected string $age;
    protected string $model;
    protected string $salary;

    public function __construct(string $name, string $age,
        string $address, string $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->address = $address;
        $this->salary = $salary;
    }

    public function getInfo()
    {
        return [
            'name' => $this->name,
            'age' => $this->age,
            'address' => $this->address,
            'salary' => $this->salary
        ];
    }

    public abstract function skillCheck();
}

