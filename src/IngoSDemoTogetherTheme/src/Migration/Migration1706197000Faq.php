<?php declare(strict_types=1);

namespace IngoS\DemoTogetherTheme\Migration;

use Doctrine\DBAL\Connection;
use Shopware\Core\Framework\Migration\MigrationStep;

class Migration1706197000Faq extends MigrationStep
{
    public function getCreationTimestamp(): int
    {
        return 1706197000;
    }

    public function update(Connection $connection): void
    {
        $sql=<<<SQL
CREATE TABLE `faq` (
    `id` BINARY(16) NOT NULL,
    `name` VARCHAR(255) NULL,
    `created_at` DATETIME(3) NOT NULL,
    `updated_at` DATETIME(3) NULL,
    `answer` VARCHAR(255) NULL,
    `question` VARCHAR(255) NULL,
    `technicalName` VARCHAR(255) NULL,
    PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
SQL;
        $connection->executeUpdate($sql);
    }

    public function updateDestructive(Connection $connection): void
    {
        // implement update destructive
    }
}
