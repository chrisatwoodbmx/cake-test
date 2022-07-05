<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MappingSpecialismsFixture
 */
class MappingSpecialismsFixture extends TestFixture
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
                'specialism_id' => 1,
                'profile_id' => 1,
            ],
        ];
        parent::init();
    }
}
