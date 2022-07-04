<?php
declare(strict_types=1);

namespace App\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

/**
 * HistoryAuditsFixture
 */
class HistoryAuditsFixture extends TestFixture
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
                'table' => 'Lorem ipsum dolor sit amet',
                'field' => 'Lorem ipsum dolor sit amet',
                'record_id' => 1,
                'old' => '',
                'new' => '',
                'profile_id' => 1,
                'created' => 1656948552,
            ],
        ];
        parent::init();
    }
}
