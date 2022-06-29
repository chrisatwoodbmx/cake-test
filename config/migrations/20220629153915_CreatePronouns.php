<?php

declare(strict_types=1);

use Migrations\AbstractMigration;

class CreatePronouns extends AbstractMigration
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
        $table = $this->table('pronouns')
            ->addColumn('pronoun', 'string', [
                'limit' => 25,
                'default' => null,
            ]);

        $table->create();

        /*ALTER profiles and add new column */
        $profileTable = $this->table('profiles');
        $profileTable
            ->addColumn('pronoun_id', 'integer', ['null' => true, 'default' => null])
            ->addForeignKey('pronoun_id', 'pronouns', 'id');

        $profileTable->update();
    }
    public function down()
    {
        $profileTable = $this->table('profiles');
        $profileTable
            ->dropForeignKey('pronoun_id')
            ->removeColumn('pronoun_id')
            ->update();


        $table = $this->table('pronouns');

        $table->drop();
    }
}