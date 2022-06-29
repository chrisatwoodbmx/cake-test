<?php


use Migrations\AbstractMigration;

class CreateTitles extends AbstractMigration
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
        $table = $this->table('titles');
        $table->addColumn('title', 'string', [
            'default' => null,
            'limit' => 50,
            'null' => false,
        ]);
        $table->create();
    }

    public function down()
    {
        $table = $this->table('title');
        $table->drop();
    }
}