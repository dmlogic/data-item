<?php

namespace Dmlogic;

use Dmlogic\Traits\Gettable;

class DataItem {

    use Gettable;

    protected $data = [];

    public function __construct($attributes = []) {
        $this->setAttributes($attributes);
    }
}