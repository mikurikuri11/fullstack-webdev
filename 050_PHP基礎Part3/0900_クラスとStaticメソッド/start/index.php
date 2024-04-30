<?php
/**
 * クラス内のthis
 */
class Person
{
    private $name;
    public $age;
    public static $whereTolive = 'earth';

    function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    function hello() {
        echo 'hello, ' . $this->name;
        static::bye();
        return $this;
    }

    static function bye() {
        echo 'bye';
    }
}

$bob = new Person('Bob', 18);
// Person::bye();
// $bob->hello()->bye();

$tim = new Person('Tim', 32);
$tim->hello();
echo Person::$whereTolive;