<?php

namespace Twipla\Twipla\Core;

use OxidEsales\Eshop\Core\DatabaseProvider;

class SettingsHelper
{
    public static function getSetting($name)
    {
        $db = DatabaseProvider::getDb();
        $sql = "SELECT value FROM twipla_settings WHERE name = ?";
        return $db->getOne($sql, [$name]);
    }

    public static function saveSetting($name, $value)
    {
        $db = DatabaseProvider::getDb();
        $sql = "INSERT INTO twipla_settings (name, value) VALUES (?, ?)
                ON DUPLICATE KEY UPDATE value = ?";
        $db->execute($sql, [$name, $value, $value]);
    }
}
