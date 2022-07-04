<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class Pronouns extends AbstractMigration
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
        $table = $this->table(Configure::read('namespace.std') . 'pronouns')
            ->addColumn('pronoun', 'string', [
                'limit' => 25,
                'default' => null,
            ]);

        $table->create();

        /*ALTER profiles and add new column */
        $profileTable = $this->table(Configure::read('namespace.std') . 'profiles');
        $profileTable
            ->addColumn('pronoun' . Configure::read('namespace.id'), 'integer', ['null' => true, 'default' => null])
            ->addForeignKey('pronoun' . Configure::read('namespace.id'), Configure::read('namespace.std') . 'pronouns', 'id');

        $profileTable->update();
    }
    public function down()
    {
        $this->table(Configure::read('namespace.std') . 'profiles')
            ->dropForeignKey('pronoun' . Configure::read('namespace.id'))
            ->removeColumn('pronoun' . Configure::read('namespace.id'))
            ->update();


        $this->table(Configure::read('namespace.std') . 'pronouns')->drop()->save();
    }
}