<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MappingExpertisesFixture
 */
class MappingExpertisesFixture extends TestFixture
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
                'expertise_id' => 1,
                'profile_id' => 1,
            ],
        ];
        parent::init();
    }
}
