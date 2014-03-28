<?php
namespace TabletopWargaming\Common\Traits;

trait Nameable
{
    private $name;

    public function getName()
    {
        return $this->name;
    }
}
