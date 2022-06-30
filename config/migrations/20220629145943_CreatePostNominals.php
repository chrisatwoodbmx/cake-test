<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class CreatePostNominals extends AbstractMigration
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
        $table = $this->table(Configure::read('namespace.std') . 'post_nominals')
            ->addColumn('post_nominal', 'string', [
                'limit' => 150,
                'default' => null,
            ]);

        $table->create();

        /*ALTER profiles and add new column */
        $this->table('profiles')
            ->addColumn('post_nominal' . Configure::read('namespace.id'), 'integer', ['null' => true, 'default' => null])
            ->addForeignKey('post_nominal' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'post_nominals', 'id')
            ->update();
    }
    public function down()
    {
        $profileTable = $this->table('profiles');
        $profileTable
            ->dropForeignKey('post_nominal' . Configure::read('namespace.id'))
            ->removeColumn('post_nominal' . Configure::read('namespace.id'))
            ->update();

        $this->table(Configure::read('namespace.std') . 'post_nominals')->drop()->save();
    }
}