<?php

/**
 * Class to retrieve the dal module files and build a class that holds an array 
 * of dal modules constant names.
 * 
 * @author Jeremie Litzler
 * @copyright Copyright (c) 2015
 * @licence http://opensource.org/licenses/gpl-license.php GNU Public License
 * @link https://github.com/WebDevJL/EasyMvc
 * @since Version 1.0.0
 * @package DalModuleNameConstantsGenerator
 */

namespace WebDevJL\Framework\GeneratorEngine\Core;

use WebDevJL\Framework\Core\Config;
use WebDevJL\Framework\Enums\AppSettingKeys;
use WebDevJL\Framework\Core\DirectoryManager;

class DalModuleNameConstantsEngine extends ConstantsClassEngineBase {

  /**
   * Retrieve the lists of filenames.
   * Generate the Classes that list the Dal Modules names available in the
   * solution.
   * 
   * @param assoc array $data depending on the situation, some data can be passed
   * on to generate the files desired.
   */
  public function Run($data = NULL) {
    $FrameworkDalModules = DirectoryManager::GetFileNames(
    $this->packageRootDir . \WebDevJL\Framework\Enums\FrameworkFolderName::DalModulesFolderName);

    $ApplicationDalModules = DirectoryManager::GetFileNames(
    $this->packageRootDir .
                    \WebDevJL\Framework\Enums\ApplicationFolderName::AppsFolderName .
                    $this->app->name() .
                    \WebDevJL\Framework\Enums\ApplicationFolderName::DalModulesFolderName);


    $this->InitGenerateFrameworkFile($FrameworkDalModules);
    $this->InitGenerateApplicationFile($ApplicationDalModules);
  }

  function InitGenerateFrameworkFile($FrameworkControllers) {
    $this->params = array(
        BaseClassGenerator::NameSpaceKey => "WebDevJL\Framework\Generated",
        BaseClassGenerator::ClassNameKey => "Framework" . $this->GeneratedClassPrefix,
        BaseClassGenerator::DestinationDirKey => \WebDevJL\Framework\Enums\FrameworkFolderName::GeneratedFolderName,
        BaseClassGenerator::ClassDescriptionKey => "Lists the constants for framework dal module classes for autocompletion and easy coding.",
        ConstantsClassGeneratorBase::DoGenerateConstantKeysKey => TRUE,
        ConstantsClassGeneratorBase::DoGenerateGetListMethodKey => TRUE
    );
    $this->GenerateFrameworkFile($FrameworkControllers);
  }

  function InitGenerateApplicationFile($ApplicationControllers) {
    $this->params = array(
        BaseClassGenerator::NameSpaceKey => "Applications\\" . $this->app->name() . "\Generated",
        BaseClassGenerator::ClassNameKey => $this->app->name() . $this->GeneratedClassPrefix,
        BaseClassGenerator::DestinationDirKey => \WebDevJL\Framework\Enums\ApplicationFolderName::AppsFolderName .
        $this->app->name() . \WebDevJL\Framework\Enums\ApplicationFolderName::Generated,
        BaseClassGenerator::ClassDescriptionKey => "Lists the constants for application dal module classes for autocompletion and easy coding.",
        ConstantsClassGeneratorBase::DoGenerateConstantKeysKey => TRUE,
        ConstantsClassGeneratorBase::DoGenerateGetListMethodKey => TRUE
    );
    $this->GenerateApplicationFile($ApplicationControllers);
  }

  /**
   * Generate the Constant Class.
   * 
   * @param array(of String) $data the array of data that will be used to build the list of constants
   */
  protected function GenerateConstantsClass($data) {
    if (count($data) > 0) {
      $classGen = new ConstantsAndListClassGenerator($this->params, $data);
      $classGen->BuildClass();
      return str_replace(".php", "", $classGen->fileName);
    } else {
      return "No class to generate.";
    }
  }

}
