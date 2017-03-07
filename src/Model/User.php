<?php

namespace Jobleads\Model;

class User
{
    private $name;
    private $lastname;

    public function __construct(string $name, string $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function getLastname(): string
    {
        return $this->lastname;
    }

    public function __toString()
    {
        return $this->lastname . ' ' . $this->name;
    }
}
