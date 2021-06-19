<?php 

class ObjectInfo {
    public function __construct($object_array = array()) {
        if (is_array($object_array)) {
          reset($object_array);
          while (list($key, $value) = each($object_array)) $this->$key = db_prepare_input($value);
        }
      }
}