<?php

/**
 * Created by PhpStorm.
 * User: sergiovilar
 * Date: 9/7/15
 * Time: 6:31 PM
 */

abstract class OptionPage extends WD_Creator_Page_TopLevel {

  public $fields;
  public $capability;
  public $title;

  public function __construct() {

    $this->setCapability($this->capability);
    parent::__construct($this->title);

    $this->parseFields();

  }

  private function parseFields() {

    if (!empty($this->fields))

      foreach ($this->fields as $key => $value) {

        switch ($value['type']) {

          case 'text':
            $obj = Form::text($key);
            break;

          case 'long_text':
            $obj = Form::textarea($key);
            break;

          case 'multiple_choice':

            $obj = Form::checkboxes($key . "[]"); // create a collection of checkboxeseaa

            foreach ($value['options'] as $o => $v) {
              $obj->add($o, $v);
            }

            break;

          default:
            $obj = Form::text($key);

        }

        $obj->setLabel($value['label']);

        $this->add($obj);

      }

    $this->init();

  }

}