<?php
/**
 * クラス継承
 */
abstract class Person
{
    private $name;
    public $age;
    public const WHERE = 'Earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    final function hello() {
        echo 'hello, ' . $this->name;
        return $this;
    }

    static function bye() {
        echo 'bye';
    }

    abstract function say();
}

class Japanese extends Person
{
    // function hello()
    // {
    // }
    function say() {
        echo "Yes!!";
    }
}

$bob = new Person('Bob', 18);
$bob->hello();