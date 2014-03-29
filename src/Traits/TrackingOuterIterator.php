<?php
namespace TabletopWargaming\Common\Traits;

trait TrackingOuterIterator
{
    public function current()
    {
        return $this->getInnerIterator()->current();
    }

    public function key() {
        return $this->getInnerIterator()->key();
    }

    public function next()
    {
        return $this->getInnerIterator()->next();
    }

    public function rewind()
    {
        return $this->getInnerIterator()->rewind();
    }

    public function valid()
    {
        return $this->getInnerIterator()->valid();
    }
}
