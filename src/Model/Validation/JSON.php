<?php

declare(strict_types=1);

namespace App\Model\Validation;

/**
 * Undocumented function
 *
 * @param string $value
 * @param [type] $context
 * @return void
 */
class JSON
{
  public static function validContextableJSON(string $value, $context)
  {
    $jsonContents = json_decode($value);

    if ($jsonContents == null) return false;

    return !(!isset($jsonContents->en) || !isset($jsonContents->cy));
  }
}