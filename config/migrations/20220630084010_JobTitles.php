<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class JobTitles extends AbstractMigration
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
    $this->table(Configure::read('namespace.std') . 'job_titles')
      ->addColumn('job_title', 'jsonb', [
        'null' => false,
      ])
      ->addIndex('job_title', [
        'unique' => true,
        'name' =>  Configure::read('index') . 'job_title'
      ])

      ->create();

    /* create mapping */
    $this->table(Configure::read('namespace.mapping') . 'job_titles')
      ->addColumn('job_title' . Configure::read('namespace.id'), 'integer', [
        'null' => false
      ])
      ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
        'null' => false
      ])
      ->addForeignKey('job_title' . Configure::read('namespace.id'), 'job_titles', 'id')
      ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
      ->create();

    /* add version history */
  }

  public function down()
  {
    $this->table(Configure::read('namespace.mapping') . 'job_titles')

      ->dropForeignKey('job_title' . Configure::read('namespace.id'))
      ->dropForeignKey('profile' . Configure::read('namespace.id'))
      ->drop()->save();


    $this->table(Configure::read('namespace.std') . 'job_titles')
      ->drop()->save();
  }
}