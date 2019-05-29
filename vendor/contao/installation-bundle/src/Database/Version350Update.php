<?php

declare(strict_types=1);

/*
 * This file is part of Contao.
 *
 * (c) Leo Feyer
 *
 * @license LGPL-3.0-or-later
 */

namespace Contao\InstallationBundle\Database;

class Version350Update extends AbstractVersionUpdate
{
    /**
     * {@inheritdoc}
     */
    public function shouldBeRun(): bool
    {
        $schemaManager = $this->connection->getSchemaManager();

        if (!$schemaManager->tablesExist(['tl_member'])) {
            return false;
        }

        $columns = $schemaManager->listTableColumns('tl_member');

        return isset($columns['username']) && true === $columns['username']->getNotnull();
    }

    /**
     * {@inheritdoc}
     */
    public function run(): void
    {
        $this->connection->query('
            ALTER TABLE
                tl_member
            CHANGE
                username username varchar(64) COLLATE utf8_bin NULL
        ');

        $this->connection->query("
            UPDATE
                tl_member
            SET
                username = NULL
            WHERE
                username = ''
        ");

        $this->connection->query('
            ALTER TABLE
                tl_member
            DROP INDEX
                username,
            ADD UNIQUE KEY
                username (username)
        ');
    }
}
