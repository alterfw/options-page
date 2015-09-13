<?php

use Alter\Common\Loader;

class OptionLoader extends Loader {

  function __construct() {

    $folder = (!defined('ALTER_OPTIONS')) ? 'option' : ALTER_OPTIONS;
    parent::__construct(null, [$folder]);
    $this->load();

  }

}
