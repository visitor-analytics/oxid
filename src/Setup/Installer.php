<?php

namespace Twipla\Twipla\Setup;

use OxidEsales\Eshop\Core\DatabaseProvider;

class Installer
{
    public static function onActivate()
    {
        $db = DatabaseProvider::getDb();

        // Create table if it doesn't exist
        $sql = "CREATE TABLE IF NOT EXISTS twipla_settings (
                    id INT AUTO_INCREMENT PRIMARY KEY,
                    name VARCHAR(255) NOT NULL UNIQUE,
                    value TEXT,
                    shop_id INT DEFAULT 1
                )";
        $db->execute($sql);

        $sql = "INSERT IGNORE INTO twipla_settings (name, value) VALUES ('twipla_website_id', '')";
        $db->execute($sql);
    }

    // Runs when the module is deactivated
    public static function onDeactivate()
    {
        $db = DatabaseProvider::getDb();

        // Drop the custom table if it exists
        $sql = "DROP TABLE IF EXISTS twipla_settings";
        $db->execute($sql);
    }
}
