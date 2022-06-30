<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Locations extends AbstractMigration
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

        /* Set up Postgis */
        $this->query('CREATE EXTENSION IF NOT EXISTS postgis;');


        $this->table(Configure::read('namespace.std') . 'locations')
            ->addColumn('name', 'jsonb', [])
            ->addColumn('estate_code', 'string', [
                'limit' => 10
            ])
            ->addColumn('squiz_code', 'string', [
                'limit' => 8
            ])
            ->addColumn('coordinate', 'point', [
                'null' => true
            ])
            ->addColumn('address_1', 'jsonb', [
                'null' => false,
            ])
            ->addColumn('address_2', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('city', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('region', 'jsonb', [
                'null' => true,
            ])
            ->addColumn('postcode', 'string', [
                'null' => false,
                'limit' => 8
            ])
            ->addColumn('web_address', 'jsonb', [
                'null' => false,
            ])
            ->create();

        $this->table(Configure::read('namespace.mapping') . 'locations')
            ->addColumn('location' . Configure::read('namespace.id'), 'integer', ['null' => false])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', ['null' => false])
            ->addColumn('room', 'jsonb', ['null' => false])
            ->addColumn('floor', 'jsonb', ['null' => true])
            ->addColumn('office_hours', 'jsonb', ['null' => true])
            ->addForeignKey('profile' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'profiles', 'id')
            ->addForeignKey('location' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'locations', 'id')
            ->create();
    }
    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'locations')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'locations')->drop()->save();
    }
}