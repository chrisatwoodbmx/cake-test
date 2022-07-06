<?php

namespace App\Database\Type;

use App\Database\Point;
use Cake\Database\DriverInterface;
use Cake\Database\Expression\FunctionExpression;
use Cake\Database\ExpressionInterface;
use Cake\Database\Type\BaseType;
use Cake\Database\Type\ExpressionTypeInterface;

class PointType extends BaseType implements ExpressionTypeInterface
{
  public function toPHP($value, DriverInterface $d)
  {
    return Point::parse($value);
  }

  public function marshal($value)
  {
    if (is_string($value)) {
      $value = explode(',', $value);
    }
    if (is_array($value)) {
      return new Point($value[0], $value[1]);
    }
    return null;
  }

  public function toExpression($value): ExpressionInterface
  {
    if ($value instanceof Point) {
      return new FunctionExpression(
        'ST_MakePoint',
        [
          $value->lat(),
          $value->long()
        ]
      );
    }
    if (is_array($value)) {
      return new FunctionExpression('ST_MakePoint', [$value[0], $value[1]]);
    }
    // Handle other cases.
  }

  public function toDatabase($value, DriverInterface $driver)
  {
    return $value;
  }
}