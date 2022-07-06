<?php

namespace App\Database;

// Our value object is immutable.
class Point
{
  protected $_lat;
  protected $_long;

  // Factory method.
  public static function parse($value)
  {
    // Parse the WKB data from MySQL.
    $unpacked = unpack('x4/corder/Ltype/dlat/dlong', $value);

    return new static($unpacked['lat'], $unpacked['long']);
  }

  public function __construct($lat, $long)
  {
    $this->_lat = $lat;
    $this->_long = $long;
  }

  public function lat()
  {
    return $this->_lat;
  }

  public function long()
  {
    return $this->_long;
  }
}