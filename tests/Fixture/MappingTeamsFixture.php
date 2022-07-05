<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * MappingTeamsFixture
 */
class MappingTeamsFixture extends TestFixture
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
                'team_id' => 1,
                'profile_id' => 1,
            ],
        ];
        parent::init();
    }
}
