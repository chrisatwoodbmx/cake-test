<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class ResearchGroups extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'research_groups')
            ->addColumn('parent' . Configure::read('namespace.id'), 'integer', [
                'null' => true,
            ])
            ->addColumn('name', 'jsonb', [
                'null' => false,
            ])
            ->addIndex('name', [
                'unique' => true,
                'name' => Configure::read('index') . 'name__research_groups'
            ])
            ->create();

        $this->table(Configure::read('namespace.std') . 'research_groups')
            ->addForeignKey('parent' . Configure::read('namespace.id'), 'research_groups', 'id')
            ->save();

        /* create mapping */
        $this->table(Configure::read('namespace.mapping') . 'research_groups')
            ->addColumn('research_group' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addForeignKey('research_group' . Configure::read('namespace.id'), 'research_groups', 'id')
            ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'research_groups')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'research_groups')->drop()->save();
    }
}