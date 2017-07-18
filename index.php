<?php

class Animal
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function walk()
    {
        if($this->name == 'dog' || $this->name == 'cat' || $this->name == 'rat')
            echo $this->name . ' walking';
    }

    public function meow()
    {
        echo $this->name . ' meow';
    }

    public function run()
    {
        echo $this->name . ' run';
    }

    public function wuf()
    {
        echo $this->name . ' wuf';
    }

    public function byte($object)
    {
        echo $this->name . ' has bitten' . $object;
    }

    public function fly()
    {
        echo $this->name . ' fly';
    }

    public function pi()
    {
        echo $this->name . ' pi';
    }
}

$animals = [
    new Animal('cat'), new Animal('dog'), new Animal('sparrow'), new Animal('rat')
];

foreach($animals as $animal) {
    switch($animal->name)
    {
        case 'cat':
            $animal->walk();
            $animal->meow();
            break;
        case 'dog':
            $animal->walk();
            $animal->run();
            $animal->wuf();
            $animal->byte('man');
            break;
        case 'sparrow':
            $animal->walk();
            $animal->tweet();
            $animal->fly();
            break;
        case 'rat':
            $animal->pi();
            break;
    }
    $animal->eat('food');
}