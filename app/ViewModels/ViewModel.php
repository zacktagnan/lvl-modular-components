<?php

namespace App\ViewModels;

use Reflection;
use ReflectionClass;
use ReflectionMethod;
use Illuminate\Support\Str;
use Illuminate\Contracts\Support\Arrayable;

abstract class ViewModel implements Arrayable
{
    public function toArray(): array
    {
        return collect((new ReflectionClass($this))
            ->getMethods())
            ->reject(fn (ReflectionMethod $method) => in_array($method->getName(), ['__construct', 'toArray']))
            ->filter(fn (ReflectionMethod $method) => in_array('public', Reflection::getModifierNames($method->getModifiers())))
            ->mapWithKeys(fn (ReflectionMethod $method) => [Str::camel($method->getName()) => $this->{$method->getName()}()])
            ->toArray();
    }
}
