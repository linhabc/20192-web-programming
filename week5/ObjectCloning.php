<?php
class ObjectTraker
{
    private static $nextSerial = 0;
    private $id, $name;

    function __construct($name)
    {
        $this->name = $name;
    }
}
