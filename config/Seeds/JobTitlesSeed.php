<?php

declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * JobTitles seed.
 */
class JobTitlesSeed extends AbstractSeed
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
                'job_title' =>  '{"en": "Systems support/developer", "cy":  "Cefnogi Systemau/Datblygwr"}'
            ]
        ];

        $table = $this->table('job_titles');
        $table->insert($data)->save();
    }
}