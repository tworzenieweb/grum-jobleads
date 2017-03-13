<?php

namespace Jobleads\Model;

class User
{
    private $name;
    private $lastname;



    public function __construct($name, $lastname)
    {
        $this->name = $name;
        $this->lastname = $lastname;
    }



    public function getName()
    {
        return $this->name;
    }



    public function getLastname()
    {
        return $this->lastname;
    }



    public function getFullName()
    {
        return $this->lastname . ' ' . $this->name;
    }



    public function __toString()
    {
        return $this->getFullName();
    }
}
