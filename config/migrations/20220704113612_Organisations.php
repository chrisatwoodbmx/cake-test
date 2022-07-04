<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Organisations extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'organisations')
            ->addColumn('parent' . Configure::read('namespace.id'), 'integer', [
                'null' => true,
            ])
            ->addColumn('name', 'jsonb', [
                'null' => false,
            ])
            ->addIndex('name', [
                'unique' => true,
                'name' => Configure::read('index') . 'name__organisations'
            ])
            ->create();

        $this->table(Configure::read('namespace.std') . 'organisations')
            ->addForeignKey('parent' . Configure::read('namespace.id'), 'organisations', 'id')
            ->save();

        /* create mapping */
        $this->table(Configure::read('namespace.mapping') . 'organisations')
            ->addColumn('organisation' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addForeignKey('organisation' . Configure::read('namespace.id'), 'organisations', 'id')
            ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'organisations')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'organisations')->drop()->save();
    }
}