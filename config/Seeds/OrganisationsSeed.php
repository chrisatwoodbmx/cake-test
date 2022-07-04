<?php

declare(strict_types=1);

use Cake\Core\Configure;
use Migrations\AbstractSeed;

/**
 * Organisations seed.
 */
class OrganisationsSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'parent' . Configure::read('namespace.id') => null,
                'name' => 'IT'
            ],
            [
                'parent' . Configure::read('namespace.id') => 1,
                'name' => 'Web and mobile applications'
            ],
        ];

        $table = $this->table(Configure::read('namespace.std') . 'organisations');
        $table->insert($data)->save();
    }
}