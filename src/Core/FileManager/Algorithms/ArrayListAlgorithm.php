<?php

/**
 * 
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package ArrayListAlgorithm
 */

namespace WebDevJL\Framework\Core\FileManager\Algorithms;

if (!FrameworkConstants_ExecutionAccessRestriction) {
  exit('No direct script access allowed');
}

class ArrayListAlgorithm {

  public static function Init() {
    $instance = new ArrayListAlgorithm();
    return $instance;
  }

  public static function ExcludeList() {
    return array(
        "\\.",
        "\\.\\.",
    );
  }

  public function ExcludeListForTestSuite() {
    $specific = array(
        "Views",
        "Generator",
        ".DS_Store",
        "FrameworkConstants",
    );
    $list = array_merge($specific, self::ExcludeList());
    return $list;
  }
}
