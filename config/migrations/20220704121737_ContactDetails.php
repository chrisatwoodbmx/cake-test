<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractMigration;

class ContactDetails extends AbstractMigration
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
        $this->table(Configure::read('namespace.std') . 'contact_details')
            ->addColumn('profile' . Configure::read('namespace.id'), 'integer', [
                'null' => false,
            ])
            ->addColumn('email', 'jsonb', [
                'null' => false,
            ])
            ->addColumn('telephone', 'string', [
                'limit' => 16,
            ])
            ->addColumn('personal_website', 'jsonb', [
                'null' => true
            ])
            ->addColumn('blog', 'jsonb', [
                'null' => true
            ])
            ->addColumn('linkedin_id', 'string', [
                'limit' => 30,
                'null' => true
            ])
            ->addColumn('twitter_username', 'string', [
                'limit' => 15,
                'null' => true
            ])
            ->addColumn('google_scholar_id', 'string', [
                'limit' => 150,
                'null' => true
            ])
            ->addColumn('acadamia_id', 'string', [
                'limit' => 150,
                'null' => true
            ])
            ->addColumn('research_gate', 'string', [
                'limit' => 150,
                'null' => true
            ])
            ->addColumn('orcid_id', 'string', [
                'limit' => 150,
                'null' => true
            ])
            ->create();
    }

    public function down()
    {
        $this->table(Configure::read('namespace.std') . 'contact_details')->drop()->save();
    }
}