<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class CreateTeams extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'teams')
            ->addColumn('parent' . Configure::read('namespace.id'), 'integer', [
                'null' => true,
            ])
            ->addColumn('team', 'jsonb', [
                'null' => false,
            ])
            ->addIndex('team', [
                'unique' => true,
                'name' => Configure::read('index') . 'name'
            ])
            ->create();

        $this->table(Configure::read('namespace.std') . 'teams')
            ->addForeignKey('parent' . Configure::read('namespace.id'), 'teams', 'id')
            ->save();

        /* create mapping */
        $this->table(Configure::read('namespace.mapping') . 'teams')
            ->addColumn('team' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addForeignKey('team' . Configure::read('namespace.id'), 'teams', 'id')
            ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
            ->create();

        /* add version history */
    }

    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'teams')
            ->drop()->save();

        $this->table(Configure::read('namespace.std') . 'teams')
            ->drop()->save();
    }
}