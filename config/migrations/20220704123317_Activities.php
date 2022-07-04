<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Activities extends AbstractMigration
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
        $this->table(Configure::read('namespace.mapping') . 'activities_types')
            ->addColumn('name', 'string',  [
                'limit' => 20
            ])->create();

        if ($this->isMigratingUp()) {
            $this->table(Configure::read('namespace.mapping') . 'activities_types')
                ->insert([
                    [
                        'name' => 'LOGOUT'
                    ],
                    [
                        'name' => 'LOGIN'
                    ],
                    [
                        'name' => 'FAILED_LOGIN'
                    ]
                ])->save();
        }

        $this->table(Configure::read('namespace.std') . 'activities')
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false,
            ])
            ->addColumn('action' . Configure::read('namespace.id'), 'integer', [
                'null' => false,
            ])
            ->addColumn('ip_address', 'cidr', [
                'null' => false,
            ])
            ->addColumn('user_agent', 'string', [
                'null' => true,
                'limit' => 255
            ])
            ->addColumn('created', 'datetime', [
                'default' => null,
                'null' => false,
            ])
            ->addForeignKey('profile' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'profiles', 'id')
            ->addForeignKey('action' . Configure::read('namespace.id'), Configure::read('namespace.mapping') . 'activities_types', 'id')
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.std') . 'activities')->drop()->save();
        $this->table(Configure::read('namespace.mapping') . 'activities_types')->drop()->save();
    }
}