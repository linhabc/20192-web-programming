<?php
class BaseClass
{
    protected $name = "Baseclass";
    function __construct()
    {
        print("In " . $this->name . " constructor<br>");
    }
    function __destruct()
    {
        print("Destroying " . $this->name . "<br>");
    }
}

class SubClass extends BaseClass
{
    function __construct()
    {
        $this->name = "Subclass";
        parent::__construct();
    }

    function __destruct()
    {
        parent::__destruct();
    }
}

$obj1 = new SubClass();
$obj2 = new BaseClass();
