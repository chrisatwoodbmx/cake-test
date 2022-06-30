<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;


class CreateExpertise extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'expertises')
            ->addColumn('name', 'string', [
                'limit' => '150',
                'null' => false,
            ])
            ->addColumn('display', 'boolean', [
                'default' => true,
            ])
            ->addIndex(['name', 'display'], [
                'name' => Configure::read('namespace.index') . 'name',
                'unique' => true,
            ])
            ->create();

        $this->table(Configure::read('namespace.mapping') . 'expertises')
            ->addColumn('expertise' . Configure::read('namespace.id'), 'integer', ['null' => false])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', ['null' => false])
            ->addForeignKey('expertise' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'expertises', 'id')
            ->addForeignKey('profile' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'profiles', 'id')
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'expertises')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'expertises')->drop()->save();
    }
}