<?php

namespace Twipla\Twipla\Controller\Admin;

use OxidEsales\Eshop\Application\Controller\Admin\ModuleConfiguration;
use OxidEsales\Eshop\Core\Registry;
use Twipla\Twipla\Core\SettingsHelper;

class CustomModuleConfiguration extends ModuleConfiguration
{
    public function save(): void
    {
        parent::save();
        foreach ($this->_aConfParams as $existingConfigType => $existingConfigName) {
            $requestValue = Registry::getRequest()->getRequestParameter($existingConfigName);
            if (is_array($requestValue)) {
                foreach ($requestValue as $configName => $newConfigValue) {
                   SettingsHelper::saveSetting($configName, $newConfigValue);
                }
            }
        }
    }
}
