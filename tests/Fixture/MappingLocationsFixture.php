<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MappingLocationsFixture
 */
class MappingLocationsFixture extends TestFixture
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
                'location_id' => 1,
                'profile_id' => 1,
                'room' => '',
                'floor' => '',
                'office_hours' => '',
            ],
        ];
        parent::init();
    }
}
