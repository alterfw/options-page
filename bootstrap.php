<?php

use Alter\Option\Loader\Option;
if(function_exists('get_bloginfo')) { // Only loads in WordPress environment
  if(!defined('APPLICATION_PATH')) define('APPLICATION_PATH', \get_template_directory());
  new Option();
}
