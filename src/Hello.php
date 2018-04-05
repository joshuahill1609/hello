<?php

namespace jjh\Hello;

use Illuminate\Database\Eloquent\Model;

class Hello extends Model
{
    public function sayHello($name)
    {
        return "Hello {$name}!";
    }
}
