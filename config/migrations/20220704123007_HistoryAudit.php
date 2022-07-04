<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class HistoryAudit extends AbstractMigration
{
    /**
     * Change Method.
     *
     * More information on this method is available here:
     * https://book.cakephp.org/phinx/0/en/migrations.html#the-change-method
     * @return void
     */
    public function up()
    {
        $this->table(Configure::read('namespace.std') . 'history_audits')
            ->addColumn('table', 'string', [
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('field', 'string', [
                'limit' => 30,
                'null' => false,
            ])
            ->addColumn('record' . Configure::read('namespace.id'), 'integer', [
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('old', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('new', 'jsonb', [
                'null' => false,
            ])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'limit' => 6,
                'null' => false,
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false,
            ])
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.std') . 'history_audits')->drop()->save();
    }
}