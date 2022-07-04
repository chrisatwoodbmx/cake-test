<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * ActivitiesFixture
 */
class ActivitiesFixture extends TestFixture
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
                'profile_id' => 1,
                'action_id' => 1,
                'ip_address' => 'Lorem ipsum dolor sit amet',
                'user_agent' => 'Lorem ipsum dolor sit amet',
                'created' => 1656948604,
            ],
        ];
        parent::init();
    }
}
