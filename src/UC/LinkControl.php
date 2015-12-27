<?php

/**
 * Class to build HTML links.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package LinkControl
 */

namespace WebDevJL\Framework\UC;

use WebDevJL\Framework\Enums\HtmlAttributes\HtmlAttributeConstants;
use WebDevJL\Framework\Enums\HtmlAttributes\LinkAttributeConstants;
use WebDevJL\Framework\Helpers\HtmlControlBuildHelper;

class LinkControl extends HtmlControlBase{

  public function __construct() {
    $this->Attributes = array();
    $this->HtmlOutput = "";
  }
  
  public static function Init() {
    $control = new LinkControl();
    return $control;
  }
  
  public function Simple($linkUrl, $linkText) {
    array_push($this->Attributes, HtmlAttribute::Instanciate(HtmlAttributeConstants::Href, $linkUrl));
    array_push($this->Attributes, HtmlAttribute::Instanciate(LinkAttributeConstants::Target, "_BLANK"));
    $this->HtmlOutput = '<a {0} {1}>'. $linkText . '</a>';
    HtmlControlBuildHelper::Init()->GenerateAttributes($this);
    return $this->HtmlOutput;
  }
}
