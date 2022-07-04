<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Specialisms extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'specialisms')
            ->addColumn('name', 'jsonb', [
                'null' => false,
            ])
            ->addColumn('display', 'boolean', [
                'null' => true,
            ])
            ->addIndex(['name', 'display'], [
                'unique' => true,
                'name' => Configure::read('index') . 'specialism_query'
            ])
            ->create();

        /* create mapping */
        $this->table(Configure::read('namespace.mapping') . 'specialisms')
            ->addColumn('specialism' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addForeignKey('specialism' . Configure::read('namespace.id'), 'specialisms', 'id')
            ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'specialisms')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'specialisms')->drop()->save();
    }
}