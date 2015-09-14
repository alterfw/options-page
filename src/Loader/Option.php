<?php

namespace Alter\Option\Loader;

use Alter\Common\Loader;

class Option extends Loader {

  function __construct() {

    $folder = (!defined('ALTER_OPTIONS')) ? 'option' : ALTER_OPTIONS;
    parent::__construct(null, [$folder]);
    $this->load();

  }

}
