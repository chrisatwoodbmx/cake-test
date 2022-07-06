<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;


class Profile extends AbstractMigration
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

    /* set up visibilities mapping table */
    $this->table(Configure::read('namespace.mapping') . 'visibilities')
      ->addColumn('name', 'string', [
        'limit' => 15
      ])
      ->create();

    $this->table(Configure::read('namespace.std') . 'profiles')

      ->addColumn('uuid', 'uuid', [
        'default' => null,
        'null' => false,
      ])
      ->addColumn('username', 'string', [
        'limit' => '25',
        'null' => false
      ])
      ->addColumn('profile_type', 'integer', [
        'limit' => 1,
        'default' => 1,
        'null' => false,
      ])
      ->addColumn('visibility' . Configure::read('namespace.id'), 'integer', [
        'default' => null,
        'null' => false,
      ])
      ->addColumn('title' . Configure::read('namespace.id'), 'integer', [
        'default' => null,
        'null' => false,
      ])

      ->addColumn('first_name', 'string', [
        'limit' => 150,
        'default' => null,
        'null' => false,
      ])
      ->addColumn('middle_name', 'string', [
        'limit' => 150,
        'default' => null,
        'null' => false,
      ])
      ->addColumn('last_name', 'string', [
        'limit' => 150,
        'default' => null,
        'null' => false,
      ])
      ->addColumn('known_as', 'jsonb', [
        'default' => null,
        'null' => true,
      ])
      ->addColumn('is_media_expert', 'boolean', [
        'default' => false,
        'null' => false,
      ])
      ->addColumn('is_welsh_speaker', 'boolean', [
        'default' => false,
        'null' => false,
      ])
      ->addColumn('available_supervise', 'boolean', [
        'default' => false,
        'null' => false,
      ])
      ->addColumn('archived', 'boolean', [
        'default' => false,
        'null' => false,
      ])
      ->addColumn('inactive', 'boolean', [
        'default' => false,
        'null' => false,
      ])
      ->addIndex('uuid', [
        'unique' => true,
        'name' => 'idx_uuid'
      ])
      ->addIndex('is_media_expert', [
        'unique' => false,
        'name' => 'idx_is_media_expert'
      ])
      ->addIndex('available_supervise', [
        'unique' => false,
        'name' => 'idx_available_supervise'
      ])
      ->addColumn('created', 'datetime', [
        'default' => null,
        'null' => false,
      ])
      ->addForeignKey('title' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'titles', 'id')
      ->addForeignKey('visibility' . Configure::read('namespace.id'), Configure::read('namespace.mapping') . 'visibilities', 'id')
      ->create();
  }

  public function down()
  {
    $this->table(Configure::read('namespace.std') . 'profiles')->drop()->save();
  }
}