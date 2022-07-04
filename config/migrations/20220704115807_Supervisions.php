<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Supervisions extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'supervisions')
            ->addColumn('supervisor' . Configure::read('namepace.id'), 'jsonb', [
                'null' => false,
            ])
            ->addColumn('student' . Configure::read('namepace.id'), 'boolean', [
                'null' => true,
            ])
            ->addIndex('supervisor', [
                'name' => Configure::read('index') . 'supervisor'
            ])
            ->addIndex('student', [
                'name' => Configure::read('index') . 'student'
            ])
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.std') . 'supervisions')->drop()->save();
    }
}