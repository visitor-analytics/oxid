<?php

namespace Twipla\Twipla\Core;

use OxidEsales\Eshop\Core\ViewConfig as OxidViewConfig;

class ViewConfig extends OxidViewConfig
{
    public function getWebsiteId()
    {
        return SettingsHelper::getSetting('twipla_website_id');
    }
}
