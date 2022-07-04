<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Contents extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'custom_tab_titles')
            ->addColumn('name', 'jsonb', [
                'null' => true,
            ])->addIndex('name', [
                'unique' => true,
                'name' => Configure::read('index') . 'name_custom_title'
            ])
            ->create();

        $this->table(Configure::read('namespace.std') . 'contents')
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false,
            ])
            ->addColumn('overview', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('research', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('teaching', 'jsonb', [
                'null' => true,
            ])

            ->addColumn('biography', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('honours', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('memberships', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('academic_positions', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('engagement', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('committees', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('custom_tab_title' . Configure::read('namespace.id'), 'integer', [
                'null' => true,
            ])
            ->addColumn('custom_tab_content', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('supervision', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('past_supervision', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('thesis_title', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('thesis_content', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('funding', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('funding_sources', 'jsonb', [
                'null' => true,
            ])
            ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
            ->addForeignKey('custom_tab_title' . Configure::read('namespace.id'), 'custom_tab_titles', 'id')

            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.std') . 'contents')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'custom_tab_titles')->drop()->save();
    }
}