<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class SpokenLanguages extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'spoken_languages')
            ->addColumn('name', 'jsonb', [
                'null' => false,
            ])
            ->create();

        /* create mapping */
        $this->table(Configure::read('namespace.mapping') . 'spoken_languages')
            ->addColumn('spoken_language' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false
            ])
            ->addForeignKey('spoken_language' . Configure::read('namespace.id'), 'spoken_languages', 'id')
            ->addForeignKey('profile' . Configure::read('namespace.id'), 'profiles', 'id')
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.mapping') . 'spoken_languages')->drop()->save();
        $this->table(Configure::read('namespace.std') . 'spoken_languages')->drop()->save();
    }
}