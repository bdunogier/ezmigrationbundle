<?php

namespace Kaliop\eZMigrationBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

/**
 * Base command class that all migration commands extend from.
 */
abstract class AbstractCommand extends ContainerAwareCommand
{
    /**
     * @var \Kaliop\eZMigrationBundle\Core\MigrationService
     */
    private $migrationService;

    /**
     * @return \Kaliop\eZMigrationBundle\Core\MigrationService
     */
    public function getMigrationService()
    {
        if (!$this->migrationService)
        {
            $this->migrationService = $this->getContainer()->get('ez_migration_bundle.migration_service');
        }

        return $this->migrationService;
    }
}
