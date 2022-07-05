<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MappingJobTitlesFixture
 */
class MappingJobTitlesFixture extends TestFixture
{
    /**
     * Init method
     *
     * @return void
     */
    public function init(): void
    {
        $this->records = [
            [
                'id' => 1,
                'job_title_id' => 1,
                'profile_id' => 1,
            ],
        ];
        parent::init();
    }
}
