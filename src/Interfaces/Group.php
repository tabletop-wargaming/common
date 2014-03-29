<?php

namespace TabletopWargaming\Common\Interfaces;

interface Group
{
    public function getId();

    public function getName();

    public function getParent();

    public function getChildren();
}
