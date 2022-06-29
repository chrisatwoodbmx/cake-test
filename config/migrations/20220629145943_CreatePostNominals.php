<?php

declare(strict_types=1);

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
        $table = $this->table('post_nominals')
            ->addColumn('post_nominal', 'string', [
                'limit' => 150,
                'default' => null,
            ]);

        $table->create();

        /*ALTER profiles and add new column */
        $profileTable = $this->table('profiles');
        $profileTable
            ->addColumn('post_nominal_id', 'integer', ['null' => true, 'default' => null])
            ->addForeignKey('post_nominal_id', 'profiles', 'id');

        $profileTable->update();
    }
    public function down()
    {
        $profileTable = $this->table('profiles');
        $profileTable
            ->dropForeignKey('post_nominal_id')
            ->removeColumn('post_nominal_id')
            ->update();

        $table = $this->table('post_nominals');

        $table->drop();
    }
}