<?php

namespace TabletopWargaming\Common;

use \TabletopWargaming\Common\Interfaces\Group;

class Grouping implements Group
{
    use \TabletopWargaming\Common\Traits\Nameable;

    private $id;

    private $children;

    private $parent;

    public function __construct($id, $name, array $children = array(), Grouping $parent = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->children = $children;
        $this->parent = $parent;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getParent()
    {
        return $this->parent;
    }

    public function getChildren()
    {
        return $this->children;
    }
}
